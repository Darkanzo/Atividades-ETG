<?php

require_once 'conexão.php';

$database = new Database();
$db = $database->connect();

if ($db) {
    try {
        $query = 'SELECT * FROM tbfilmes';
        $stmt = $db->prepare($query);
        $stmt->execute();

        $filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($filmes) > 0) {
            echo '<table border="1">';
            echo '<tr><th>ID</th><th>Título</th><th>Duração</th><th>Locação</th><th>IDCategoria</th></tr>';
            foreach ($filmes as $filme) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($filme['idFilme']) . '</td>';
                echo '<td>' . htmlspecialchars($filme['tituloFilme']) . '</td>';
                echo '<td>' . htmlspecialchars($filme['duracaoFilme']) . '</td>';
                echo '<td>' . htmlspecialchars($filme['valorLocacao']) . '</td>';
                echo '<td>' . htmlspecialchars($filme['idCategoria']) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'Nenhum filme encontrado.';
        }
    } catch (PDOException $e) {
        echo 'Query Error: ' . $e->getMessage();
    }
} else {
    echo 'Falha na conexão!';
}
