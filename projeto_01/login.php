<?php
    require_once("funcoes.php");//inclui arquivo com a funcao
    $usuario= $_POST["usuario"] ?? '';
    $senha= $_POST["senha"] ?? '';
    conecta($usuario, $senha);//chama funcao
?>