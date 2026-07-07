<?php
 include "banco.php";
//incluindo a conexao 


//sql para selecionar todos os registros 
 $sql = "SELECT *  FROM form";
 
 //criamos a variavel $resultado para guardar a consulta 
 $resultado = $conexao->query($sql); 

 //laço de repetição whilw (enquanto) 
 //fecht_assoc busca o registro no banco 
 while ($cliente = $resultado->fetch_assoc()) {
     

//mostro o campo nome da tabela form 
 echo "nome: ".$cliente ['nome']. "<br>";
 echo "Cidade: ".$cliente ['cidade']. "<br>";
 echo "idade: ".$cliente ['idade']. "<br>";
 echo "email: ".$cliente ['email']. "<br>";
 echo "Telefone: ".$cliente ['telefone']. "<br>";

 }



 ?>