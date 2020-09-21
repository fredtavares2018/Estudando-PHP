<?php

// session_start inicia a sessão
session_start();

// recebendo o valor vindo da página login.php
// verificador ternário
$verificando = isset($_POST['login']) ? $_POST['login']:"";

if(($verificando == 0) or (empty($verificando))){
    // aqui entra toda parte do mysqli SELECT
    // vai buscar no Banco de Dados o $verificando
    // agora mandamos contar as "linhas" 

    //$result = "SELECT * FROM table1 WHERE login = $verificando";
    //$verificando_result = mysqli_query($conn, $result);
    //$num_rows = mysqli_num_rows($verificando_result);

    //if($num_rows > 0){
        //$_SESSION['logar'] = "101";
    //}else{
        $_SESSION['logar'] = "0";
        header("location: logado.php");
    //}
}elseif($verificando == 1){
    $_SESSION['logar'] = "1";
    header("location: logado.php");
}else{
    $_SESSION['logar'] = $verificando;
    header("location: logado.php");
}


?>