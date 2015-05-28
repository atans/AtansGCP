<?php
namespace AtansGCP\Options;

interface ClientInterface
{
    /**
     * Set client_id
     *
     * @param  string $client_id
     * @return ModuleOptions
     */
    public function setClientId($client_id);

    /**
     * Get client_id
     *
     * @return string
     */
    public function getClientId();

    /**
     * Set client_secret
     *
     * @param  string $client_secret
     * @return ModuleOptions
     */
    public function setClientSecret($client_secret);

    /**
     * Get client_secret
     *
     * @return string
     */
    public function getClientSecret();

    /**
     * Set redirect_uri
     *
     * @param  string $redirect_uri
     * @return ModuleOptions
     */
    public function setRedirectUri($redirect_uri);

    /**
     * Get redirect_uri
     *
     * @return string
     */
    public function getRedirectUri();

    /**
     * Set scope
     *
     * @param  string $scope
     * @return ModuleOptions
     */
    public function setScope($scope);

    /**
     * Get scope
     *
     * @return string
     */
    public function getScope();

    /**
     * Set accessTokenUri
     *
     * @param  string $accessTokenUri
     * @return ModuleOptions
     */
    public function setAccessTokenUri($accessTokenUri);

    /**
     * Get accessTokenUri
     *
     * @return string
     */
    public function getAccessTokenUri();

    /**
     * Get accessTokenFile
     *
     * @return string
     */
    public function getAccessTokenFile();

    /**
     * Set accessTokenFile
     *
     * @param  string $accessTokenFile
     * @return ModuleOptions
     */
    public function setAccessTokenFile($accessTokenFile);
}