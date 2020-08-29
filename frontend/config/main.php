<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [

        'view' => [
            'theme' => [
                'basePath' => '@frontend/themes',
                'baseUrl' => '@web',
            ]
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'frontend\models\Users',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,            
            'rules' => [                    
            ],
        ],

        
        'urlManagerBackend' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/../backend/web',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
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
                        'contactData' => 'tanardi94', // nickname here
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
