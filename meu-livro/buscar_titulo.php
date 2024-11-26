<?php
if (isset($_GET['titulo'])) {
    $titulo = urlencode($_GET['titulo']);
    $url = "https://openlibrary.org/search.json?title=" . $titulo;

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    echo "<div class='container mt-5'>";
    echo "<h2>Resultados para o título: " . htmlspecialchars($_GET['titulo']) . "</h2>";

    if (isset($data['docs']) && count($data['docs']) > 0) {
        echo "<ul>";
        foreach ($data['docs'] as $book) {
            echo "<li><strong>" . $book['title'] . "</strong><br>";
            echo "Autor: " . implode(', ', $book['author_name'] ?? []) . "<br>";
            echo "Publicado em: " . ($book['first_publish_year'] ?? 'Desconhecido') . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum livro encontrado para o título pesquisado.</p>";
    }
    echo "<a href='titulo.php' class='btn btn-primary m-2'>Voltar ao formulário</a>";
    echo "</div>";
}
?>