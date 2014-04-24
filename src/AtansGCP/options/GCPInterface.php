<?php

namespace AtansGCP\Options;

interface GCPInterface
{
    /**
     * Set gcpPassword
     *
     * @param  null $gcpPassword
     * @return ModuleOptions
     */
    public function setGcpPassword($gcpPassword);

    /**
     * Set gcpClientName
     *
     * @param  string $gcpClientName
     * @return ModuleOptions
     */
    public function setGcpClientName($gcpClientName);

    /**
     * Get gcpClientName
     *
     * @return string
     */
    public function getGcpClientName();

    /**
     * Get gcpPassword
     *
     * @return string
     */
    public function getGcpPassword();

    /**
     * Get gcpEmail
     *
     * @return string
     */
    public function getGcpEmail();

    /**
     * Set gcpEmail
     *
     * @param  string $gcpEmail
     * @return ModuleOptions
     */
    public function setGcpEmail($gcpEmail);
}