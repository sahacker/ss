<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'app',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
//    'language' => 'ru-RU',
    'language' => 'ru',
//    'language' => ['ru-RU'],
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['admin', 'MODE', 'OWNER', 'WORK', 'AUDIT', 'HOSTER', 'CUSTOMER'], // Здесь нет роли "guest", т.к. эта роль виртуальная и не присутствует в модели UserExt
        ],  
	'i18n' => [
        'translations'=>[
            'app*'=>[
                'class'=>'yii\i18n\PhpMessageSource',
//                'class'=>yii\i18n\PhpMessageSource::className(),
//                'basePath'=>'@app/messages',
                'basePath'=>'@yii/messages',
//		'basePath' => dirname(__DIR__),
//		'basePath' => dirname(__DIR__),
//                'basePath' => dirname(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'yiisoft'.DIRECTORY_SEPARATOR.'yii2'.DIRECTORY_SEPARATOR.'messages'),
//                'sourceLanguage'=>'en',
                'sourceLanguage'=>'en-US',
//                'sourceLanguage'=>'ru',
//		'forceTranslation' => true,
                'fileMap'=>[
                    'app'=>'yii.php',
//                    'app/error'=>'error.php',
                ]
            ],
        ]
	],
      'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '_eDi7C78R3NG8S3j2dP4WcMt0bsur-JO',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
