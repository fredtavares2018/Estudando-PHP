<?php

include "conecxao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$buscar_cadastros = "INSERT INTO 
clientes_fazenda
VALUES ('','$nome','$email','$telefone')";

$query_cadastros = mysqli_query($conx, $buscar_cadastros) or die(mysqli_error($conx));

header('location: listagem.php');

?>