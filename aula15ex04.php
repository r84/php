<?php

$notas = array();

array_push($notas,(float)$_POST["nota1"],(float)$_POST["nota2"],(float)$_POST["nota3"]);
$media = array_sum($notas) / count($notas);
echo"Nota 1: ".($notas[0])."<br>";
echo"Nota 2: ".($notas[1])."<br>";
echo"Nota 3: ".($notas[2])."<br>";
echo"Média: ".(number_format($media,1))."<br>";

if($media > 6){
    echo"resultado: aprovado!";
}
else{
    echo"resultado: reprovado!";
}

?>