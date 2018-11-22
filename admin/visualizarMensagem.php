<!DOCTYPE html>
<?php
include_once 'headeradmin.php';
include_once '../modal/DataSource.php';
$banco = new DataSource("cafe");
$produtos = "SELECT * FROM `mensagem`";
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
 * Página para visualizar todas as mensagens cadastradas no banco
 */
?>

<div class="col-md-12">
    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-top: 25px; margin-bottom: 25px;">Produtos</h2>
                    <table class="table table-striped table-bordered" style="padding: 10px;white-space: pre-wrap !important;">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Mensagem</th>
                                <th scope="col">Data de Lançamento</th>
                                <th scope="col">situação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($linha = mysqli_fetch_array($resultado)) {
                                ?>
                                <tr>
                                    <th scope="row" style="padding: 10px;"><?php echo $linha['id_mensagem']; ?></td>
                                    <td style="padding: 10px;"><?php echo $linha['nome']; ?></td>
                                    <td style="padding: 10px;"><?php echo $linha['email']; ?></td>
                                    <td style="padding: 10px;white-space: pre-wrap !important;"><?php echo utf8_encode($linha['mensagem']); ?></td>
                                    <td style="padding: 10px;"><?php echo $linha['data_lancamento']; ?></td>
                                    <td style="padding: 10px;"><?php echo $linha['situacao']; ?></td>
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
