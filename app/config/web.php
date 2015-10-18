<?php

/**
 * 项目配置文件
 */
// 项目参数
$params = require(__DIR__ . '/params.php');

// 应用模块
$modules = require(__DIR__ . '/modules.php');

$config = [
    'id' => 'pro',
    // @todo basePath 配置
    'basePath' => PATH_ROOT . DIRECTORY_SEPARATOR . 'app',
    'defaultRoute' => 'main/index/index',
    'runtimePath' => PATH_ROOT . DIRECTORY_SEPARATOR . 'data/runtime',
    'vendorPath' => PATH_ROOT . DIRECTORY_SEPARATOR . 'vendor',
    'bootstrap' => ['log'],
    'language' => 'zh-CN',
    'timeZone' => 'PRC',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'fsdjfs395798(*&(^^*FHDHF^*%*%7657s',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /**
         * 一个用户加入多个社团时
         * 每个社团使用不同的登陆密码
         */
        'user' => [
            'identityClass' => 'app\modules\user\models\User',
            'enableAutoLogin' => false,
        ],
        'errorHandler' => [
            'errorAction' => 'main/base/error',
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
        'assetManager' => [
            'basePath' => '@webroot/static',
            'baseUrl' => '@web/static',
        ],
    ],
    'params' => $params,
    'modules' => $modules,
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
