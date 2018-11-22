<?php
include('paginas/header.php');


/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * A página index trás dois diferenciasi, o primeiro são os 4 produtos que mais possuem
 * visualizaçõs em nosso e-commerce e o segundo ele lista de acordo com as datas, quando
 * você efetua um cadastro é solicitado um periodo para o produto aparecer como novo, essa
 * listagem aparece aqui no index abaixo do parallax
*/
?>
<!--
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/carrossel.svg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/carrossel.svg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/carrossel.svg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> -->
<div class="container" >
    <h1>Produtos Mais Visualizados</h1>
    <div class="row galeria" style="margin-top:30px;">
        <?php
        include_once './modal/ProdutoDAO.php';
        $produtoDao = new ProdutoDAO();
        $vetorProdutos[] = $produtoDao->maisVisualizados();

        $j = 0;
        while ($j < 4) {
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
            $j++;
        }
        ?>
    </div>
</div>

<div class="parallax"></div>

<div class="container" >
    <h1>Produtos Novos</h1>
    <div class="row galeria" style="margin-top:30px;">
        <?php
        //include_once '/modal/ProdutoDAO.php';
        $produtoDaoData = new ProdutoDAO();
        //$vetorProdutos[];
        $vetorProdutosData[] = $produtoDaoData->retornarProdutosData();

        for ($j = 0; $j < $produtoDaoData->qtd_produto; $j++) {
            ?>

            <div class="col-md-3 caixa" style="margin-top: 25px;">
                <center>
                    <a href="produto_ep.php?nome=<?php echo $vetorProdutosData[0][$j]->getNome(); ?>&id=<?php echo utf8_encode($vetorProdutosData[0][$j]->getId_produtos()); ?>">
                        <img src="admin/<?php echo $vetorProdutosData[0][$j]->getNome_img(); ?>" class="img img-responsive img-caixa"  alt="">
                        <h3><?php echo $vetorProdutosData[0][$j]->getNome(); ?></h3>
                        <h5><?php echo $vetorProdutosData[0][$j]->getPeso(); ?></h5>
                        <h4>R$<?php echo $vetorProdutosData[0][$j]->getPreco(); ?></h4>
                        <h5><?php
                            $dataInicio = new DateTime($vetorProdutosData[0][$j]->getData_inicio());
                            //$data->setDate(1995, 3, 9);
                            echo "Data Inicio: " . $dataInicio->format('d/m/Y');
                            ?></h5>
                        <h5><?php
                            $dataFim = new DateTime($vetorProdutosData[0][$j]->getData_final());
                            //$data->setDate(1995, 3, 9);
                            echo "Data Fim: " . $dataFim->format('d/m/Y');
                            ?></h5>
                    </a>
                </center>
            </div>

            <?php
        }
        ?>
    </div> 
</div> 


<?php include('paginas/footer.php'); ?>