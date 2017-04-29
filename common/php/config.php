<?php
/**
 * Created by PhpStorm.
 * User: xiaocong
 * Date: 23/6/14
 * Time: 2:41 PM
 */

//set singapore timezone
date_default_timezone_set("Asia/Singapore");




if (preg_match("/iP(od|hone|ad)/i", $_SERVER["HTTP_USER_AGENT"])) {
    $platform = "ios";
} else if (preg_match("/android/i", $_SERVER["HTTP_USER_AGENT"])) {
    $platform = "android";
} else {
    $platform = "unknown";
}

return array(
    'platform' => $platform,
    // 'webapi' => 'http://webapi.pkh5.mozat.com/activity',
    // 'webapi' => 'http://webapi.pkh5.moranger.com/activity',
    'webapi' => 'http://webapi.pkh5.lan/activity',
    'webapi_local' => 'http://testwebapi.pkh5.mozat.com/activity',
    'webapi_test' =>'http://192.168.128.125/activity',
    'activityId' => 1000001,
    'pk_db'=>array(
        'domain' => '10.161.141.155',
        'port' => '3306',
        'username' => 'root',
        'password' => 'ScSf9w11ahm99c',
        'charset'=>'utf8',
        'emulatePrepare' => true,
    ),

    'pk_db_test'=>array(
        'domain' => '192.168.50.150',
        'port'=>'12806',
        'username' => 'mozone',
        'password' => 'morangerunmozone',
        'charset'=>'utf8',
        'emulatePrepare' => true,
    ),
    'mongodb' => 'mongodb://10.161.141.71:27017,10.161.142.194:27017,10.132.14.44:27017/pk?replicaset=pk',
    'mongodb_test' => 'mongodb://192.168.128.125:27017,192.168.128.127:27017/pk?replicaset=pktest',
    'mongodb_local' => 'mongodb://localhost:27017/pk'
);