<?php
include 'paginas/header.php';

$preco_get = '';

if (isset($_GET['preco'])) {
    $preco_get = $_GET['preco'];
}
/*

  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * Página destinada a listar todos os produtos, sendo filtrados ou não
 */
?>

<style>
    button{
        margin-bottom: 5px;
    }
</style>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-2">
            <form action="bd/respFiltro.php" method="post">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active text-left" href="#"><h3>Filtros</h3><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">

                        <div class="form-check">
                            <label class="form-check-label" for="exampleRadios3">
                                <input class="form-check-input" type="radio" name="preco" id="exampleRadios3" value="Todos os Produtos">
                                Todos os Produtos
                            </label>
                        </div>
                        <a class="nav-link" href="#"><h4>Preço</h4></a>
                        <div class="form-check">
                            <label class="form-check-label" for="exampleRadios1">
                                <input class="form-check-input" type="radio" name="preco" value="< 50">
                                Abaixo de R$50,00 
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="exampleRadios2">
                                <input class="form-check-input" type="radio" name="preco" value="> 50">
                                De R$50,00 até R$100,00
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="exampleRadios3">
                                <input class="form-check-input" type="radio" name="preco" value="> 100">
                                Acima de R$100,00
                            </label>
                        </div>

                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#"><h4>Marca</h4></a>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Orfeu
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Baggio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                L'or
                            </label>
                        </div>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="#"><h4>Produto</h4></a>
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="radio" value="Grãos"  name="preco">
                                Café - Grãos
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="radio" value="Café - Capsúlas" name="produto">
                                Café - Capsúlas
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1">
                                <input class="form-check-input" type="radio" value="Filtros de Papel" name="produto">
                                Filtros de Papel
                            </label>
                        </div>
                    </li>-->



                    <li class="nav-item" style="margin-top: 25px; margin-left: 25px;">
                        <button class="btn" type="submit">Filtrar</button>
                    </li>

                </ul>
            </form>
        </div>

        <div class="col-md-9" style="float: right;">


            <div class="row galeria" style="margin-top:30px;">
<?php
include_once './modal/ProdutoDAO.php';
$produtoDao = new ProdutoDAO();
//$vetorProdutos[];
if ($preco_get === '' || $preco_get === 'Todos os Produtos') {
    $vetorProdutos[] = $produtoDao->listarProdutos();
} else if ($preco_get !== '') {
    $vetorProdutos[] = $produtoDao->listarProdutosPreco($preco_get);
}
for ($j = 0; $j < $produtoDao->qtd_produto; $j++) {
    ?>

                    <div class="col-md-3 caixa" style="margin-top: 25px;">
                        <center>
                            <a href="produto_ep.php?nome=<?php echo $vetorProdutos[0][$j]->getNome(); ?>&id=<?php echo utf8_encode($vetorProdutos[0][$j]->getId_produtos()); ?>">
                                <img src="admin/<?php echo $vetorProdutos[0][$j]->getNome_img(); ?>" class="img img-responsive img-caixa"  alt="">
                                <h3><?php echo $vetorProdutos[0][$j]->getNome(); ?></h3>
                                <h5><?php echo $vetorProdutos[0][$j]->getPeso(); ?></h5>
                                <h4>R$<?php echo $vetorProdutos[0][$j]->getPreco(); ?></h4>
                            </a>
                        </center>
                    </div>

    <?php
}
?>
            </div> 
        </div>
    </div>
</div>

<?php
include 'paginas/footer.php';
?>