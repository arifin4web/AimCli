<?php

/**
 * AimCli - Sample command line integration module in ZF2.
 *
 * @package   AimCli
 * @author    Md. Arifin Ibne Matin<contact@arifinbinmatin.com>
 * @link      http://arifinbinmatin.com
 * @license   GPL-2.0+ 
 * @copyright 2014 Md. Arifin Ibne Matin
 */

namespace AimCli;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
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

}

?>
