<?php

include("banco.php");

$id=$_GET['id'];

$sql="SELECT * FROM eventos WHERE id=$id";

$resultado=$conexao->query($sql);

$evento=$resultado->fetch_assoc();

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="./style.css">

</head>

<body>

<div class="container">

<div class="card">

<h2>Editar Evento</h2>

<form action="atualizar_evento.php" method="POST">

<input type="hidden" name="id" value="<?php echo $evento['id'];?>">

<label>Nome</label>

<input
type="text"
name="nome_evento"
class="form-control"
value="<?php echo $evento['nome_evento'];?>">

<br>

<label>Data</label>

<input
type="date"
name="data_evento"
class="form-control"
value="<?php echo $evento['data_evento'];?>">

<br>

<label>Horário</label>

<input
type="time"
name="horario"
class="form-control"
value="<?php echo $evento['horario'];?>">

<br>

<label>Local</label>

<input
type="text"
name="local_evento"
class="form-control"
value="<?php echo $evento['local_evento'];?>">

<br>

<label>Cidade</label>

<input
type="text"
name="cidade"
class="form-control"
value="<?php echo $evento['cidade'];?>">

<br>

<label>Vagas</label>

<input
type="number"
name="vagas"
class="form-control"
value="<?php echo $evento['vagas'];?>">

<br>

<button class="btn btn-primary">

Atualizar

</button>

</form>

</div>

</div>

</body>

</html>