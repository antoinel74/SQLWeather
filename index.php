<?php
echo '<h1>Test</h1>';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=weatherapp', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
