<?php
namespace AtansGCP;

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
                'atansgcp_module_options' => function ($sm) {
                    $config = $sm->get('config');
                    return new Options\ModuleOptions(isset($config['atansgcp']) ? $config['atansgcp'] : array());
                },
                'AtansGCP\Google\CloudPrint\CloudPrint' => 'AtansGCP\Service\CloudPrintFactory',
            ),
        );
    }
}