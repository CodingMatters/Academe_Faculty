<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'template_map'          => [],
        'template_path_stack'   => [
            'faculty'  => __DIR__ . '/../view',
        ],
    ],

    // Zend Expressive Configuration
    'templates'     => [
        'map'   => [],
        'paths' => [
            'faculty'  => [__DIR__ . '/../view']
        ]
    ],

    /**
     * Zend View Helpers
     */
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
