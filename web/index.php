<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

if( file_exists("/wechat/data/release_version/version")) {
	define("RELEASE_VERSION",trim( file_get_contents("/wechat/data/release_version/version")));
}
else{
	define("RELEASE_VERSION",time());
}

(new yii\web\Application($config))->run();
