<?php

/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Academiae\FacultyTest;

use Academiae\Faculty\Module;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    protected $config;

    public function setUp()
    {
        $module = new Module();
        $this->config = $module->getConfig();
    }

    /**
     * @test
     * @dataProvider configKeys
     */
    public function moduleHasFollowingConfig($key)
    {
        $this->assertArrayHasKey($key, $this->config);
    }

    public function configKeys()
    {
        return [
            'service_manager'       => ['service_manager'],
            'templates'             => ['templates'],
            'view_manager'          => ['view_manager'],
            'middleware_pipeline'   => ['middleware_pipeline'],
            'router'                => ['router'],
            'view_helpers'          => ['view_helpers'],
            'controllers'           => ['controllers'],
            'controller_plugins'    => ['controller_plugins'],
        ];
    }
}
