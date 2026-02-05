<?php
class Loginservice implements LoggerInterface{
    private $launcher;
    private $modelUtil;

    public function __construct($launcher) {
        $this->launcher = $launcher;
        $this->modelUtil = $launcher->CallModelUtil();
    }

    public function DebugMessage(string $message): void{
        $logger = $this->launcher->getLoggerObject();
        $username = $this->launcher->getDefaultSessionUsername();
        $logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $username, "LoginService - " . $message);
    }

    public function InfoMessage(string $message): void{
        $logger = $this->launcher->getLoggerObject();
        $username = $this->launcher->getDefaultSessionUsername();
        $logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $username, "LoginService - " . $message,'INFO');
    }

    public function ErrorMessage(string $message): void{
        $logger = $this->launcher->getLoggerObject();
        $username = $this->launcher->getDefaultSessionUsername();
        $logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $username, "LoginService - " . $message,'ERROR');
    }

    public function authenticateUser($username, $password) {
        $output = $this->modelUtil->LoadAuthModel()->validateCredentials($username, md5($password));
        $this->DebugMessage('Data From Model: ' . count($output) . ' record(s) found.');
        return $output;
    }
}