<?php

return [

    'routePrefix' => 'relay',

    'defaultHeaders' => [
        'Content-Type' => [
            'text/html; charset=utf-8',
        ],
    ],

    'headers' => [

        'html' => [
            'Content-Type' => [
                'text/html; charset=utf-8',
            ],
        ],

        'json' => [
            'Pragma'        => [
                'no-cache',
            ],
            'Cache-Control' => [
                'no-store',
                'no-cache',
                'must-revalidate',
                'post-check=0',
                'pre-check=0',
            ],
            'Content-Type' => [
                'application/json; charset=utf-8',
            ],
        ],

        'xml'  => [
            'Content-Type' => [
                'text/xml; charset=utf-8',
            ],
        ],

    ],

    'routes' => [
        'api/order' => [
            'middleware' => ['fractal'],
            'config' => [
                'commerce' => [],
            ],
        ],
    ],

];