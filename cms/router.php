<?php
/* arquivo de rota para receber requisições da view  e enviar para controler pois a view não pode manipular diretamente o banco; 
autora: Carolina Silva; data de criação: 31/03/2022; versão: 1.0 */

//declarando as variáveis presentes na action do form na index.html
$component = (string) null;
$action = (string) null;

//verificando o método da requisição do form
if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET') {
    //recebendo dados via url
    $component = strtoupper($_GET['component']);
    $action = strtoupper($_GET['action']);

    //identificando quem está fazendo a requisição
    switch ($component) {
        case 'CONTATOS':
            //importando controller
            require_once('./controller/controllerContatos.php');

            //se a action for de enviar contato
            if ($action == 'ENVIAR') {
                //chamaremos a função para inserir no banco
                $promessa = inserirContato($_POST);

                //se o retorno for um booleano, significa que deu certo! se for um array deu errado
                if (is_bool($promessa)) {
                    if ($promessa) {
                        echo ("<script>alert('Feedback enviado!')
                             window.location.href='../index.html';</script>");
                    }
                } else if (is_array($promessa)) {
                    echo ("<script>alert('Acho que você esqueceu de preencher algo!')
                         window.history.back();</script>");
                }
                //se a action for de deletar mensagem
            } elseif ($action == 'DELETAR') {
                $idContato = $_GET['id'];

                $promessa = deletarContato($idContato);

                if (is_bool($promessa)) {
                    if ($promessa) {
                        echo ("<script>alert('Feedback apagado!')
                             window.location.href='../cms/dashboard.php';</script>");
                    }
                } elseif (is_array($promessa)) {
                    echo ("<script>alert('Tivemos problemas para apagar.')
                         window.history.back();</script>;");
                }
            }

            break;
        
        /* se for categoria */
        case 'CATEGORIAS':
            /* import da controller que faz as devidas validações etc */
            require_once('./controller/controllerCategorias.php');

            /* verificando se a ação é de inserir */
            if ($action == 'INSERIR') {
                /* se sim, chamaremos a função de inserir */
                $promessa = inserirCategoria($_POST);

                /* enviando mensagens caso a inserção tenha ocorrido com sucesso ou se o campo não foi preenchido*/
                if (is_bool($promessa)) {
                    if ($promessa) {
                        echo ("<script>alert('Categoria inserida!')
                        window.location.href='../cms/categorias.php';</script>");
                    }
                } elseif (is_array($promessa)) {
                    echo ("<script>alert('Acho que você esqueceu de colocar a categoria!')
                             window.history.back();</script>");
                }
            }
    }
}
