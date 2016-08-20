<?php

use Zend\Expressive\Container;

return [
    'debug' => true,
    'config_cache_enabled' => false,
    
    // Error template handler
    'dependencies' => [
        'invokables'    => [
            'Zend\Expressive\Whoops'            => \Whoops\Run::class,
            'Zend\Expressive\WhoopsPageHandler' => \Whoops\Handler\PrettyPageHandler::class,
        ],
        'factories'     => [
            'Zend\Expressive\FinalHandler' => Container\WhoopsErrorHandlerFactory::class
        ]
    ],
    'whoops' => [
        'json_exceptions' => [
            'display'    => true,
            'show_trace' => true,
            'ajax_only'  => true,
        ]
    ]
];