<?php

//post recebe a variavel por função
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$sinal = $_POST['sinal'];

$resultado= $valor1.$sinal.$valor2."=";
echo $resultado;

if($sinal == "*"){
    echo "<br>". $valor1 * $valor2;
  }
if($sinal == "-"){
   echo "<br>". $valor1 - $valor2; 
}
if($sinal == "+"){
   echo "<br>". $valor1 + $valor2; 
}
//teste
//meu_site.com.br/get.php?valor1=15&valor2=33&sinal=*
