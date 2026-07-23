<?php

include "banco.php";

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano = $_POST['ano'];
$paginas = $_POST['paginas'];

$sql = "UPDATE livros
SET
titulo='$titulo',
autor='$autor',
editora='$editora',
ano='$ano',
paginas='$paginas'
WHERE id=$id";

if ($conexao->query($sql)) {

header("location: listar_livro.php");

exit();

}
else {
    echo "ain num deu 😗😗😗😗";
}

?>