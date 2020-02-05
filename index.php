<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require "vendor/autoload.php";

// Session start should come after autoload
session_start();

$f3 = Base::instance();
$f3->set('DEBUG', 3);

$f3->route('GET /',function ($f3)
{
    $pet1 = new Pet("Spot", "Blue");
    $pet2 = new Pet();

    $pet2->setName("Fido");
    $pet2->setColor("green");

    $dog1 = new Dog("bob", "red");

    $f3->set('pet1', $pet1);
    $f3->set('pet2', $pet2);
    $f3->set('dog1', $dog1);

    $view = new Template();
    echo $view-> render('views/my-pets.html');
});

$f3->run();