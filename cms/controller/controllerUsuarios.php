<?php 
/* arquivo de manipulação dos dados de usuários e validação dos mesmos; autora: Carolina Silva; data de criação: 14/04/2022; versão: 1.0 */

/* função para inserir usuários na model */
function inserirUsuario($usuario) {
    /* validando se o usuario existe */
    if (!empty($usuario)) {
        /* validando campos obrigatórios */
        if (!empty($usuario['txtNome']) && !empty($usuario['txtLogin']) && !empty($usuario['txtSenha'])) {
            /* se os campos obrigatórios estiverem preenchidos, criar novo array refatorando os nomes dos campos */
            $arrayUsuarios = array(
                "nome"  => $usuario['txtNome'], 
                "login" => $usuario['txtLogin'],
                "senha" => $usuario['txtSenha']
            );

            /* importaremos a model que contém função para inserção no banco de dados */
            require_once('model/bd/usuario.php');

            /* verificando se a inserção pôde ocorrer, se não retornaremos mensagens de erro */
            if (insertUsuario($arrayUsuarios)) {
                return true;
            } else {
                return array(
                    'idErro'  => 1,
                    'message' => 'Não foi possível inserir no banco de dados.' 
                );
            } 
        } else {
            return array(
                'idErro'  => 2,
                'message' => 'Campos obrigatórios não preenchidos.'
            );
        }
    }
}
