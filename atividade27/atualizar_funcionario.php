<?php

include "banco.php";

$id = $_POST['id'];

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];
$admissao = $_POST['admissao'];

$sql = "UPDATE funcionarios SET

nome='$nome',
cargo='$cargo',
departamento='$departamento',
salario='$salario',
admissao='$admissao'

WHERE id=$id";

if($conexao->query($sql)==TRUE){

header("Location: listar_funcionarios.php");
exit();

}else{

echo "Erro ao atualizar.";

}

?>