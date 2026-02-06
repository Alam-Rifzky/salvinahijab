<?php
require_once 'config/Launcher.php';
$launcher = Launcher::getInstance();

// Get Routing
$route = $launcher->GetRoutePath($_SERVER['REQUEST_URI']);
$launcher->CallInterface("Loggerinterface");
$launcher->callController("proxies/Messagebroker.controller");

$messagebrokerctr = MessagebrokerController::getInstance($launcher);

$messagebrokerctr->TestRabbitMQ();

// $routeRegistered = false;
// if(empty($route['key'])){
//     header("Location: ".$launcher->baseUrl);
// }elseif($launcher->RouteMapping($route['key'], "single-series")){
//     echo "Single Series Page Coming Soon!";
// }



// // case not found
// if(!$launcher->getRouteFound()){
//     header("Location: ".$launcher->baseUrl);
// }