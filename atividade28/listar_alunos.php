<?php

include "banco.php";

$sql = "SELECT * FROM alunos";

$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Alunos</title>
<link rel="stylesheet" href="./style.css">
</head>

<body>

<h2>Alunos Cadastrados</h2>

<table>

<tr>
<th>Nome</th>
<th>Idade</th>
<th>Curso</th>
<th>Cidade</th>
<th>Ação</th>
</tr>

<?php

while($aluno = $resultado->fetch_assoc()){

?>

<tr>

<td><?php echo $aluno['nome']; ?></td>
<td><?php echo $aluno['idade']; ?></td>
<td><?php echo $aluno['curso']; ?></td>
<td><?php echo $aluno['cidade']; ?></td>

<td>

<a href="excluir_aluno.php?id=<?php echo $aluno['id']; ?>">
<button>Excluir</button>
</a>

</td>

</tr>

<?php
}
?>

</table>

<br>

<a href="formulario_aluno.php">
<button>Novo Aluno</button>
</a>

</body>
</html>