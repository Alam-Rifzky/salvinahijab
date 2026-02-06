<?php
class Rabbitmqbean {
    private $connection;
    private $channel;
    private $amqpMessage;
    private $deliveryMode;

    public function getConnection() {
        return $this->connection;
    }

    public function setConnection($connection) {
        $this->connection = $connection;
    }

    public function getChannel() {
        return $this->channel;
    }

    public function setChannel($channel) {
        $this->channel = $channel;
    }

    public function getAmqpMessage() {
        return $this->amqpMessage;
    }

    public function setAmqpMessage($amqpMessage) {
        $this->amqpMessage = $amqpMessage;
    }

    public function getDeliveryMode() {
        return $this->deliveryMode;
    }

    public function setDeliveryMode($deliveryMode) {
        $this->deliveryMode = $deliveryMode;
    }

}