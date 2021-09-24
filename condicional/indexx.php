<?php
$idade = 61;

if ($idade >= 18 && $idade <60){
    echo "<p>Maior de idade $idade anos</p>";
}elseif ($idade >=0 && $idade <12 ){
    echo "<p>Criança $idade Anos</p>";
}elseif ($idade >= 12 && $idade <= 17){
    echo "Adolecente $idade Anos";
}else{
    echo "<strong>Terceira idade $idade Anos </strong>";
}