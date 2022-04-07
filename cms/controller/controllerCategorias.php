<?php 
/* arquivo de para manipular dados relativos a categoria e validá-los; autora: Carolina Silva; data de criação: 07/04/2022; versão: 1.0 */

/* função para inserir categorias na model */
function inserirCategoria($categoria) {
    /* validando se categoria, ou seja, o nome da categoria foi prenchido */
    if(!empty($categoria)) {
        /* verificando se o campo obrigatório de inserção não está vazio  */
        if(!empty($categoria['txtGenero'])) {
            /* se não estiver vazio, refatoremos o nome da caixa de texto para um nome com maior semântica */
            $arrayCategorias = array (
                "genero" => $categoria['txtGenero']
            );

            /* importando arquivo da model que insere no banco */
            require_once('model/bd/categoria.php');
            /* se a ação de inserir aconetecer com sucesso retornaremos true, se não retornaremos um array de erros */
            if(insertCategoria($arrayCategorias)) {
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
                'message' => 'Campo de categoria não preenchido.'
            );
        }
    }
}

/* função para listar categorias na model */
function listarCategorias() {
    /* importanto arquivo model que está armazenando os dados do banco */
    require_once('model/bd/categoria.php');

    $categorias = selectAllCategorias();
    if(!empty($categorias)) {
        return $categorias;
    } else {
        return false;
    }
}

/* função para deletar categorias na model */
function deletarCategoria() {

}





?>