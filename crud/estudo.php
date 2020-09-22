<?php

include "conecxao.php";

$buscar_cadastros = "SELECT * FROM clientes_fazenda ORDER BY nome asc ";
$query_cadastros = mysqli_query($conx, $buscar_cadastros) or die(mysqli_error($conx));
$receber_dados = mysqli_fetch_array($query_cadastros);
$nome = $receber_dados['nome'];
$email = $receber_dados['email'];
$telefone = $receber_dados['telefone'];
$nome = $receber_dados['nome'];
$email = $receber_dados['email'];
$telefone = $receber_dados['telefone'];




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Hover Rows</h2>
        <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($receber_dados = mysqli_fetch_array($query_cadastros)) {
                        $nome = $receber_dados['nome'];
                        $email = $receber_dados['email'];
                        $telefone = $receber_dados['telefone'];
                ?>
                    <tr>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $telefone; ?></td>
                    </tr>

                <?php }; ?>

            </tbody>
        </table>
        <br><br>
        <h3>FORMULÁRIO</h3>
        <hr>
        <form action="cadastro.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Digite seu email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Telefone:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Digite seu telefone" name="telefone">
            </div>
            <button type="submit" class="btn btn-primary">Gravar</button>
        </form>

        <br><br><br><br>

    </div>



</body>

</html>