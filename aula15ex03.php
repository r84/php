<?php

$n1 = (int)$_POST["numero1"];
$n2 = (int)$_POST["numero2"];

if($n1 > $n2){
    echo"$n1 é maior que $n2";
}
else if($n1 < $n2){
    echo"$n1 é menor que $n2";
}
else{
    echo"os números são iguais";
}

?>