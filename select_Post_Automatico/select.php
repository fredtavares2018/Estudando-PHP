<p>Vamos submeter um formulário com select sem o botão submit</p>
<p> e deixar a dica de como fazer com Banco de Dados</p>
<br><br>

<?php
    // recebemos o valor do select
    $recebeu = isset($_POST['nome']) ? $_POST['nome']:"";
    if(empty($recebeu)){
        echo "Nada foi selecionado! ";
    }else{
        echo "Você selecionou ".$recebeu;
    }

?>

<br><br>
A mágica acontece com o código "onchange="this.form.submit()""
<br><br>

<form action="select.php" method="post">
    <select name="nome" onchange="this.form.submit()">
        <option value="">Selecione um item abaixo</option>
        <option value="1">Teste 01</option>
        <option value="2">Teste 02</option>
        <option value="3">Teste 03</option>
        <option value="4">Teste 04</option>
    </select>
</form>


<!-- Para preencher o select com Banco de Dados podemos fazer:  -->

<form action="select.php" method="post">
    <select name="nome" onchange="this.form.submit()">
        <option value="">Selecione um item abaixo</option>
        <?php
        while ($receber_categorias = mysqli_fetch_array($query_categoria)) {
            $id = $receber_categorias['id'];
            $tipo = $receber_categorias['tipo'];
        ?>
        <option value="<?php echo $id; ?>"><?php echo $tipo; ?></option>
        <?php }; ?>
    </select>
</form>

