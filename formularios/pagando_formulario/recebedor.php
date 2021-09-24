<?php

$nome = filter_input(INPUT_GET,"n1");
if ($nome) {
    echo "Nome: $nome";
}else{
    echo "Dados vazio ";
}