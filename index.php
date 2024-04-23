<?php

// SDEV328/pets2/index.php
// This is my controller

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an instance of the Base class
$f3 = Base::instance();


// Define a default route
$f3->route('GET /', function() {

    // Render a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Define the summary page route
$f3->route('GET|POST /order', function($f3) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $pet = $_POST['pet'];
        $color = $_POST['color'];

        // validate data
        if (empty($_POST['pet'])){
            echo 'Please supply a pet';
        }
        else{
            $f3->set('SESSION.pet', $pet);
            $f3->set('SESSION.color', $color);
            $f3->reroute("summary");
        }
    }

    // Render a view page
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

$f3->route('GET /summary', function() {

    // Render a view page
    $view = new Template();
    echo $view->render('views/results.html');
});

// Run fat free
$f3->run();