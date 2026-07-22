<?php

include "banco.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO alunos(nome, idade, curso, cidade)
VALUES('$nome','$idade','$curso','$cidade')";

if($conexao->query($sql)){
    header("Location: listar_alunos.php");
}else{
    echo "Erro ao cadastrar.";
}

?>