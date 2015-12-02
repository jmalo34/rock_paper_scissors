<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RockPaperScissors.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function () use ($app)
    {
        return $app['twig']->render('rps.html.twig');
    });

    $app->get('winner', function() use ($app)
    {
        $my_Hand = new RockPaperScissors;
        $hands = $my_Hand->playGame($_GET['p1'], $_GET['p2']);
        return $app['twig']->render('winner.html.twig', array('hands' => $hands));
    });

    return $app;
 ?>
