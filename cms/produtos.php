<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
<?php
    require_once('header.php');
    ?>

    <div class="title">
        <span>Administração de produtos</span>
    </div>

    <form name="frmCategoria" method="post" action="<?= $form ?>">
        <div class="product">
            <div class="insert">
                <span class="gender">Produto a inserir</span>
                <input type="text" name="txtTitulo" value="" class="input-title">
                <input type="text" name="txtAutor" value="" class="input-autor">
                <textarea name="txtDescricao"></textarea>
                <input type="number" name="txtPreco" value="" class="input-price">
                <input type="text" name="txtTitulo" value="" class="input-title">
                <input type="submit" name="btnSalvar" value="Salvar" class="save-gender">
            </div>
        </div>
    </form>

    <?php

        require_once('controller/controllerProdutos.php');

        $produtos = listarProdutos();

        foreach($produtos as $item) {

    ?>
    
    <div class="dados">
        <span class="titulo"><?= $item['titulo']?></span>
        <span class="titulo"><?= $item['autor']?></span>
        <span class="titulo"><?= $item['descricao']?></span>
        <span class="titulo"><?= $item['preco']?></span>
        <span class="titulo"><?= $item['desconto']?></span>
    </div>


    <?php
        }

    ?>


</body>
</html>

