<?php

// session_start inicia a sessão
session_start();

// recebendo o valor vindo da página login.php
// verificador ternário
$verificando_login = isset($_POST['login']) ? $_POST['login'] : "";
$verificando_senha = isset($_POST['senha']) ? $_POST['senha'] : "";

if ((empty($verificando_login)) or (empty($verificando_senha))) {
    $_SESSION['logar'] = "0";
    header("location: logado.php");
}else {
    // aqui entra toda parte do mysqli SELECT
    // vai buscar no Banco de Dados o $verificando_login e $verificando_senha
    // agora mandamos contar as "linhas" $num_rows

    //$result = "SELECT * FROM table1 WHERE (login = $verificando_login) and (senha = $verificando_senha) ";
    //$verificando_result = mysqli_query($conn, $result);
    //$num_rows = mysqli_num_rows($verificando_result);

    //se retornar $num_rows = 1 é porque só existe 1 registro e está ok

    //if($num_rows == 1){
    //$recebendo_array = mysqli_fetch_array($verificando_result);
    //$_SESSION['logar'] = $recebendo_array['email'];
    //header("location: logado.php");
    //}else{
    $_SESSION['logar'] = "1";
    header("location: logado.php");
}
