<?php

include "banco.php";

$sql = "SELECT * FROM livros";

$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Livros</title>
<link rel="stylesheet" href="./style.css">
</head>

<body>

<h2>Livros Cadastrados</h2>

<table>

<tr>
<th>Título</th>
<th>Autor</th>
<th>Editora</th>
<th>Ano de Publicação</th>
<th>Ação</th>
</tr>

<?php

while($livro = $resultado->fetch_assoc()){

?>

<tr>

<td><?php echo $livro['titulo']; ?></td>
<td><?php echo $livro['autor']; ?></td>
<td><?php echo $livro['editora']; ?></td>
<td><?php echo $livro['ano_publicacao']; ?></td>

<td>

<a href="excluir_livro.php?id=<?php echo $livro['id']; ?>">
<button>Excluir</button>
</a>

</td>

</tr>

<?php
}
?>

</table>

<br>

<a href="formulario_livro.php">
<button>Novo Livro</button>
</a>

</body>
</html>