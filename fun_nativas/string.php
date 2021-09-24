<?php
// retira os espaços
$nome = "jose rinaldo";
echo trim($nome)." Rerira o espaço trin <br/>.";
//conta os caracteres

echo strlen($nome)." conta quantos string tem strlen"."<hr>";

echo strtolower($nome)." tudo minusculo strtolower"."<hr>";/// deixa tudo minusculo
echo strtoupper($nome)." tudo minusculo strtoupper"."<hr>";/// deixa tudo maiusculo
echo str_replace("jose","vasconcelos", $nome)." tudo minusculo str_replace"."<hr>";/// subsititur uma palavra
echo substr($nome, 0,2)." pega parte do nome <hr>";/// subsititur uma palavra
// procura letra
echo strpos($nome, 'a')."?<br>";
echo "tranfoma a primeira letra em Masuculos: (ucfirst)) ".ucfirst($nome)."<hr>";
echo "tranfoma todas as primeira letra em Masuculos: (ucwords)) ".ucwords($nome)."<hr>";
$nomes = explode(' ',$nome);
print_r($nomes)."<hr>";
// formatar numeros
$formate = 123456.12;
echo number_format($formate, 2,',','.');