<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'common\fixtures',
          ],
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
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
    'params' => $params,
];
