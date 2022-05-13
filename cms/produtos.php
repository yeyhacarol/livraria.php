<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/produtos.css">
    <title>Administração de produtos</title>
</head>

<body>
    <?php
    require_once('header.php')
    ?>

    <div class="header-title">
        <span>Administração de produtos</span>
    </div>

    <form name="frmProduto" method="post" action="router.php?component=produtos&action=inserir">
        <div class="product-insert">
            <div class="product">
                <div class="image-container">
                    <input type="file" id="image-input" accept="image/*">
                    <label for="image-input" id="image-label"></label>
                    <img src="img/add-image.png" alt="foto do livro" id="cadaster-image">
                </div>
                <div class="highlight">
                    <input type="checkbox" id="highlight">
                    <label for="highlight">Destacar</label>
                </div>
                <select>
                    <option value="">Selecione uma categoria</option>
                </select>
                <div class="prices">
                    <div class="price">
                        <span>Preço (R$)</span>
                        <input type="number" step="0.1" placeholder="10%">
                    </div>
                    <div class="promotion">
                        <span title="Opcional">Desconto (%)*</span>
                        <input type="number" step="0.1" placeholder="10%">
                    </div>
                </div>
            </div>
            <div class="description">
                <div class="title">
                    <span>Título</span>
                    <input type="text">
                </div>
                <div class="author">
                    <span>Autor</span>
                    <input type="text">
                </div>
                <div class="describe-book">
                    <span>Descrição</span>
                    <textarea></textarea>
                </div>
                <div class="send">
                    <input type="submit" name="btnSalvar" value="Salvar" class="save-product">
                </div>
            </div>
        </div>
    </form>

    <div class="products">
        <div class="products-content">
            <label class="product-data">Preview</label>
            <label class="product-data">Título</label>
            <label class="product-data">Autor</label>
            <label class="product-data">Categoria</label>
            <label class="product-data">Preço</label>
            <label class="product-data">Destacado</label>
            <label class="product-data">Opções</label>
        </div>

        <?php
        require_once('controller/controllerProdutos.php');

        $listaProdutos = listarProdutos();

        if ($listaProdutos) {
            foreach ($listaProdutos as $produtos) {
        ?>
                <div class="products-data">
                    <span class="product-data"></span>
                    <span class="product-data"><?= $produtos['titulo']?></span>
                    <span class="product-data"><?= $produtos['autor']?></span>
                    <span class="product-data"></span>
                    <span class="product-data">R$ <?= $produtos['preco']?></span>
                    <span class="product-data"></span>
                    <span class="product-data">
                        <a href="">
                            <img src="img/delete.jpg" alt="apagar" title="apagar produto">
                        </a>
                        <a href="">
                            <img src="img/edit.png" alt="editar" title="editar produto" class="edit">
                        </a>
                    </span>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>

</html>