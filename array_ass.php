<?php
$pessoa = ["nome" => "Amanda", "idade" => 17];
echo"Meu nome é $pessoa[nome] e eu tenho $pessoa[idade] anos";

?>
<p> Olá, isso aqui é um html:</p>
<?php
    $alu =["nome" => "amanda", "idade" => 17, "nota" => 100, "ano" => 2008];
    $ano_atual =  date('Y'); //A função date() retorna a data do serv
    $ano = $ano_atual - $alu["idade"];
    $hoje=date('d/m/Y');
    $dia= date('d');
    $horas= date('H:i');

    echo"Olá $alu[nome], você tem $alu[idade] anos e sua nota é $alu[nota] , e você nasceu no ano de $alu[ano]";
    echo "<p> Você nasceu em $ano </p>";
     //Olá Amanda, você tem 17 anos e sua nota é 100, voce nasceu no ano de 2008
    Echo"Hoje é dia $hoje <br>";
    Echo"Hoje, $dia é dia nacional da CNH <br>";
    Echo"São exatamente $horas"; 
?>
    