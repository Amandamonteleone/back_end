<?php
    function saudacao($nome) {
        return "Olá, $nome!";
    }
    
    //esta e uma função
    function nomeDaFuncao($parametro1,$parametro2) {
    $resultado= $parametro1 + $parametro2;
    return $resultado; // retorna um valor
    }
    
    $frase = saudacao("amanda");
    $soma = nomeDaFuncao(5, 10);
    echo "$frase, o resultado é: $soma";
    
?>
   
