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

return array(
    'console' => array(
        'router' => array(
            'routes' => array(
                'console-index' => array(
                    'type' => 'simple',
                    'options' => array(
                        'route' => 'console test [<param>]',
                        'defaults' => array(
                            'controller' => 'AimCli\Controller\Index',
                            'action' => 'index',
                        ),
                    ),
                ),
            ),
        ),
    ),
    
    'router' => array(
        'routes' => array(
            'cli' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/cli',
                    'defaults' => array(
                        '__NAMESPACE__' => 'AimCli\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'AimCli\Controller\Index' => 'AimCli\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
?>
