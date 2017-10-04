<?php


// Home page
$app->get('/', "Trains\Controller\HomeController::indexAction")
    ->bind('home');


