<?php

$nome = $_POST["nome"];
$idade = (int)$_POST["idade"];

if($idade < 18){
    echo"$nome tem $idade anos portanto é menor de idade";
}
else{
    echo"$nome tem $idade anos portanto é maior de idade";
}
?>