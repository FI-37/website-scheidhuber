<?php
require_once __DIR__ . '/config/twig.php';

echo $twig->render('pages/todo.html.twig', [
    'title' => 'Todo Liste'
]);
?>