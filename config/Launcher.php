<?php
class Launcher {
    public static $instance = null;
    public $baseUrl;
    public $homedir;
    public $databasehost;
	public $database; 
	public $databaseusername;
	// public static $databasepassword = 'mx-5.m@zd@SP33DHUNTER#2025'; // SIT,UAT,PRODUCTION
	public $databasepassword;
    private function __construct() {
        $this->baseUrl = "http://localhost:8080/salvinahijab/";
        $this->homedir = 'C:/xampp/htdocs/salvinahijab/';
        $this->databasehost = 'localhost';
        $this->database = 'salvinahijab';
        $this->databaseusername = 'rifzky';
        $this->databasepassword = '4vr1lLavigne';
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Launcher();
        }
        return self::$instance;
    }


    public function callController($controllername){
        require_once $this->homedir . "controller/" . $controllername . ".php";
    }

    public function callService($serviceName){
        require_once $this->homedir . "services/" . $serviceName . ".php";
    }

    public function View($path,$data){
        include_once $this->homedir.'view/'.$path.'.php';
    }

    public function Lib($file){
        include_once $this->homedir.'libraries/'.$file.'.php';
    }

    public function Ent($file){
        include_once $this->homedir.'entities/beans/'.$file.'.php';
    }

    public function CallInterface($file){
        include_once $this->homedir.'interfaces/'.$file.'.php';
    }

    public function JustInclude($path){
        include_once $this->homedir.$path.'.php';   
    }

    public function Model($file){
        include_once $this->homedir.'model/'.$file.'.php';
    }

    public function getLogPaths(){
        return [
            'userLogs' => $this->homedir.'logs/userlogs/',
            'visitorLogs' => $this->homedir.'logs/visitorlogs/'
        ];
    }

    public function getDefaultSessionUsername(){
        return (isset($_SESSION['username'])) ? $_SESSION['username'] : str_replace(':','_',$_SERVER['REMOTE_ADDR']);
    }
}