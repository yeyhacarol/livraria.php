<?php 
/* arquivo responsável pela manipulação dos dados de contato. ponte entre view e model; autora: Carolina Silva; data de criação: 31/04/2022; versão: 1.0*/

/* lembrando que essas funções recebem os dados da view (front-end) e encaminham para a model (banco de dados) */

//função para inserir os contatos da view na model 
function inserirContato($dadosContato) {
    //verificando se os dados de contato está vazio
    if(!empty($dadosContato)) {
        //verificando se as caixas de texto para nome e mensagem não estão vazias, pois são os campos obrigatórios de acordo com o banco
        if(!empty($dadosContato['txtNome']) && !empty($dadosContato['txtObs'])) {
            $arrayDados = array (
                "email" => $dadosContato['txtEmail'],
                "nome"  => $dadosContato['txtNome'],
                "mensagem"   => $dadosContato['txtObs']
            );
        }

        require_once('model/bd/contato.php');
        if(insertContato($arrayDados)) {
            return true;
        } else {
            return array('idErro'  => 1,
                         'message' => 'Não foi possível inserir no banco de dados!');
        }
    } else {
        return array('idErro'  => 2,
                     'message' => 'Há campos obrigatórios não preenchidos!');
    }
}

//função para listar contatos na tela de cms
function listarContatos() {
    //importando arquivo model que possui os dados do banco
    require_once('model/bd/contato.php');

    $dados = selectAllContatos();
    if(!empty($dados)) {
        return $dados;
    } else {
        return false;
    }
}

?>