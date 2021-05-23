<?php

//This is my controller for the dating project

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require autoload file
require_once ('vendor/autoload.php');

//Instantiate Fat-free
$f3 = Base :: instance();
$con = new DatingController($f3);

//Define routes
$f3->route('GET /', function (){

    $GLOBALS['con']->home();
});

$f3->route('GET /home', function (){

    $GLOBALS['con']->home();
});

$f3->route('GET|POST /personalinfo', function($f3){

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


