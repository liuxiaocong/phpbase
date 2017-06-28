<?php

/**
 * Created by PhpStorm.
 * User: xiaocong
 * Date: 25/6/14
 * Time: 12:53 PM
 */
require_once dirname(__FILE__) . '../../Service/ApiService.php';
 if (!function_exists('getallheaders'))
{
    function getallheaders()
    {
        $headers = '';
        foreach ($_SERVER as $name => $value) {
            if (substr($name, 0, 5) == 'HTTP_') {
                $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
            }
        }
        return $headers;
    }
}
class ApiController extends BaseController {
    public function __construct() {
//        response.AddHeader("Cache-Control", "no-cache");
        if($GLOBALS['MOD'] === 'local'){
            $this->apiUrl = Application::getInstance()->getConfig('webapi_local');
            $this->dbconfig = Application::getInstance()->getConfig('pk_db_test');
            //$this->db = new ezSQL_mysql($this->dbconfig["username"],$this->dbconfig["password"],'pkAdmin',$this->dbconfig["domain"].":".$this->dbconfig["port"]);
        }else if($GLOBALS['MOD'] === 'dev'){
            $this->apiUrl = Application::getInstance()->getConfig('webapi_test');
            $this->dbconfig = Application::getInstance()->getConfig('pk_db_test');
            //$this->db = new ezSQL_mysql($this->dbconfig["username"],$this->dbconfig["password"],'pkAdmin',$this->dbconfig["domain"].":".$this->dbconfig["port"]);
        }else{
            $this->apiUrl = Application::getInstance()->getConfig('webapi');
            $this->dbconfig = Application::getInstance()->getConfig('pk_db');
            //$this->db = new ezSQL_mysql($this->dbconfig["username"],$this->dbconfig["password"],'pkAdmin',$this->dbconfig["domain"].":".$this->dbconfig["port"]);
        }

        $this->activityId = Application::getInstance()->getConfig('activityId'); //1000001;
    }

    public function actionGetBaseData() {
        $pkid = Util::getParameter('pkid',100001);
        $json = ApiService::getInstance()->getActivityBase($pkid);
        Util::sendJson($json);
    }
}