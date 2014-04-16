<?php
namespace AtansGCP;

use Zend\Log\Logger;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $serviceManager = $e->getApplication()->getServiceManager();
        $options = $serviceManager->get('atanslogger_module_options');

        if ($options->getEnableEventService()) {
            $eventService = $serviceManager->get('atanslogger_event_service');
            $eventService->addEvents($options->getEvents());
        }
    }

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
            'invokables' => array(
            ),
            'factories' => array(
                'atanslogger_module_options' => function ($sm) {
                    $config = $sm->get('Config');
                    return new Options\ModuleOptions(isset($config['atanslogger']) ? $config['atanslogger'] : array());
                },
            ),
        );
    }
}