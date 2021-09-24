<?php

function somar($n1 , $n2){
    $total = $n1+$n2;
    if ($total > 100){
        echo "Maior de 100 : ";
    }else{
        echo "<h3 style='color: red'>Menor que  100 : </h3> ";
    }
    return $total;
}

echo somar(15,20);


