<?php

include "banco.php";

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano = $_POST['ano_publicacao'];

$sql = "INSERT INTO livros(titulo,autor,editora,ano_publicacao)
VALUES('$titulo','$autor','$editora','$ano')";

if($conexao->query($sql)){
    header("Location: listar_livros.php");
}else{
    echo "Erro ao cadastrar.";
}

?>