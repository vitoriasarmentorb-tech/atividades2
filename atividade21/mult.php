<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Multiplicação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Multiplicação de Três Números</h1>

    <form action="resultado.php" method="POST">

        <label>Primeiro Número</label>
        <input type="number" name="numero1" step="any" required>

        <label>Segundo Número</label>
        <input type="number" name="numero2" step="any" required>

        <label>Terceiro Número</label>
        <input type="number" name="numero3" step="any" required>

        <button type="submit">Calcular</button>

    </form>

</div>

</body>
</html>