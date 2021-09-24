<?php
function somar1($n1,$n2, &$total){
    $to = $n2+$n1;
    return $to;
}
$x = 50;
$y = 30;
echo somar1($x,$y);
