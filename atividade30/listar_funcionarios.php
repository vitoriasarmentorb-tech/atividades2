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
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Funcionários Cadastrados</h2>

<table border ="1">

<tr>
    <th>Nome</th>
    <th>Cargo</th>
    <th>Departamento</th>
    <th>Salário</th>
    <th>Ação</th>
</tr>

<?php
while($funcionario = $resultado->fetch_assoc()){
?>

<tr>
    <td><?= $funcionario['nome']; ?></td>
    <td><?= $funcionario['cargo']; ?></td>
    <td><?= $funcionario['departamento']; ?></td>
    <td>R$ <?= $funcionario['salario']; ?></td>

    <td>
        <a href="excluir_funcionarios.php?id=<?= $funcionario['id']; ?>">
            <button>Excluir</button>
        </a>
    </td>
</tr>

<?php
}
?>

</table>

<br>

<a href="formulario_funcionarios.php">
    <button>Novo Funcionário</button>
</a>

</body>
</html>

  