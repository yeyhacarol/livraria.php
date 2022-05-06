<?php 
/* arquivo de crud da sessão de produtos, sejam eles destaques, promoções ou apenas do catálogo do banco de dados; autora: Carolina Silva; data criação: 06/05/2022; versão: 1.0 */

require_once('conexaoMySql.php');

/* função para inserir produto no banco de dados */
function insertProduto($produto) {
    $statusResposta = (bool) false;

    /* abrindo conexão com banco de dados */
    $conexao = abrirConexaoMySql();

    /* script para inserir dados no banco */
    $scriptSql = "insert into tblProdutos
                    (titulo,
                     autor,
                     descricao,
                     preco,
                     desconto)
                     
                     values
                     ('".$produto['titulo']."',
                      '".$produto['autor']."',
                      '".$produto['descricao']."',
                      ".$produto['preco'].",
                      ".$produto['desconto'].");";

    /* verificando se a conexão e o script retornaram algo. se o script alterou linhas na tabela */
    if (mysqli_query($conexao, $scriptSql)) {
        if (mysqli_affected_rows($scriptSql)) {
            $statusResposta = true;
        }
    }

    fecharConexaoMySql($conexao);
    return $statusResposta;                  
}

/* função para listar todos os produtos no banco de dados */
function selectAllProdutos() {
    $arrayProdutos = array();

    $conexao = abrirConexaoMySql();

    $scriptSql = "select * from tblProdutos";

    $resultado = mysqli_query($conexao, $scriptSql);

    if ($resultado) {
        $cont = 0;

        while ($resultadoProdutos = mysqli_fetch_assoc($resultado)) {
            $arrayProdutos[$cont] = array (
                'idProduto' => $resultadoProdutos['idProduto'],
                'titulo'    => $resultadoProdutos['titulo'], 
                'autor'     => $resultadoProdutos['autor'],
                'descricao' => $resultadoProdutos['descricao'],
                'preco'     => $resultadoProdutos['preco'],
                'desconto'  => $resultadoProdutos['desconto']
            );

            $cont++;
        }

        fecharConexaoMySql($conexao);
        return $arrayProdutos;
    }
}

/* função para deletar produtos no banco de dados */
function deleteProduto($idProduto) {
    $statusResposta = (bool) false;

    $conexao = abrirConexaoMySql();

    $scriptSql = "delete fo=rom tblProdutos where idProduto".$idProduto;

    if (mysqli_query($conexao, $scriptSql)) {
        if (mysqli_affected_rows($scriptSql)) {
            $statusResposta = true;
        }
    }

    fecharConexaoMySql($conexao);
    return $statusResposta;
}

/* função que selecionará o produto a partir do id */
function selectByIdProduto($idProduto) {
    $conexao = fecharConexaoMySql();

    


}

/* função para atualizar/editar podutos no banco de dados */
function updateProdutos() {

}


?>