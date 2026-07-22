<?php

include "banco.php";

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$sql = "INSERT INTO produtos(nome,categoria,quantidade,preco)
VALUES('$nome','$categoria','$quantidade','$preco')";

if($conexao->query($sql)){
    header("Location: listar_produtos.php");
}else{
    echo "Erro ao cadastrar.";
}

?>
