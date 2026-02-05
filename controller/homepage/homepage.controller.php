<?php
class Homepagectr implements LoggerInterface{
    public static $instance = null;
    private $launcher;
    private $logger;
    private $username;

    public static function getInstance($launcher) {
        if (self::$instance == null) {
            self::$instance = new Homepagectr($launcher);
        }
        return self::$instance;
    }

    private function __construct($launcher) {
        $this->launcher = $launcher;
        $this->launcher->Lib('common-flows/viewobj');
        $this->logger = $this->launcher->getLoggerObject();
        $this->username = $this->launcher->getDefaultSessionUsername();
    }

    public function DebugMessage(string $message): void{
        $this->logger->WriteLog($this->launcher->getLogPaths()['visitorLogs'], $this->username, "Homepagectr - " . $message,'DEBUG');
    }

    public function InfoMessage(string $message): void{
        $this->logger->WriteLog($this->launcher->getLogPaths()['visitorLogs'], $this->username, "Homepagectr - " . $message,'INFO');
    }

    public function ErrorMessage(string $message): void{
        $this->logger->WriteLog($this->launcher->getLogPaths()['visitorLogs'], $this->username, "Homepagectr - " . $message,'ERROR');
    }

    public function index(){
        $data['title'] = "Salvina Hijab - Premium Hijab Collection";
        $data['base_url'] = $this->launcher->baseUrl;
        $data['homedir'] = $this->launcher->homedir;
        $this->DebugMessage('Accessing Landing Page');
        $this->launcher->View("homepage/index.homepage",$data);
    }

    // public function (){}

}