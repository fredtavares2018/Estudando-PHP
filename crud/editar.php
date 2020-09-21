<?php

include "conecxao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$buscar_cadastros = "UPDATE clientes_fazenda 
SET nome = '$nome', email = '$email', telefone = '$telefone'  
WHERE id = $id";

$query_cadastros = mysqli_query($conx, $buscar_cadastros) or die(mysqli_error($conx));

header('location: listagem.php');

?>

