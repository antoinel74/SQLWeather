<?php
@require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['keep']) && is_array($_POST['keep'])) {
        $citiesToKeep = implode(', ', array_fill(0, count($_POST['keep']), '?')); // Create string to save cities to keep and use them later in the SQL query

        $stmt = $pdo->prepare("DELETE FROM météo WHERE ville NOT IN ($citiesToKeep)");
        foreach ($_POST['keep'] as $i => $city) {
            $stmt->bindValue($i + 1, $city, PDO::PARAM_STR);
        }
        $stmt->execute();
    }
}
