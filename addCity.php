<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $city = $_POST['city'];
    $haut = $_POST['haut'];
    $bas = $_POST['bas'];

    $stmt = $pdo->prepare("INSERT INTO météo (ville, haut, bas) VALUES (?, ?, ?)");
    $stmt->execute([$city, $haut, $bas]);

    header("Location: index.php");
    exit;
}
