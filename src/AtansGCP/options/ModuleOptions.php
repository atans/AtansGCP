<?php
namespace AtansGCP\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions implements ClientInterface
{
    /**
     * @var string
     */
    protected $client_id;

    /**
     * @var string
     */
    protected $client_secret;

    /**
     * @var string
     */
    protected $redirect_uri;

    /**
     * @var string
     */
    protected $scope = 'https://www.googleapis.com/auth/cloudprint';

    /**
     * @var string
     */
    protected $accessTokenUri = '';

    /**
     * @var string
     */
    protected $accessTokenFile = './data/google-cloud-print-access-token.json';

    /**
     * Set client_id
     *
     * @param  string $client_id
     * @return ModuleOptions
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }

    /**
     * Get client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set client_secret
     *
     * @param  string $client_secret
     * @return ModuleOptions
     */
    public function setClientSecret($client_secret)
    {
        $this->client_secret = $client_secret;
        return $this;
    }

    /**
     * Get client_secret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * Set redirect_uri
     *
     * @param  string $redirect_uri
     * @return ModuleOptions
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->redirect_uri = $redirect_uri;
        return $this;
    }

    /**
     * Get redirect_uri
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * Set scope
     *
     * @param  string $scope
     * @return ModuleOptions
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Get scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set accessTokenUri
     *
     * @param  string $accessTokenUri
     * @return ModuleOptions
     */
    public function setAccessTokenUri($accessTokenUri)
    {
        $this->accessTokenUri = $accessTokenUri;
        return $this;
    }

    /**
     * Get accessTokenUri
     *
     * @return string
     */
    public function getAccessTokenUri()
    {
        return $this->accessTokenUri;
    }

    /**
     * Get accessTokenFile
     *
     * @return string
     */
    public function getAccessTokenFile()
    {
        return $this->accessTokenFile;
    }

    /**
     * Set accessTokenFile
     *
     * @param  string $accessTokenFile
     * @return ModuleOptions
     */
    public function setAccessTokenFile($accessTokenFile)
    {
        $this->accessTokenFile = $accessTokenFile;
        return $this;
    }
}