<?php

include("banco.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano = $_POST['ano'];
$paginas = $_POST['paginas'];

$sql = "INSERT INTO livros(titulo,autor,editora,ano,paginas)
VALUES('$titulo','$autor','$editora','$ano','$paginas')";

if ($conexao->query($sql)) {
    echo "Dados enviados com sucesso...";
} else {
    echo "Erro ao enviar os dados...";
}

?>

