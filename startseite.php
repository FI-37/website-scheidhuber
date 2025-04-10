<?php
require_once __DIR__ . '/config/twig.php';

echo $twig->render('pages/startseite.html.twig', [
    'title' => 'Startseite'
]);
?>