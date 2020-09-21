<?php 
// session_start inicia a sessão
session_start();
?>

<form action="teste_login.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="login" placeholder="Digite sua senha">
    <br><br>
    <input type="submit" value="LOGAR">
</form>