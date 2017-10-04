<?php

namespace Trains\Controller;

use Silex\Application;

class HomeController
{

    public function indexAction(Application $app)
    {
        return $app['twig']->render('Home/Home.html.twig');
    }

}
