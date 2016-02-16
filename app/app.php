<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Person.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/allergies", function() use($app) {
        $personOne = new Person;
        $allergies = $personOne->makeArray($_GET['allergy']);
        $personOne = $personOne->findScore($allergies);
        var_dump($allergies);
        var_dump($personOne);
        return $app['twig']->render('allergies.html.twig', array('integer' => $personOne));
    });


    return $app;
?>
