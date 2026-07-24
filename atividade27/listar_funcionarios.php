<?php

include "banco.php";

$sql = "SELECT * FROM funcionarios";

$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Funcionários</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="./style.css">

</head>

<body>

<div class="container">

<h2>Lista de Funcionários</h2>

<table class="table table-bordered table-striped">

<tr>

<th>Nome</th>
<th>Cargo</th>
<th>Departamento</th>
<th>Salário</th>
<th>Admissão</th>
<th>Ação</th>

</tr>

<?php

while($funcionario = $resultado->fetch_assoc()){

echo "<tr>";

echo "<td>".$funcionario['nome']."</td>";
echo "<td>".$funcionario['cargo']."</td>";
echo "<td>".$funcionario['departamento']."</td>";
echo "<td>R$ ".$funcionario['salario']."</td>";
echo "<td>".$funcionario['admissao']."</td>";

echo "<td>

<a href='editar_funcionario.php?id=".$funcionario['id']."' class='btn btn-warning'>

Editar

</a>

</td>";

echo "</tr>";

}

?>

</table>

</div>

</body>

</html>