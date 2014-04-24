<?php
namespace AtansGCP\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions implements
    GCPInterface
{
    /**
     * @var string
     */
    protected $gcpEmail = null;

    /**
     * @var string
     */
    protected $gcpPassword = null;

    /**
     * @var string
     */
    protected $gcpClientName = 'AtansGCP_Client';

    /**
     * Get gcpEmail
     *
     * @return string
     */
    public function getGcpEmail()
    {
        return $this->gcpEmail;
    }

    /**
     * Set gcpEmail
     *
     * @param  string $gcpEmail
     * @return ModuleOptions
     */
    public function setGcpEmail($gcpEmail)
    {
        $this->gcpEmail = $gcpEmail;

        return $this;
    }

    /**
     * Get gcpPassword
     *
     * @return string
     */
    public function getGcpPassword()
    {
        return $this->gcpPassword;
    }

    /**
     * Set gcpPassword
     *
     * @param  null $gcpPassword
     * @return ModuleOptions
     */
    public function setGcpPassword($gcpPassword)
    {
        $this->gcpPassword = $gcpPassword;
        return $this;
    }

    /**
     * Get gcpClientName
     *
     * @return string
     */
    public function getGcpClientName()
    {
        return $this->gcpClientName;
    }

    /**
     * Set gcpClientName
     *
     * @param  string $gcpClientName
     * @return ModuleOptions
     */
    public function setGcpClientName($gcpClientName)
    {
        $this->gcpClientName = $gcpClientName;
        return $this;
    }
}