<?php
//funcoes.php
function saudacao($nome){
    return "Bem Vindo, $nome! Sua participação foi confirmada!";
}
function banco_dados($db){
    return "Seu banco, $db, foi canectado com sucesso!";

} 
function fiap($aluno1, $aluno2, $aluno3, $observacao) {
    echo "<h3> Lista de alunos com observações: </h3>";
    echo "<ul>";
    echo "<li> $aluno1 </li>";
    echo "<li> $aluno2 </li>";
    echo "<li> $aluno3 </li>";
    echo "<ul>";

}

 //nota.html e caucula_nota.php
    function nota($nota, $nome){
        if ($nota >= 7){
            echo " O aluno <strong>$nome</strong> tirou <strong>$nota</strong> e foi aprovado!";
        }elseif ($nota >=5 && $nota <7){
            echo " O aluno <strong>$nome</strong> tirou <strong>$nota</strong> e ficou de recuperação";
        }else{
            echo " O aluno <strong>$nome</strong> tirou <strong>$nota</strong> e foi reprovado";
        }
    }