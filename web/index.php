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
    '/cv',
    function () use ($app) {
        return $app['twig']->render('cv.twig', array());});


$app->get(
    '/broadcast',
    function () use ($app) {
        return $app['twig']->render('broadcast.twig', array('images' => array(
                    array('caption' =>"Formulaire denvoi", "path" => "img/broadcast.png", 'status'=>'active'),
                    array('caption' =>"Browser", "path" => "img/broadcast2.png", 'status'=>''))
                ));
    }
);

$app->run();

