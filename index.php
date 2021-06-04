<?php

//This is my controller for the dating project

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once ('vendor/autoload.php');

//Start a session
session_start();

//Instantiate Fat-free
$f3 = Base::instance();
$con = new DatingController($f3);
//var_dump($con);
//Define routes
$f3->route('GET /', function (){

    $GLOBALS['con']->home();
});

$f3->route('GET /home', function (){

    $GLOBALS['con']->home();
});

$f3->route('GET|POST /personalinfo', function(){

    $GLOBALS['con']->personalinfo();
});

$f3->route('GET|POST /profile', function(){

    $GLOBALS['con']->profile();
});

$f3->route('GET|POST /interests', function(){

    $GLOBALS['con']->interests();
});

$f3->route('GET|POST /summary', function(){

    $GLOBALS['con']->summary();
});

//Run Fat-free
$f3->run();


