<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'timeZone' => 'Asia/Jakarta',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'letsTalk' => [
            'class' => \vintage\lets\talk\configurators\DriversConfig::class,
            'messengers' => [
                'skype' => [
                    'class' => \vintage\lets\talk\drivers\Skype::class,
                    'config' => [
                        'contactData' => '', // nickname here
                        'isCall' => true,
                    ],
                ],
                'telegram' => [
                    'class' => \vintage\lets\talk\drivers\Telegram::class,
                    'config' => [
                        'contactData' => '', // nickname here
                    ],
                ],
                'whatsApp' => [
                    'class' => \vintage\lets\talk\drivers\WhatsApp::class,
                    'config' => [
                        'contactData' => '+6289637438184', // phone number here
                    ],
                ],
            ],
        ],
    ],
];
