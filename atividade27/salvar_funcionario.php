<?php

include "banco.php";

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];
$admissao = $_POST['admissao'];

$sql = "INSERT INTO funcionarios(nome,cargo,departamento,salario,admissao)

VALUES

('$nome','$cargo','$departamento','$salario','$admissao')";

if($conexao->query($sql)==TRUE){

echo "Funcionário cadastrado com sucesso.<br><br>";

echo "<a href='listar_funcionarios.php'>Ver Funcionários</a>";

}else{

echo "Erro ao cadastrar.";

}

?>