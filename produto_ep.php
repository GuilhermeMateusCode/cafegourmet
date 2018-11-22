
<?php
include('paginas/header.php');
//include 'bd/connect.php';
$produto = $_GET['id'];

include_once './modal/ProdutoDAO.php';
$produtoDao = new ProdutoDAO();
$vetorProdutos[] = $produtoDao->retornarProduto($produto);

/*

  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * Página destinada a um produto específico, é informado o nome e o id via get da pagina produtos-list.php
 */
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="admin/<?php echo $vetorProdutos[0][0]->getNome_img(); ?>" class="img img-responsive img-caixa"  alt="">
        </div>

        <div class="col-md-6">
            <h1><?php echo $vetorProdutos[0][0]->getNome(); ?></h1>
            <p><?php echo $vetorProdutos[0][0]->getDescricao(); ?></p>

            <div class="row">
                <div class="col-md-4"><p><b>Peso:</b> <?php echo $vetorProdutos[0][0]->getPeso(); ?></p></div>
                <div class="col-md-4"><p><b>Marca:</b> <?php echo $vetorProdutos[0][0]->getMarca(); ?></p></div>
                <div class="col-md-4"><p><b>Tipo:</b> <?php echo $vetorProdutos[0][0]->getTipo(); ?></p></div>
            </div>


            <div class="row" style="margin-top: 25px;">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h3>R$<?php echo $vetorProdutos[0][0]->getPreco(); ?></h3>
                </div>
                <!--<div class="col-md-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Qtd</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>-->

                <div class="col-md-3">
                    <a href="carrinho.php?nome_img=<?php echo $vetorProdutos[0][0]->getNome_img(); ?>&valor=<?php echo $vetorProdutos[0][0]->getPreco(); ?>">
                        <button class="btn btn-success" onclick="adicionarCarrinho()" type=""> Adicionar ao Carrinho <img src="img/glyphicons-209-cart-in.png" alt=""></button>
                    </a>
                </div>


                <!-- <div class="col-md-2">
                    <button class="btn" type="">Comprar</button>
                </div> -->

            </div>
        </div>
    </div>
</div>
</div>

<?php include('paginas/footer.php'); ?>