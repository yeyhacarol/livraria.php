<?php
/* arquivo que manipula dados no banco; autora: Carolina Silva: data de criação; 07/04/2022; versão: 1.0 */

/* importanto arquivo para possibilitar a abertura da conexão com o banco de dados */
require_once('conexaoMySql.php');

/* função para inserir categoria no banco de dados */
function insertCategoria($categoria) {
    /* variável para evitar criar else's que retornarão false para conseguirmos fechar a conexão com sucesso */
    $statusResposta = (bool) false;

    /* abrindo conexao com bd */
    $conexao = abrirConexaoMySql();

    /* criando script para inserir genero */
    $scriptSql = "insert into tblCategorias
                    (genero)
                    
                    values
                    ('".$categoria['genero']."')";

    /* verificando se o script está correto e encaminhará dados para o bd */
    if(mysqli_query($conexao, $scriptSql)) {
        /* verificando se houveram linhas afetadas no bd */
        if(mysqli_affected_rows($conexao)) {
            $statusResposta = true;
        }
    }

    fecharConexaoMySql($conexao);
    return $statusResposta;
}

/* função para selecionar/listar todas categorias existentes no banco de dados */
function selectAllCategorias() {
    /* abrir conexão com bd */
    $conexao = abrirConexaoMySql();

    /* criar script que lista todos os dados da tabela */
    $scriptSql = "select * from tblcategorias";

    /* armazenando retorno dos dados, trazidos através da conexão e do script, numa variável */
    $resultado =  mysqli_query($conexao, $scriptSql);

    /* se a variável resultado nos retornar algo, percorreremos cada um dos dados e os converteremos para o nosso array */
    if($resultado) {
        $cont = 0;

        while($resultadoCategorias = mysqli_fetch_assoc($resultado)) {
            $arrayCategorias[$cont] = array(
                /* 'idCategoria' => $resultadoCategorias['idCategoria'], */
                'genero'      => $resultadoCategorias['genero']
            );

            $cont++;
        }

        /* SEMPRE RETORNAR O ARRAY */
        return $arrayCategorias;
    }
}

/* função para deletar categorias no banco de dados */
function deleteCategoria() {

}




?>