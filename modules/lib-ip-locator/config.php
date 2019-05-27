<?php

return [
    '__name' => 'lib-ip-locator',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-ip-locator.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-ip-locator' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibIpLocator\\Iface' => [
                'type' => 'file',
                'base' => 'modules/lib-ip-locator/interface'
            ],
            'LibIpLocator\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-ip-locator/library'
            ]
        ],
        'files' => []
    ],
    'callback' => [
        'app' => [
            'reconfig' => [
                'LibIpLocator\\Library\\Config::reconfig' => TRUE
            ]
        ]
    ],
    'libIpLocator' => [
        'keeper' => [],
        'finder' => []
    ]
];