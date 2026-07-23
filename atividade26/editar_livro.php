<?php
include "banco.php";

$id = $_GET['id'];

$sql = "SELECT * FROM livros WHERE id = $id";

$resultado = $conexao->query($sql);

$livro = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<form action="./atualizar_livro.php" method="POST">

    <h1>Atualizar Livro</h1>

    <div class="mb-3">
        <input type="hidden" class="form-control" name="id" value="<?php echo $livro['id']; ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Título do Livro</label>
        <input type="text" class="form-control" name="titulo" value="<?php echo $livro['titulo']; ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Autor</label>
        <input type="text" class="form-control" name="autor" value="<?php echo $livro['autor']; ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Editora</label>
        <input type="text" class="form-control" name="editora" value="<?php echo $livro['editora']; ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Ano de Publicação</label>
        <input type="number" class="form-control" name="ano" value="<?php echo $livro['ano']; ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Quantidade de Páginas</label>
        <input type="number" class="form-control" name="paginas" value="<?php echo $livro['paginas']; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>

</form>

</body>

</html>