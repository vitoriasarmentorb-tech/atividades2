<?php

include "banco.php";

$id = $_GET['id'];

$sql = "SELECT * FROM funcionarios WHERE id=$id";

$resultado = $conexao->query($sql);

$funcionario = $resultado->fetch_assoc();

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Editar Funcionário</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="./style.css">

</head>

<body>

<div class="container">

<h2>Editar Funcionário</h2>

<form action="atualizar_funcionario.php" method="post">

<input type="hidden" name="id" value="<?php echo $funcionario['id']; ?>">

<label>Nome Completo</label>
<input type="text" name="nome" class="form-control" value="<?php echo $funcionario['nome']; ?>">

<br>

<label>Cargo</label>
<input type="text" name="cargo" class="form-control" value="<?php echo $funcionario['cargo']; ?>">

<br>

<label>Departamento</label>
<input type="text" name="departamento" class="form-control" value="<?php echo $funcionario['departamento']; ?>">

<br>

<label>Salário</label>
<input type="number" step="0.01" name="salario" class="form-control" value="<?php echo $funcionario['salario']; ?>">

<br>

<label>Data de Admissão</label>
<input type="date" name="admissao" class="form-control" value="<?php echo $funcionario['admissao']; ?>">

<br>

<input type="submit" value="Atualizar" class="btn btn-success">

</form>

</div>

</body>

</html>