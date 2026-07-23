<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <form action="./salvar_livro.php" method="POST">

        <h1>Cadastro de Livros</h1>

        <div class="mb-3">
            <label for="titulo" class="form-label">Título do Livro</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor">
        </div>

        <div class="mb-3">
            <label for="editora" class="form-label">Editora</label>
            <input type="text" class="form-control" id="editora" name="editora">
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">Ano de Publicação</label>
            <input type="number" class="form-control" id="ano" name="ano">
        </div>

        <div class="mb-3">
            <label for="paginas" class="form-label">Quantidade de Páginas</label>
            <input type="number" class="form-control" id="paginas" name="paginas">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

</body>

</html>