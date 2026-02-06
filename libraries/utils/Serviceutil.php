<?php
class Serviceutil {
    private $modelUtil;
    private $launcher;

    public function __construct($launcher) {
        $this->launcher = $launcher;
    }

    public function CallAuthenticationService(){
        $this->launcher->callService("authentication/Loginservice");
        return new Loginservice($this->launcher);
    }

    public function CallRabbitMQService(){
        $this->launcher->callService("messagebroker/Rabbitmqservice");
        return new Rabbitmqservice($this->launcher);
    }
}