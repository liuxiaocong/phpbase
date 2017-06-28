<?php
/**
 * Created by PhpStorm.
 * User: linmin
 * Date: 25/6/14
 * Time: 1:04 PM
 */
$FRAMEWORK_PATH = __DIR__ . '/common/php/';
$APP_PATH = __DIR__ . '/php';

if(file_exists(__DIR__.'/.local')){
    $GLOBALS['MOD'] = 'local';
}else if(file_exists(__DIR__.'/.dev')){
    $GLOBALS['MOD'] = 'dev';
}else{
    $GLOBALS['MOD'] = 'prd';
}
$config = (object) (require_once $FRAMEWORK_PATH . '/config.php');
$config->src = $APP_PATH;
require_once $FRAMEWORK_PATH . '/Application.php';
//require_once $FRAMEWORK_PATH. '/ez_sql_core.php';
//require_once $FRAMEWORK_PATH. '/ez_sql_mysql.php';
Application::getInstance($config)->start();