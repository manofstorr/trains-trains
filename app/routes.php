<?php


// Home page
$app->get('/', "trains\Controller\HomeController::indexAction")
    ->bind('home');


