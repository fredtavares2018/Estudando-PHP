<?php

// session_start inicia a sessão
session_start();

echo $_SESSION['logar'];

$rec_logar = isset($_SESSION['logar']) ? $_SESSION['logar']:"";

if(($rec_logar == 0) or (empty($rec_logar))){
    echo "Você não está logado!";
}
elseif($rec_logar == 1){
    echo "Login ou senha Incorretos!";
}else{
    $logou = $rec_logar ;
    echo "Você está logado = ".$logou;
}

?>