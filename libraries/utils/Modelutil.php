<?php
class Modelutil {
    private $driver;

    public function __construct($driver) {
        $this->driver = $driver;
    }

    public function LoadAuthModel() {
        $this->driver->getLauncher()->Model('authmodel/Loginmodel');
        return new Loginmodel($this->driver);
    }
}