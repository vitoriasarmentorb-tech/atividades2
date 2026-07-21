<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Funcionário</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<h2>Cadastrar Funcionário</h2>

<form action="salvar_funcionario.php" method="POST">

    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Cargo:</label><br>
    <input type="text" name="cargo" required><br><br>

    <label>Departamento:</label><br>
    <input type="text" name="departamento" required><br><br>

    <label>Salário:</label><br>
    <input type="number" step="0.01" name="salario" required><br><br>

    <button type="submit">Cadastrar</button>

</form>

<br>

<a href="listar_funcionarios.php">
    <button>Ver Funcionários</button>
</a>

</body>
</html>