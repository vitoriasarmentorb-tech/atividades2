<?php
include "banco.php";

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];

$sql = "INSERT INTO funcionarios(nome, cargo, departamento, salario)
VALUES ('$nome','$cargo','$departamento','$salario')";

if($conexao->query($sql)){
    header("Location: listar_funcionarios.php");
}else{
    echo "Erro ao cadastrar.";
}

$conexao->close();
?>