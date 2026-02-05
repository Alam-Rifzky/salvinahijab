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
    private $env;
    private $routeFound = false;

    private function __construct() {
        $this->baseUrl = "http://localhost:8080/salvinahijab/";
        $this->homedir = 'C:/xampp/htdocs/salvinahijab/';
        $this->databasehost = 'localhost';
        $this->database = 'u2032818_data'; //'salvinahijab';
        $this->databaseusername = 'facinsti_rifzky'; //'rifzky';
        $this->databasepassword = 'bmwM3GTR@2025!!'; //4vr1lLavigne';
        $this->env = 'local';
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
            'visitorLogs' => $this->homedir.'logs/visitorlogs/',
            'authLogs' => $this->homedir.'logs/auth/'
        ];
    }

    public function getDefaultSessionUsername(){
        return (isset($_SESSION['username'])) ? $_SESSION['username'] : str_replace(':','_',$_SERVER['REMOTE_ADDR']);
    }

    public function GetRoutePath($reqUri){
        $path = trim(parse_url($reqUri, PHP_URL_PATH), '/');
        $segments = explode('/', $path);
        
        $key      = ($this->env=='local') ? $segments[2] ?? null : $segments[1] ?? null;
        $offset   = ($this->env=='local') ? 3 : 2;
        $segments = ($key!=null) ? array_slice($segments, $offset) : [];

        return [
            'key' => $key,
            'segments' => $segments
        ];
    }

    public function RouteMapping($key, $mapping){
        if ($key == $mapping){
            $this->routeFound = true;
            return true;
        } else {
            return false;
        }
    }

    public function getRouteFound(){
        return $this->routeFound;
    }

    public function getLoggerObject(){
        $this->Lib('files/Filebean');
        return new Filebean();
    }

    public function CallModelUtil(){
        $this->Lib('utils/Modelutil');
        $this->Model('core/Drivermodel');
        $coreModel = new Drivermdl($this);
        return new Modelutil($coreModel);
    }

    public function CallServiceUtil(){
        $this->Lib('utils/Serviceutil');
        return new Serviceutil($this);
    }
}