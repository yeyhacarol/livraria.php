<?php 
/* arquivo para manipular dados relativos a produtos e validá-los; autora: Carolina Silva; data de criação: 06/05/2022 versão: 1.0 */

/* função para encaminhar produtos produtos para model e validá-los */
function inserirProduto($produto) {
    /* validando se existe algum produto */
    if (!empty($produto)) {
        /* validando campos obrigatórios */
        if (!empty($produto['txtTitulo']) && !empty($produto['txtAutor']) && !empty($produto['txtDescricao']) &&
         !empty($produto['txtPreco'])) {
            /* se todos os campos estiverem preenchidos, criamos um array com todos os dados relativos ao produto */
            $arrayProdutos = array(
                "titulo"    => $produto['txtTitulo'],
                "autor"     => $produto['txtAutor'],
                "descricao" => $produto['txtDescricao'],
                "preco"     => $produto['txtPreco']
            );

            /* import model */
            require_once('model/bd/produto.php');

            if (insertProduto($arrayProdutos)) {
                return true;
            } else {
                return array(
                    'idErro'  => 1,
                    'message' => 'Não foi possível inserir no banco de dados!'
                );
            }
        } else {
            return array(
                'idErro'  => 2,
                'message' => 'Algum campo obrigatório não preenchido.'
            );
        }
    }
}

/* função para listar produtos na view */
function listarProdutos() {
    /* import da model */
    require_once('model/bd/produto.php');

    $produtos = selectAllProdutos();

    if (!empty($produtos)) {
        return $produtos;
    } else {
        return false;
    }
}

/* função para deletar arquivos da view */
function deletarProduto($idProduto) {

    if ($idProduto != 0 && !empty($idProduto) && is_numeric($idProduto)) {
        require_once('model/bd/produto.php');

        if (deleteProduto($idProduto)) {
            return true;
        } else {
            return array(
                'idErro'  => 3,
                'message' => 'Não foi possível apagar produto.'
            );
        }
    } else {
        return array(
            'idErro'  => 4,
            'message' => 'ID inválido.'
        );
    }
}

/* função para atualizar produto da view */
function atualizarProduto() {

}
?>