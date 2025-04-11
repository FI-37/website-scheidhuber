<?php
require_once __DIR__ . '/config/twig.php';

echo $twig->render('pages/ueberuns.html.twig', [
    'title' => 'Über uns'
]);
?>