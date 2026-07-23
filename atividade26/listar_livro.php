<?php
include "banco.php";
//incluindo a conexao 


//sql para selecionar todos os registros 
$sql = "SELECT *  FROM livro";

//criamos a variavel $resultado para guardar a consulta 
$resultado = $conexao->query($sql);

//laço de repetição whilw (enquanto) 
//fecht_assoc busca o registro no banco 
while ($livro = $resultado->fetch_assoc()) {


    //mostro o campo nome da tabela form 
    echo "<hr>";
    echo "Título: ". $livro ['titulo']. "<br>";
    echo "Autor: ". $livro ['autor']. "<br>";
    echo "Editora: ". $livro ['editora'] . "<br>";
    echo "Ano : ". $livro ['ano'] . "<br>";
    echo "Páginas: ". $livro ['paginas'] . "<br>";


    echo "<a href='editar_livro.php?id=" . $livro['id'] . "'>Editar</a>";
}