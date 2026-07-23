<?php

include("banco.php");

$pesquisa="";

if(isset($_GET['pesquisa'])){
    $pesquisa=$_GET['pesquisa'];

    $sql="SELECT * FROM eventos
    WHERE nome_evento
    LIKE '%$pesquisa%'";
}
else{

$sql="SELECT * FROM eventos";

}

$resultado=$conexao->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="./style.css">

<title>Eventos</title>

</head>

<body>

<div class="container">

<h2>Eventos Cadastrados</h2>

<form method="GET">

<div class="input-group mb-3">

<input
type="text"
name="pesquisa"
class="form-control"
placeholder="Pesquisar evento">

<button class="btn btn-primary">

Pesquisar

</button>

</div>

</form>

<a href="index.php" class="btn btn-success mb-3">

Novo Evento

</a>

<table class="table table-bordered table-striped">

<tr>

<th>Nome</th>

<th>Data</th>

<th>Horário</th>

<th>Local</th>

<th>Cidade</th>

<th>Vagas</th>

<th>Ações</th>

</tr>

<?php

while($evento=$resultado->fetch_assoc()){

?>

<tr>

<td><?php echo $evento['nome_evento']; ?></td>

<td><?php echo $evento['data_evento']; ?></td>

<td><?php echo $evento['horario']; ?></td>

<td><?php echo $evento['local_evento']; ?></td>

<td><?php echo $evento['cidade']; ?></td>

<td><?php echo $evento['vagas']; ?></td>

<td>

<a
href="editar_evento.php?id=<?php echo $evento['id'];?>"
class="btn btn-warning">

Editar

</a>

<a
href="excluir_evento.php?id=<?php echo $evento['id'];?>"
class="btn btn-danger">

Excluir

</a>

</td>

</tr>

<?php

}

?>

</table>

</div>

</body>

</html>