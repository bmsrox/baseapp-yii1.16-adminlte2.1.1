<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/protected/vendor/yiisoft/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// get the environment
$env_file=dirname(__FILE__).'/protected/config/environment.php';
$environment = require_once($env_file);

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',$environment['debug']);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',$environment['trace_level']);

require_once($yii);
Yii::createWebApplication($config)->run();
