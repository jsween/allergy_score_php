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

    $app->get("/anagram", function() use($app) {
        $myWord = new Anagram;
        $outputWord = $myWord->checkWord($_GET['word'], $_GET['list']);
        var_dump($outputWord);
        return $app['twig']->render('anagram.html.twig', array('outputWord' => $outputWord));

    });

    return $app;
?>
