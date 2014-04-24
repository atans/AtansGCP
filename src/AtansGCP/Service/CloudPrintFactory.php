<?php
namespace AtansGCP\Service;

use AtansGCP\Google\CloudPrint\CloudPrint;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class CloudPrintFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return CloudPrint
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /**
         * @var \AtansGCP\Options\GCPInterface $options
         */
        $options = $serviceLocator->get('atansgcp_module_options');

        return new CloudPrint(
            $options->getGcpEmail(),
            $options->getGcpPassword(),
            $options->getGcpClientName()
        );
    }

}
