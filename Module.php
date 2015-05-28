<?php
namespace AtansGCP;

use AtansGCP\Exception;
use Google_Client;
use Zend\ServiceManager\ServiceLocatorInterface;

class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'atansgcp_module_options' => function (ServiceLocatorInterface $sl) {
                    $config = $sl->get('config');
                    return new Options\ModuleOptions(isset($config['atansgcp']) ? $config['atansgcp'] : array());
                },
                'AtansGCP\Google\CloudPrint\CloudPrint' => function(ServiceLocatorInterface $sl) {
                    $client = $sl->get('google_cloud_print_client');
                    return new Google\CloudPrint\CloudPrint($client);
                },
                'google_cloud_print_client' => function(ServiceLocatorInterface $sl){
                    /**
                     * @var Options\ModuleOptions $options
                     */
                    $options = $sl->get('atansgcp_module_options');

                    if (! file_exists($options->getAccessTokenFile())) {
                        $handle = fopen($options->getAccessTokenFile(), 'w');
                        $content = file_get_contents($options->getAccessTokenUri());
                        fwrite($handle, $content);
                        fclose($handle);
                    }

                    $fileSize = filesize($options->getAccessTokenFile());
                    
                    if (! $fileSize) {
                        throw new Exception\RuntimeException(sprintf(
                            '%s: %s is empty file',
                            __METHOD__,
                            $options->getAccessTokenFile()
                        ));
                    }

                    $handle = fopen($options->getAccessTokenFile(), 'r');
                    $accessToken = fread($handle, $fileSize);
                    fclose($handle);

                    $client = new Google_Client();
                    $client->setClientId($options->getClientId());
                    $client->setClientSecret($options->getClientSecret());
                    $client->setRedirectUri($options->getRedirectUri());
                    $client->setAccessType('offline');
                    $client->addScope($options->getScope());
                    $client->setApprovalPrompt('force');

                    $client->setAccessToken($accessToken);

                    if ($client->isAccessTokenExpired()) {
                        if (is_null($client->getRefreshToken())) {
                            throw new Exception\RuntimeException(sprintf(
                                '%s: Refresh token does not exists',
                                __METHOD__
                            ));
                        }

                        $client->refreshToken($client->getRefreshToken());

                        if (! is_writable($options->getAccessTokenFile())) {
                            throw new Exception\RuntimeException(sprintf(
                                '%s: %s is not writable',
                                __METHOD__,
                                $options->getAccessTokenFile()
                            ));
                        }

                        $handle = fopen($options->getAccessTokenFile(), 'w');
                        fwrite($handle, $client->getAccessToken());
                        fclose($handle);
                    }

                    return $client;
                },
            ),
        );
    }
}