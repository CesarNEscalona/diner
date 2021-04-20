<?php

// This is my controller for the Diner proj

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload file
require_once ('vendor/autoload.php');

// Instantiate Fat-Fre
$f3 = Base::instance();

// Define default route
$f3->route('GET /', function(){
   // Display the home page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Run Fat-Free
$f3->run();