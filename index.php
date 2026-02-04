<?php
require_once 'config/Launcher.php';
$launcher = Launcher::getInstance();
$launcher->callController("homepage/homepage.controller");
$launcher->CallInterface("Loggerinterface");
$homepagectr = Homepagectr::getInstance($launcher);
$homepagectr->index();