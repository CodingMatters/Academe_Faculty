<?php

use Academe\Faculty;

return [
    "dependencies" =>  [
        'aliases'       => [],        
        'invokables'    => [],
        'factories'     => [
            Faculty\Page\IndexPage::class => Faculty\Factory\PageFactory::class
        ],
    ]    
];