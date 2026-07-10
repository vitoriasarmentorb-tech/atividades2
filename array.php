<?php 

$aprovados = 0;
$candidatos = [

(object)["nome"=> "Rafael", "nota" => 50],
(object)["nome"=> "Ntanael", "nota" => 100],
(object)["nome"=> "Ana luisa", "nota" => 90],
(object)["nome"=> "Enzo", "nota" => 70]
];

foreach ($candidatos as $candidatos) {
    if ($candidatos -> nota >=70) {
    
    $aprovados++;   

    }
}
echo "o total de aprovados é: $aprovados";

?>