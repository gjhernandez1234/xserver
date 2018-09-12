<?php

use gjhernandez1234\xserver\xServer;

require "vendor/autoload.php";

$config =array(
        "HOST"=>"aleph.ecosur.mx",
        "PORT"=>"8991",
        "BASE"=>"CFS01_WEB"
	);

$xServer = new xServer($config);

$xServer->saludo();


//$xServer->getRegistroXML();


$xServer->getRegistroXML("5646");


//$xServer->getRegistroXML("5646");




