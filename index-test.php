<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

// change the following paths if necessary
$yii=dirname(__FILE__).'/protected/vendor/yiisoft/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/test.php';

// get the environment
$env_file=dirname(__FILE__).'/protected/config/environment.php';
$environment = require_once($env_file);

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',$environment['debug']);

require_once($yii);
Yii::createWebApplication($config)->run();
