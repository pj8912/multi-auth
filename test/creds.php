<?php
require_once '../vendor/autoload.php';
use jp\MultiAuth\Crendentials;

// creadentials object
$c = new Crendentials();

// set creds
$c->setFullName('john');
$c->setUserName("pj8912");
$c->setEmail("xyz@gmail.com");

// get creds
echo "fullname: ".$c->getFullName();
echo PHP_EOL;
echo "username: ".$c->getUserName();
echo PHP_EOL;
echo "password: ".$c->getEmail();
