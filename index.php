<?php
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload
require_once('vendor/autoload.php');

// create an instance of the Base class
$f3 = Base::instance();

// turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

// define a default route
$f3->route('GET /', function() {
    $monster = new Monster("Ben");
    $monster->attack();
    $monster->setName("Rachel");
    echo "<p>" . $monster->getName() . "</p>";

    $vampire = new Vampire("Tim");
    $vampire->attack();
    echo "<p>" . $vampire->getVictims() . "</p>";

    $banshee = new Banshee("Maria");
    $banshee->shriek();
    $banshee->setPitch("low");
    $banshee->attack();

    $view = new View();
    echo $view->render("views/home.html");
});

// run fat free
$f3->run();