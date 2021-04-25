<?php

//This is my controller for the dating project

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once ('vendor/autoload.php');

//Instantiate Fat-free
$f3 = Base::instance();

//Define routes
$f3->route('GET /', function (){

    //Display the home page
    $view = new Template();
    echo $view->render('views/home.html');
});

//Run Fat-free
$f3->run();


