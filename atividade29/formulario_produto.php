<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro de Produtos</title>
<link rel="stylesheet" href="./style.css">
</head>

<body>

<h2>Cadastrar Produto</h2>

<form action="salvar_produto.php" method="POST">

<label>Nome do Produto</label><br>
<input type="text" name="nome" required><br><br>

<label>Categoria</label><br>
<input type="text" name="categoria" required><br><br>

<label>Quantidade</label><br>
<input type="number" name="quantidade" required><br><br>

<label>Preço</label><br>
<input type="number" step="0.01" name="preco" required><br><br>

<button type="submit">Cadastrar</button>

</form>

<br>

<a href="listar_produtos.php">
<button>Ver Produtos</button>
</a>

</body>
</html>