<?php
require_once 'config/Launcher.php';
$launcher = Launcher::getInstance();

// Get Routing
$route = $launcher->GetRoutePath($_SERVER['REQUEST_URI']);
$launcher->CallInterface("Loggerinterface");
$launcher->callController("authentication/authenticator.controller");

$loginctr = Authenticatorctr::getInstance($launcher);
$routeRegistered = false;
if(empty($route['key'])){
    $loginctr->LoginPage();
}
