<?php 

require_once __DIR__.'/../config/bootstrap.php';

$app->match('/', function() use($app) {

    return $app['twig']->render('index.html');
    
});