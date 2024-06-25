<?php

require_once 'conexão.php';

$database = new Database();
$db = $database->connect();

if ($db) {
    try {
        $query = 'SELECT * FROM tbcategorias';
        $stmt = $db->prepare($query);
        $stmt->execute();

        $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($categorias) > 0) {
            echo '<table border="1">';
            echo '<tr><th>ID</th><th>Categoria</th></tr>';
            foreach ($categorias as $categorias) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($categorias['idCategoria']) . '</td>';
                echo '<td>' . htmlspecialchars($categorias['nomeCategoria']) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'Nenhum categoria foi encontrada.';
        }
    } catch (PDOException $e) {
        echo 'Query Error: ' . $e->getMessage();
    }
} else {
    echo 'Falha na conexão!';
}
