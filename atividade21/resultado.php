<?php

include("conexao.php");

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];

$resultado = $numero1 * $numero2 * $numero3;

$sql = "INSERT INTO multiplicacao
(numero1, numero2, numero3, resultado)
VALUES
('$numero1','$numero2','$numero3','$resultado')";

mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Resultado da Multiplicação</h1>

<p><strong>Primeiro Número:</strong> <?php echo $numero1; ?></p>

<p><strong>Segundo Número:</strong> <?php echo $numero2; ?></p>

<p><strong>Terceiro Número:</strong> <?php echo $numero3; ?></p>

<h2>Resultado: <?php echo $resultado; ?></h2>

<h3>Histórico das Multiplicações</h3>

<table>

<tr>
<th>ID</th>
<th>Número 1</th>
<th>Número 2</th>
<th>Número 3</th>
<th>Resultado</th>
<th>Data</th>
</tr>

<?php

$consulta = "SELECT * FROM multiplicacao ORDER BY id DESC";

$res = mysqli_query($conexao, $consulta);

while($dados = mysqli_fetch_assoc($res)){

echo "<tr>";

echo "<td>".$dados['id']."</td>";

echo "<td>".$dados['numero1']."</td>";

echo "<td>".$dados['numero2']."</td>";

echo "<td>".$dados['numero3']."</td>";

echo "<td>".$dados['resultado']."</td>";

echo "<td>".$dados['data_calculo']."</td>";

echo "</tr>";

}

?>

</table>

<br>

<a href="mult.php">
<button>Nova Multiplicação</button>
</a>

</div>

</body>
</html>