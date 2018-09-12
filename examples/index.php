<?php

use gjhernandez1234\xserver\xServer;

require "vendor/autoload.php";

$config =array(
        "HOST"=>"example.com.mx",
        "PORT"=>"3000",
        "BASE"=>"BIB"
	);

$xServer = new xServer($config);


$xServer->getRegistroXML("5646");








