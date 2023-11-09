<?php
@require 'connect.php';
@include 'delete.php';

try {
    $query = $pdo->query('SELECT * FROM météo');
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    echo '<form id="keepForm" action="" method="POST">';
    echo '<table border="1">';
    echo '<tr>';
    foreach ($data[0] as $key => $value) {
        echo '<th>' . $key . '</th>';
    }
    echo '<th><input type="checkbox"></th>';
    echo '</tr>';

    foreach ($data as $row) {
        echo '<tr>';
        foreach ($row as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '<td><input type="checkbox" name="keep[]" value="' . $row['ville'] . ' "checked></td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '<input type="submit" value="Delete unchecked rows">';
    echo '</form>';
} catch (Exception $e) {
    die('Erreur PDO: ' . $e->getMessage());
}
