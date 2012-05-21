<?php
namespace DluPhpSettings;

use Zend\EventManager\Event;

class Module
{
    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * Configure PHP ini settings on the bootstrap event
     * @param \Zend\EventManager\Event $e
     */
    public function onBootstrap(Event $e) {
        $app            = $e->getApplication();
        $config         = $app->getConfiguration();
        $phpSettings    = $config['phpSettings'];
        if($phpSettings) {
            foreach($phpSettings as $key => $value) {
                ini_set($key, $value);
            }
        }
    }
}
