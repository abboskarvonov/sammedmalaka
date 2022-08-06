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
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
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
        'socialShare' => [
            'class' => \ymaker\social\share\configurators\Configurator::class,
            'socialNetworks' => [
                'vk' => [
                    'class' => \ymaker\social\share\drivers\Vkontakte::class,
                ],
                'facebook' => [
                    'class' => \ymaker\social\share\drivers\Facebook::class,
                ],
                'twitter' => [
                    'class' => \ymaker\social\share\drivers\Twitter::class,
                ],
                // 'linkedin' => [
                //     'class' => \ymaker\social\share\drivers\LinkedIn::class,
                // ],
                // 'pinterest' => [
                //     'class' => \ymaker\social\share\drivers\Pinterest::class,
                // ],
                // 'tumblr' => [
                //     'class' => \ymaker\social\share\drivers\Tumblr::class,
                // ],
                // 'odnoklasniki' => [
                //     'class' => \ymaker\social\share\drivers\Odnoklassniki::class,
                // ],
                'telegram' => [
                    'class' => \ymaker\social\share\drivers\Telegram::class,
                ],
                // 'viber' => [
                //     'class' => \ymaker\social\share\drivers\Viber::class,
                // ],
                // 'whatsapp' => [
                //     'class' => \ymaker\social\share\drivers\WhatsApp::class,
                // ],
                'gmail' => [
                    'class' => \ymaker\social\share\drivers\Gmail::class,
                ],
                // 'yahoo' => [
                //     'class' => \ymaker\social\share\drivers\Yahoo::class,
                // ],
            ],
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                ],
            ],
        ],
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['uz', 'ru', 'en'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pattern'=>'sahifalar/<link:\w+>',
                    'route' => 'site/pages',
                    'suffix' => '.php',
                ],
                [
                    'pattern'=>'page/<link:\w+>',
                    'route' => 'site/multipage',
                    'suffix' => '.php',
                ],
                [
                    'pattern'=>'sahifa/<link:\w+>',
                    'route' => 'site/linkpage',
                    'suffix' => '.php',
                ],
                [
                    'pattern'=>'batafsil/<link:\w+>',
                    'route' => 'site/view',
                    'suffix' => '.php',
                ],
            ],
        ],
        
    ],
    'params' => $params,
];
