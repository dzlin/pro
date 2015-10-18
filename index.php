<?php

// 开发环境，在生产部署时，注释掉
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// 项目根目录
define('PATH_ROOT', dirname(__FILE__));

// composer 类自动加载文件
require(__DIR__ . '/vendor/autoload.php');

// yii核心文件
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

// 加载配置文件
$config = require(__DIR__ . '/app/config/web.php');

// @todo 一些目录别名设置
// 启动应用
(new yii\web\Application($config))->run();
