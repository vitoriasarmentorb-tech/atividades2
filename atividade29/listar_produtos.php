<?php

include "banco.php";

$sql = "SELECT * FROM produtos";

$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Produtos</title>
<link rel="stylesheet" href="./style.css">
</head>

<body>

<h2>Produtos Cadastrados</h2>

<table>

<tr>
<th>Nome do Produto</th>
<th>Categoria</th>
<th>Quantidade</th>
<th>Preço</th>
<th>Ação</th>
</tr>

<?php

while($produto = $resultado->fetch_assoc()){

?>

<tr>

<td><?php echo $produto['nome']; ?></td>
<td><?php echo $produto['categoria']; ?></td>
<td><?php echo $produto['quantidade']; ?></td>
<td>R$ <?php echo $produto['preco']; ?></td>

<td>

<a href="excluir_produto.php?id=<?php echo $produto['id']; ?>">
<button>Excluir</button>
</a>

</td>

</tr>

<?php
}
?>

</table>

<br>

<a href="formulario_produto.php">
<button>Novo Produto</button>
</a>

</body>
</html>