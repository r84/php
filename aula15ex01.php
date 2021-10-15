<?php
$n1 = (int)$_POST["numero"];

if($n1 % 2 == 0){
    echo'o número ',$n1,' é par';
}
else{
    echo'o número ',$n1,' é ímpar';
}

?>