<?php

use Silex\Provider\TwigServiceProvider;

require_once __DIR__ . '/../vendor/autoload.php';


$app = new Silex\Application();
$app['debug'] = true;
$app->register(new TwigServiceProvider());
$app['twig'] = $app->share(
    $app->extend(
        'twig',
        function ($twig, $app) {
            return $twig;
        }
    )
);

$app['twig.path'] = array(__DIR__.'/../templates');


$app->get(
    '/',
    function () use ($app) {
        return $app['twig']->render('olivierlequeux.twig', array());});


$app->run();

