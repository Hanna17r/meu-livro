<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Livros por Título</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Buscar Livros por Título</h1>
        <form action="buscar_titulo.php" method="GET" class="form-inline text-center">
            <label for="titulo" class="form-label">Digite o título do livro:</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
            <button type="submit" class="btn btn-primary m-2">Buscar</button>
        </form>
    </div>
</body>

</html>