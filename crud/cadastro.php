<?php

include "conecxao.php";


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

//echo $_FILES['fileUpload'];


   	  //Definindo timezone padrão
      date_default_timezone_set("Brazil/East"); 

	  //Pegando extensão do arquivo
      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); 

      //Definindo um novo nome para o arquivo
      $novo_nome = date("Y.m.d-H.i.s") . $ext; 

      //Diretório para uploads
      $dir = 'img/'; 

      //Fazer upload do arquivo
      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$novo_nome); 

      $link_imagem = $dir.$novo_nome;

   // echo "eco ".$link_imagem;


$buscar_cadastros = "INSERT INTO 
clientes_fazenda
VALUES ('','$nome','$email','$telefone','$link_imagem')";

$query_cadastros = mysqli_query($conx, $buscar_cadastros) or die(mysqli_error($conx));

header('location: listagem.php');

?>

