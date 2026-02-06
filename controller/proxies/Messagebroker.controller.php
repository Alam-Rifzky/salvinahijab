<?php
class MessagebrokerController {
    private static $instance = null;
    private $launcher;
    private $logger;
    private $username;
    private $svcUtil;

    public static function getInstance($launcher) {
        if (self::$instance == null) {
            self::$instance = new MessagebrokerController($launcher);
        }
        return self::$instance;
    }

    private function __construct($launcher) {
        $this->launcher = $launcher;
        $this->logger = $this->launcher->getLoggerObject();
        $this->username = $this->launcher->getDefaultSessionUsername();
        $this->svcUtil = $this->launcher->CallServiceUtil();
    }

    public function DebugMessage(string $message): void{
        $this->logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $this->username, "MessagebrokerController - " . $message,'DEBUG');
    }

    public function InfoMessage(string $message): void{
        $this->logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $this->username, "MessagebrokerController - " . $message,'INFO');
    }

    public function ErrorMessage(string $message): void{
        $this->logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $this->username, "MessagebrokerController - " . $message,'ERROR');
    }

    public function TestRabbitMQ(){
        $this->DebugMessage('Starting RabbitMQ Test Message Publish.');
        $svc = $this->svcUtil->CallRabbitMQService();
        $svc->SendQuorumQueue();

    }
}