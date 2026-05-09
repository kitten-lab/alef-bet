<?php
require_once 'auth_check.php';
$ENV = "ROSEWOOD8";
date_default_timezone_set("America/New_York");

// SET ROUTE LINE JUNCTION POINTS 
  SKY_JUNCTION("a"); // stylesheets & shells
  SKY_JUNCTION("b"); // base initiating station
  SKY_JUNCTION("c"); // configurations (figs & sigs)
  SKY_JUNCTION("d"); // data storage
  SKY_JUNCTION("k"); // kits and kernals
  SKY_JUNCTION("m"); // materials (rooms & decor)

//retiring images line, migrating to M | in phase out!! //
  SKY_JUNCTION("i");

$MATERIAL = [
    "TYPE" => [],
    "SOURCE" => [
        "NAME" => [],
        "ID" => [],
        "CREATED" => [],
        "LAST_MODIFIED" => []
    ],
    "REFS" => [],
    "DETAILS" => [],
    "USER" => "me",
    "ASSISTANT" => "chatGPT"
];

$DEMO = [
    'USER' => "pink",
    'ASSISTANT' => "blue"
];

?>