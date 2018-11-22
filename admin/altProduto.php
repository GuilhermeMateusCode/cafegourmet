<?php
/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * Pagina para alterar as informações do produto
 */
//include 'bd/connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

include_once '../modal/ProdutoDAO.php';
$produtoDaoAlte = new ProdutoDAO();
$vetorProdutos[] = $produtoDaoAlte->retornarProdutoAlterar($id);
include_once 'headeradmin.php';
?>


<div class="container col-md-6" style="margin-top: 50px; margin-bottom: 100px;">
    <h1 class="text-center">Cadastre-se em nosso site: </h1>
    <form action="respAlterar.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nome Produto</label>
            <input type="text" class="form-control" value="<?php echo $vetorProdutos[0][0]->getNome(); ?>" name="nome" required>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-6">
                    <label>Preço</label>
                    <input type="text" class="form-control" name="preco" value="<?php echo $vetorProdutos[0][0]->getPreco(); ?>" required>
                    <small>Digite apenas numeros com ponto. EX: 50.00</small>
                </div>
                <div class="col-6">
                    <label>Marca</label>
                    <input type="text" class="form-control" name="marca" value="<?php echo $vetorProdutos[0][0]->getMarca(); ?>" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-6">
                    <label>Tipo</label>
                    <input type="text" class="form-control" name="tipo"required value="<?php echo $vetorProdutos[0][0]->getTipo(); ?>">
                    <small>Gãos de Café, Filtro de papel, máquina...</small>
                </div>
                <div class="col-6">
                    <label>Peso</label>
                    <input type="text" class="form-control" name="peso" value="<?php echo $vetorProdutos[0][0]->getPeso(); ?>" required>
                    <small>EX: 1kg, 100gr</small>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Descrição:</label>
            <textarea class="form-control" name="descricao" rows="6" ><?php echo $vetorProdutos[0][0]->getDescricao(); ?></textarea>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-6">
                    <label>Data Inicio do Novo</label>
                    <input type="date" class="form-control" name="data_inicio" value="<?php echo $vetorProdutos[0][0]->getData_inicio(); ?>" required>
                </div>
                <div class="col-6">
                    <label>Data Final do Novo</label>
                    <input type="date" class="form-control" name="data_final" value="<?php echo $vetorProdutos[0][0]->getData_final(); ?>" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-6">
                </div>
                <div class="col-6">
                    <label>Miniatura</label>
                    <input type="file" name="foto_grande" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="indexadm.php">
                    <button type="button" class="btn btn-primary">Voltar</button>
                </a>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>

        </div>


    </form>
</div>
