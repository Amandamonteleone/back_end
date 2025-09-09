<form action="login.php" method="post">
     Login <br>
     <input type="text" name="usuario"><br>
     Senha <br>
     <input type="pasword" name="senha" ><br><br>
     <input type="submit" value="Entrar">
</form>

<?php
//exiba mensagem de erro, se existir
if (isset($_GET['msgm'])) {
    echo "<p style='color:red'>". htmlspecialchars($_GET['msg']) . "</p>";
}
?>