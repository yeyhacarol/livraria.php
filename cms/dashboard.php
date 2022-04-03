<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Rokkitt&display=swap" rel="stylesheet">
    <link rel="stylesheet" text="text/css" href="css/dashboard.css">
    <title>Administrativo</title>
</head>

<body>
    <header>
        <h2>CMS</h2>
        <h1>BOOKERY LIBRARY</h1>
        <span>gerenciamento de conteúdo do site</span>
    </header>

    <!-- <div class="line"></div> -->

    <div class="nav">
        <div class="navigation">
            <a href="#"><img src="img/book.png" alt="adm.produtos" title="adm. produtos"></a>
            <a href="#"><img src="img/category-icon.png" alt="adm.categorias" title="adm. categorias"></a>
            <a href="#"><img src="img/chatting.png" alt="contatos" title="contatos"></a>
            <a href="#"><img src="img/user.png" alt="usuários" title="usuários" class="last"></a>
        </div>
        <div class="user">
            <span>Bem vindo(a), Carolina</span>
            <a href="#"><img src="img/log-out.png" alt="sair" title="sair"></a>
        </div>
    </div>

    <div class="title">
        <span>Título da sessão</span>
    </div>

    <div class="contacts">
        <!-- <div class="usersMessage"> -->
            <div class="contactInfo">
                <label class="name">Nome</label>
                <label class="email">E-mail</label>
                <label class="options">Opções</label>
            </div>

            <?php
            /* import do arquivo que possui função para listar contatos */
            require_once('controller/controllerContatos.php');

            $listaContato = listarContatos();

            foreach ($listaContato as $dados) {

            ?>
                <div class="contactData">
                    <span class="name"><?= $dados['nome']?></span>
                    <span class="email"><?= $dados['email']?></span>
                    <span class="options"></span>
                </div>
            <?php

            }

            ?>
        <!-- </div> -->
    </div>

</body>

</html>