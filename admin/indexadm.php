<!DOCTYPE html>
<?php
include_once 'headeradmin.php';
include_once '../modal/DataSource.php';
$banco = new DataSource("cafe");
$produtos = "SELECT `id_produtos`,`nome_img`, `nome`, `preco`,`peso`,`marca` FROM `produtos`";
$resultado = mysqli_query($banco->getCon(), $produtos);
if (!$resultado) {
    die("Erro");
}

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * 
 * Painel de controle para os produtos, ali vc pode exluir, alterar ou cadastrar um produto
 */
?>


<div class="col-md-12">
    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-top: 25px; margin-bottom: 25px;">Produtos</h2>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">&nbsp;&nbsp; Nome &nbsp;&nbsp; | &nbsp;&nbsp; Preço &nbsp;&nbsp; | &nbsp;&nbsp; Peso &nbsp;&nbsp; | &nbsp;&nbsp; Marca</th>
                                <th scope="col"></th><th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($linha = mysqli_fetch_array($resultado)) {
                                ?>
                                <tr>

                                    <td scope="row" style="padding: 10px;"><?php echo $linha['id_produtos']; ?></td>
                                    <td><img src="<?php echo $linha['nome_img']; ?>"  style="width: 10%;"> Nome: <?php echo utf8_encode($linha['nome']); ?>&nbsp; | &nbsp;Preço: <?php echo utf8_encode($linha['preco']); ?>&nbsp; | &nbsp;Peso: <?php echo utf8_encode($linha['peso']); ?>&nbsp; | &nbsp;Marca: <?php echo utf8_encode($linha['marca']); ?></td>
                                    <!-- <td><a onclick="" href="#" > Alterar </a></td> -->
                                    <td style="padding: 10px;"><a href="bd_admin/respdelete.php?id=<?php echo $linha['id_produtos']; ?>">Excluir</a></td>
                                    <td style="padding: 10px;"><a href="altProduto.php?id=<?php echo $linha['id_produtos']; ?>">Alterar</a></td>
                                </tr>

                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>
</div>


