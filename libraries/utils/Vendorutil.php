<?php
class Vendorutil {
    private $libObj;
    private $launcher;

    public function __construct($launcher) {
        $this->launcher = $launcher;
    }

    public function CallRabbitMqChannelObj(){
        $this->launcher->Lib("rabbitmq/vendor/autoload");
        $this->launcher->Ent("rabbitmqbean/Rabbitmqbean");
        
        $vars = $this->launcher->GetExternalVariable('rabbitmq_var');
        $connection = new PhpAmqpLib\Connection\AMQPStreamConnection(
            $vars['host'],   // host
            $vars['port'],          // port
            $vars['user'],   // username
            $vars['password'], // password
            $vars['vhost']    // vhost
        );
        $rabbitmqBean = new Rabbitmqbean();
        $rabbitmqBean->setConnection($connection);
        $rabbitmqBean->setChannel($connection->channel());

        $rabbitmqBean->setAmqpMessage(new PhpAmqpLib\Message\AMQPMessage());
        $rabbitmqBean->setDeliveryMode(PhpAmqpLib\Message\AMQPMessage::DELIVERY_MODE_PERSISTENT);
        return $rabbitmqBean;
    }

    public function CallRabbitMqMessageObj(){}
}