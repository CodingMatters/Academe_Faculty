<?php

/**
 * Most of the routing definitions will be done in module configuration files.
 *
 * @see https://zendframework.github.io/zend-router/routing/
 */

use Zend\Router\Http\Literal;
use Academiae\Faculty\Controller;

return [
    'faculty' => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/faculty',
            'defaults'  => [
                'controller'    => Controller\IndexController::class,
                'action'        => 'index'
            ]
        ]
    ]
];
