<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp/www/testcv/user/plugins/form/blueprints.yaml',
    'modified' => 1448316333,
    'data' => [
        'name' => 'Form',
        'version' => '1.0.0',
        'description' => 'Enables the forms handling',
        'icon' => 'check-square',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'keywords' => 'plugin, form',
        'homepage' => 'https://github.com/getgrav/grav-plugin-form',
        'bugs' => 'https://github.com/getgrav/grav-plugin-form/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'hidden',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
