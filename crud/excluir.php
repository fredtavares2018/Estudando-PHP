<?php

include "conecxao.php";

$id = $_POST['id'];

$buscar_cadastros = "DELETE FROM clientes_fazenda WHERE id = $id ";

$query_cadastros = mysqli_query($conx, $buscar_cadastros) or die(mysqli_error($conx));

header('location: listagem.php');

?>