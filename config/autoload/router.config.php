<?php

use Academiae\Faculty;
use CodingMatters\Kernel;

return [
    "dependencies" =>  [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => [
            Faculty\Page\IndexPage::class   => Kernel\Factory\PageFactory::class,
            Faculty\Page\ProfilePage::class => Kernel\Factory\PageFactory::class,
        ],
    ],
    'routes' => [
        [
            'name' => 'faculty',
            'path' => '/faculty',
            'middleware' => Faculty\Page\IndexPage::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'faculty-profile',
            'path' => '/faculty/profile',
            'middleware' => Faculty\Page\ProfilePage::class,
            'allowed_methods' => ['GET'],
        ]
    ]
];
