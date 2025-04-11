<?php
require_once __DIR__ . '/config/twig.php';

echo $twig->render('pages/kontakt.html.twig', [
    'title' => 'Kontakt'
]);
?>