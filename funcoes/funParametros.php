<?php

function somar($n1 , $n2){
    $total = $n1+$n2;
    if ($total > 100){
        echo "Maior de 100 : <br>";
    }else{
        echo 'menor <br>';
    }
    return $total;
}

echo somar(15,20);
$ss = somar(150, 1);
echo $ss;


