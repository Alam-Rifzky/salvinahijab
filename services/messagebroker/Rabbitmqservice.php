<?php
class Rabbitmqservice implements LoggerInterface {

    private $launcher;
    private $modelUtil;

    public function __construct($launcher) {
        $this->launcher = $launcher;
        $this->modelUtil = $launcher->CallVendorUtil();
    }

    public function DebugMessage(string $message): void{
        $logger = $this->launcher->getLoggerObject();
        $logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $this->launcher->getDefaultSessionUsername(), "RabbitmqService - " . $message,'DEBUG');
    }

    public function InfoMessage(string $message): void{
        $logger = $this->launcher->getLoggerObject();
        $logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $this->launcher->getDefaultSessionUsername(), "RabbitmqService - " . $message,'INFO');
    }

    public function ErrorMessage(string $message): void{
        $logger = $this->launcher->getLoggerObject();
        $logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $this->launcher->getDefaultSessionUsername(), "RabbitmqService - " . $message,'ERROR');
    }

    public function SendQuorumQueue(){
        $this->InfoMessage('Preparing to send message to RabbitMQ Quorum Queue.');
        $rabbitObj = $this->modelUtil->CallRabbitMqChannelObj();
        $payload = [
            'to'      => 'rifzky.apple@gmail.com',
            'subject' => 'Welcome Email From Rabbit MQ Service',
            'body'    => 'Hello, your system is now integrated with Rabbit MQ Quorum Queue!'
        ];
        $payload = json_encode($payload, JSON_THROW_ON_ERROR);

        $msg = $rabbitObj->getAmqpMessage();
        $msg->setBody($payload);           // set body later

        $msg->set('content_type', 'application/json');
        $msg->set('delivery_mode', $rabbitObj->getDeliveryMode());
        $msg->set('timestamp', time());
        $msg->set('message_id', uniqid('email_', true));

        $rabbitObj->getChannel()->basic_publish($msg, '', 'email_quorum_queue');
        $this->InfoMessage('Message sent to RabbitMQ Quorum Queue successfully.');

        $rabbitObj->getConnection()->close();
        $rabbitObj->getChannel()->close();
    }

}