<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>

    <style>
        .product-cadaster {
            width: 300px;
            height: 500px;

            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            border: 1px solid #000;
        }

        .titulo, .autor, .descricao, .preco {
            display: flex;
            flex-direction: column;

            width: 250px;
        }
        input {
            height: 100px;
        }
        input, textarea {
            border: 1px solid #000;
            background-color: transparent;

            resize: none;
        }

    </style>
</head>
<body>
<?php
    require_once('header.php');
    ?>

    <div class="title">
        <span>Administração de produtos</span>
    </div>

    <form name="frmProdutos" action="" method="POST" >
        <div class="product-cadaster">
            <div class="titulo">
                <label>Título</label>
                <input type="text" name="txtTitulo">
            </div>
            <div class="autor">
                <label>Autor</label>
                <input type="text" name="txtAutor">
            </div>
            <div class="descricao">
                <label>Descrição</label>
                <textarea name="txtDescricao"></textarea>
            </div>
            <div class="preco">
                <label>Preço</label>
                <input type="number" name="txtPreco">
            </div>
            <input type="submit" name="btnSalvar" value="Salvar" class="save-product">
        </div>
    </form>


</body>
</html>

