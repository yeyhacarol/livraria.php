<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Rokkitt&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/usuarios.css">
    <title>Usuários</title>
</head>

<body>
    <?php
    require_once('header.php');
    ?>

    <div class="title">
        <span>Administração de usuários</span>
    </div>

    <form name="frmUsuario" method="post" action="router.php?component=usuarios&action=inserir">
        <div class="user-cadaster">
            <div class="insert">
                <span class="user-insert">Usuário a inserir</span>
                <div class="name-area">
                    <label>Nome</label>
                    <input type="text" name="txtNome" class="input-name">
                </div>
                <div class="login-area">
                    <label>Login</label>
                    <input type="text" name="txtLogin" class="input-login">
                </div>
                <div class="passwd-area">
                    <label>Senha</label>
                    <input type="password" name="txtSenha" class="input-password">
                </div>
                <input type="submit" name="btnSalvar" value="Salvar" class="save-user">
            </div>
        </div>
    </form>

    <div class="users">
        <div class="users-content">
            <div class="usersInfo">
                <label class="user-data">Nome</label>
                <label class="user-data">Login</label>
                <label class="actions">Opções</label>
            </div>
            <div class="usersData">
                <span class="user-data"></span>
                <span class="user-data"></span>
                <span class="actions">
                    <a onclick="return confirm('Quer mesmo apagar usuário?')" href="">
                        <img src="img/delete.jpg" alt="apagar" title="apagar usuário">
                    </a>
                    <a href="#">
                        <img src="img/edit.png" alt="editar usuario" title="editar usuário" class="edit">
                    </a>
                </span>
            </div>

        </div>

    </div>
</body>

</html>