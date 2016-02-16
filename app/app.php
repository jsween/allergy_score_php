<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/change", function() use($app) {
        $myChange = new Person;
        $output = $myChange->giveChange($_GET['change']);
        return $app['twig']->render('change.html.twig', array('output' => $output));
    });

    $app->get("/change", function() use($app) {
        $myChange = new Person;
        $output = $myChange->giveChange($_GET['change']);
        return $app['twig']->render('change.html.twig', array('output' => $output));
    });

    return $app;
?>
