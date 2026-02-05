<?php
require_once 'config/Launcher.php';
$launcher = Launcher::getInstance();
$launcher->CallInterface("Loggerinterface");
$launcher->callController("homepage/homepage.controller");
$homepagectr = Homepagectr::getInstance($launcher);
$homepagectr->index();