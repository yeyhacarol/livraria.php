<?php 
/* arquivo de rota para receber requisições da view  e enviar para controler pois a view não pode manipular diretamente o banco; 
autora: Carolina Silva; data de criação: 31/03/2022; versão: 1.0 */

//declarando as variáveis presentes na action do form na index.html
$component = (string) null;
$action = (string) null;

//verificando o método da requisição do form
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //recebendo dados via url
    $component = strtoupper($_GET['component']);
    $action = strtoupper($_GET['action']);

    //identificando quem está fazendo a requisição
    switch ($component) {
        case 'CONTATOS':
            //importando controller
            require_once('./controller/controllerContatos.php');

            if($action == 'ENVIAR') {
                $promessa = inserirContato($_POST);

                if(is_bool($promessa)) {
                    if ($promessa) {
                        echo("<script>alert('Feedback enviado!')
                             window.location.href='../index.php';</script>");
                    }
                } else if (!is_bool($promessa)) {
                    echo("<script>alert('Acho que você esqueceu de preencher algum campo!')</script>
                         window.history.back();");
                }
            }
        break;
    }
}
