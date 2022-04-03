<?php 
/* arquivo para manipulção de dados no bd; autora: Carolina Silva; criação: 02/04/22 */

//importando arquivo de conexão
require_once('conexaoMySql.php');

//funcão que insere contato no banco
function insertContato($dadosContato) {
    $statusResposta = (bool) false;

    //abrindo conexão com o banco
    $conexao = abrirConexaoMySql();

    //variável para armazenar script do bd
    $scriptSql = "insert into tblContatos
                    (email,
                     nome,
                     mensagem)
                     
                     values
                     ('".$dadosContato['email']."',
                      '".$dadosContato['nome']."',
                      '".$dadosContato['mensagem']."')";
    
    //verificando se o script está correto e encaminhando-o pro bd
    if(mysqli_query($conexao, $scriptSql)) {
        //se o script estiver correto, verificamos se houveram linhas afetadas no banco
        if(mysqli_affected_rows($conexao)) {
            $statusResposta = true;
        } 
    }

    return $statusResposta;

}

function selectAllContatos() {
    //abrindo conexãocom o bd
    $conexao = abrirConexaoMySql();

    //script que seleciona tudo da tabela
    $scriptSql = "select * from tblContatos";

    //variável para armazenar o retorno dos dados
    $resultado = mysqli_query($conexao, $scriptSql);

    if($resultado) {
        /*percorrendo os dados do banco que nos foram retornados através da variável resultado, e
         convertendo-os para um array que possua mais semântica*/

         $cont = 0;
         while ($resultadoDados = mysqli_fetch_assoc($resultado)) {
             $arrayDados[$cont] = array(
                 'nome'     => $resultadoDados['nome'],
                 'email'    => $resultadoDados['email'],
                 'mensagem' => $resultadoDados['mensagem']
             );

             $cont++;
         }

        return $arrayDados;
    }
}


?>