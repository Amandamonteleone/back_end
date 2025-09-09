<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista_pessoas.php" method="post">
        <label style="color: blueviolet;">Digite o nome da pessoa a ser atendida:</label>
        <input type="text" name="cliente">
        <input type="submit" value="Atender">
    </form>
    <h3>Lista de atendimento</h3>
    <?php
     $nome_atendimento= $_POST['Cliente'] ??'';
     $arquivo = fopen("atendimento.txt", "a");
     fwrite($arquivo, $nome_atendimento\n);
     fclose($arquivo);
     //listar os nomes cadastrados no arquivo.txt
    ?>
</body>
</html>