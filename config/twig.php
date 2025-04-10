<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Initialisierung des Twig-Loaders
$loader = new FilesystemLoader(__DIR__ . '/../templates');

// Konfiguration der Twig-Umgebung
$twig = new Environment($loader, [
    'cache' => __DIR__ . '/../cache', // Optional: Cache-Verzeichnis
    'debug' => true, // Debug-Modus aktivieren
]);

return $twig;
?>

