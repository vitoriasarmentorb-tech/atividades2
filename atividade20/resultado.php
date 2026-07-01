<?php

include "conexao.php";

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

$resultado = $numero1 + $numero2;

$sql = "INSERT INTO somas (numero1, numero2, resultado)
VALUES ('$numero1','$numero2','$resultado')";

if(mysqli_query($conexao,$sql)){
    $mensagem = "Dados gravados com sucesso!";
}else{
    $mensagem = "Erro ao gravar!";
}

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

<h1>Resultado da Soma</h1>

<p><strong>Primeiro número:</strong> <?php echo $numero1; ?></p>

<p><strong>Segundo número:</strong> <?php echo $numero2; ?></p>

<p><strong>Resultado:</strong> <?php echo $resultado; ?></p>

<p><?php echo $mensagem; ?></p>

<a href="soma.php">Voltar</a>

</div>

</body>

</html>