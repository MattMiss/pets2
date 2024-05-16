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

            $petType = $_POST['pet-type'];

            $chosenPet = new Pet($pet, $color);
            $f3->set('SESSION.pet', $chosenPet);

            if ($petType == 'robotic'){
                $f3->reroute("robotic-order");
            }else if ($petType == 'stuffed'){
                $f3->reroute("stuffed-order");
            }

        }
    }

    // Render a view page
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

// Define the stuffed pet route
$f3->route('GET|POST /stuffed-order', function($f3) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $stuffedSize = $_POST['size'];
        $stuffedMaterial = $_POST['material'];
        $stuffingType = $_POST['stuffing'];

        if (empty($stuffedMaterial)) {
            echo "Please fill everything out";
        } else {
            $f3 -> set('SESSION.stuffedSize', $stuffedSize);
            $f3 -> set('SESSION.stuffedMaterial', $stuffedMaterial);
            $f3 -> set('SESSION.stuffedType', $stuffingType);
            $f3 -> reroute('summary');
        }

    }

    // Render a view page
    $view = new Template();
    echo $view->render('views/stuffed-order.html');
});

// Define the robotic pet route
$f3->route('GET|POST /robotic-order', function($f3) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $accessories = $_POST['accessories'];

        if (empty($accessories)) {
            echo "Please select accessories";
        } else {
            $f3 -> set('SESSION.accessories', $accessories);
            $f3 -> reroute("summary");
        }
    }

    // Render a view page
    $view = new Template();
    echo $view->render('views/robotic-order.html');
});


$f3->route('GET /summary', function() {

    // Render a view page
    $view = new Template();
    echo $view->render('views/results.html');
});

// Run fat free
$f3->run();