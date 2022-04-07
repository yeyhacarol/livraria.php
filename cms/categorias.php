<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Rokkitt&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <title>Cadastro de categorias</title>
</head>

<body>
    <?php 
    require_once('dashboard.php');
    ?>

    <form name="frmCategoria" method="post" action="router.php?component=categorias&action=inserir">
        <div class="category">
            <div class="insert">
                <span class="gender">Gênero a inserir</span>
                <input type="text" name="txtGenero" class="input-gender">
                <input type="submit" name="btnSalvar" value="Salvar" class="save-gender">
            </div>
        </div>
    </form>

    <div class="categories">

        <div class="categoriesInfo">
            <label class="gender-data">Gênero</label>
            <label class="actions">Opções</label>
        </div>

        <?php
        /* import do arquivo que possui função para listar contatos */
        require_once('controller/controllerCategorias.php');

        /* chamando função para listar contatos */
        $listaCategoria = listarCategorias();

        /* verificando se a lista existe para evitar erro quando não houver categorias inseridas */
        if ($listaCategoria) {
            foreach ($listaCategoria as $generos) {

        ?>
                <div class="categoriesData">
                    <span class="gender-data"><?= $generos['genero'] ?></span>
                    <span class="actions">
                        <img src="img/delete.jpg" alt="apagar" title="apagar contato">
                    </span>
                </div>
        <?php
            }
        }

        ?>

    </div>

</body>

</html>