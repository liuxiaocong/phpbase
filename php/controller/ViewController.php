<?php

/**
 * Created by PhpStorm.
 * User: xiaocong
 * Date: 5/8/14
 * Time: 12:53 PM
 */

require_once dirname(__FILE__) . '../../Service/ApiService.php';


class ViewController extends BaseController
{

    public function __construct()
    {
        //test id
        $this->pkid = 100001;
        if ($GLOBALS['MOD'] == 'prd') {
            if (strpos($_SERVER['HTTP_USER_AGENT'], "PKUID/") == false) {
                //header("Location: http://pkleyou.cn");
            }else
            {
                $pkuid = substr($_SERVER['HTTP_USER_AGENT'], strpos($_SERVER['HTTP_USER_AGENT'], "PKUID/"));
                if (strpos($pkuid, " ") > 6) {
                    $this->pkid = intval(substr($pkuid, 6, strpos($pkuid, " ") - 6));
                } else {
                    $this->pkid = intval(substr($pkuid, 6));
                }
            }
        }
        if($GLOBALS['MOD'] != 'local')
        {
            $pkuid = substr($_SERVER['HTTP_USER_AGENT'], strpos($_SERVER['HTTP_USER_AGENT'], "PKUID/"));
            if (strpos($pkuid, " ") > 6) {
                $this->pkid = intval(substr($pkuid, 6, strpos($pkuid, " ") - 6));
            } else {
                $this->pkid = intval(substr($pkuid, 6));
            }
        }
    }

    /*start index*/
    public function actionIndex()
    {
        //AppService 返回对象
        //ApiController 返回字符串 -》前端ajax请求
        //other db -> $db = new ezSQL_mysql('root','password','phpmyadmin','127.0.0.1');
        //$db = ApiService::getInstance()->db;
        //$data = $db->get_results("SELECT * FROM pk_user");
        //$serverData = ApiService::getInstance()->getActivityBase($this->pkid);
        //$collection = DbService::getInstance()->addCollection("test");
        //$document = DbService::getInstance()->addDocument("test",array("name"=>"pk"));
        //DbService::getInstance()->updateDocument("test",array("name"=>"pk"),array("age"=>19));
        //$documents = DbService::getInstance()->findDocument('test',"",0,10);
        //var_dump($documents);
        echo $this->render("index", array(
                'data' =>  '$data',
                'serverData'=>'$serverData'
            )
        );
    }
    public function actionIntro()
    {
        $code = Util::getParameter("code", "");
        $view = "intro";
        echo $this->render($view, array(
            'code' => $code
        ));
    }
}
