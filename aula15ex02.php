<?php
$n1 = (int)$_POST["numero1"];
$n2 = (int)$_POST["numero2"];

if($n1 > $n2){
    echo "ordem: $n2, $n1";
}
else{
    echo "ordem: $n1, $n2";
}

?>