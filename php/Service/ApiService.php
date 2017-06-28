<?php
require_once dirname(__FILE__) . '../../../common/php/Util.php';
class ApiService extends BaseController {
    public static $_instance;
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

        $this->getActivityBaseUrl = $this->apiUrl . "/getActivityStatus?sig=";

    }
    public static function getInstance() {
        if (is_null(self::$_instance) || !isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function getActivityBase($pkid){
        $url = $this->getActivityBaseUrl;//fake
        $param = json_encode(array(
            'userId' =>$pkid,
            "activityId" => $this->activityId
        ));
        $ret = json_decode(Util::sendUrlPostJson($url, $param));
        return $ret;
    }
}