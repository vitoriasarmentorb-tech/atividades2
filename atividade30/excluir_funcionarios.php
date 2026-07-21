<?php
include "banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM funcionarios WHERE id=$id";

if ($conexao->query($sql)) {
   header("location: listar_funcionarios.php");

   exit();
}else {
    echo "Erro ao excluir o funcionario...";
}
?>