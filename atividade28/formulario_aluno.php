<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro de Alunos</title>
<link rel="stylesheet" href="./style.css">
</head>

<body>

<h2>Cadastrar Aluno</h2>

<form action="salvar_aluno.php" method="POST">

<label>Nome</label><br>
<input type="text" name="nome" required><br><br>

<label>Idade</label><br>
<input type="number" name="idade" required><br><br>

<label>Curso</label><br>
<input type="text" name="curso" required><br><br>

<label>Cidade</label><br>
<input type="text" name="cidade" required><br><br>

<button type="submit">Cadastrar</button>

</form>

<br>

<a href="listar_alunos.php">
<button>Ver Alunos</button>
</a>

</body>
</html>