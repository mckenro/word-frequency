<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
});

    $app->post("/result", function() use ($app) {
        $input_sentence = $_POST['input-sentence'];
        $input_word = $_POST['input-word'];
        $user_count = new RepeatCounter;
        return $app['twig']->render('index.html.twig', array('count' => $user_count->countRepeats($input_sentence, $input_word), 'final-word' => $input_word, 'final-sentence' => $input_sentence));
    });

    return $app;
 ?>
