<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Cadastrar Funcionário</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="./style.css">

</head>

<body>

<div class="container">

<h2>Cadastrar Funcionário</h2>

<form action="salvar_funcionario.php" method="post">

<label>Nome Completo</label>
<input type="text" name="nome" class="form-control">

<br>

<label>Cargo</label>
<input type="text" name="cargo" class="form-control">

<br>

<label>Departamento</label>
<input type="text" name="departamento" class="form-control">

<br>

<label>Salário</label>
<input type="number" step="0.01" name="salario" class="form-control">

<br>

<label>Data de Admissão</label>
<input type="date" name="admissao" class="form-control">

<br>

<input type="submit" value="Cadastrar" class="btn btn-primary">

</form>

</div>

</body>

</html>