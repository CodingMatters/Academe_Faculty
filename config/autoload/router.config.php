<?php

return [
    'routes' => [
        [
            'name' => 'faculty',
            'path' => '/faculty',
            'middleware' => Academe\Faculty\Page\IndexPage::class,
            'allowed_methods' => ['GET'],
        ]
    ]
];