<?php
include 'paginas/header.php'
/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Pagina para o usuário verificar seu carrinho de compras*/
?>

<div class="container" style="margin-top: 50px;">
    <h1>Seu carrinho</h1>
    <div class="col-md-12">

        <div class="row text-center">
            <div class="col-md-3"><h3>Produto</h3></div>
            <div class="col-md-3"><h3>Quantidade</h3></div>
            <div class="col-md-3"><h3>Valor</h3></div>
            <div class="col-md-3"></div>
        </div>
        <?php
        if (isset($_GET['nome_img'])) {
            $produto_carrinho = $_GET['nome_img'];
            $valor_carrinho = $_GET['valor'];

            array_push($_SESSION['carrinho'], $produto_carrinho, $valor_carrinho);
            //print_r($_SESSION['carrinho']);
            ?>



            <div class = "row text-center" id = "produto">
                <div class = "col-md-3">
                    <img src = "admin/<?php echo $_SESSION['carrinho'][0] ?>" class = "img-carrinho img img-responsive">
                </div>
                <div class = "col-md-3 carrinho">
                    <center>
                        <input type = "number" class = "form-control md-3" min = "1" max = "10" placeholder = "Qtd" onclick = "calc(<?php echo $_SESSION['carrinho'][1] ?>)" value = "1" id = "qnt">
                    </center>

                </div>
                <div class = "col-md-3 carrinho">
                    <p id = "valor">R$ <?php echo $_SESSION['carrinho'][1]
            ?></p>
                </div>
                <div class="col-md-3 carrinho">
                    <button class="btn" type="" onclick="excluir()">Excluir</button>
                    <!-- <button class="btn" type="">Alterar</button> -->
                </div>
            </div>

            <div class="row" style="margin-top: 60px;">
                <div class="col-md-2"></div>
                <div class="input-group col-md-4">
                    <!--<p style="margin-top: 8px;">Cupom:  </p>
                    <input type="text" class="form-control" placeholder="Cupom" aria-label="Username">
                    <button class="btn" type="">Aplicar</button>-->
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2" id="produto2">
                    <p style="margin-top: 8px;" id="valor2">Total: R$ <?php echo $_SESSION['carrinho'][1] ?></p>
                </div>
            </div>

            <div class="row" id="botao">
                <div class="col-md-9"></div>
                <?php
                //session_start();
                if (!isset($_SESSION['usuario'])) {
                    ?>
                    <div class="col-md-3 text-right">
                        <button class="btn" onclick="window.location.href = 'login.php';">finaizar</button>
                    </div>
                <?php } else { ?>
                    <div class="col-md-3 text-right">
                        <button class="btn" onclick="window.location.href = 'compraSucesso.php';">finaizar</button>
                    </div>
                <?php } ?>

            </div>
            <?php
        } else {
            array_push($_SESSION['carrinho'], "", "");
            ?>
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 50px; margin-bottom: 50px;">
                    <h3>Você não possuí produtos em seu carrinho!</h3>
                </div>
            </div>

            <?php }
        ?>


    </div>
</div>


<?php
include 'paginas/footer.php';
?>

<script>
    function calc(valor) {

        var qnt1 = document.getElementById('qnt').value;
        var calculo = qnt1 * valor;
        var h3 = document.getElementById('valor');
        h3.innerHTML = "R$" + calculo.toFixed(2).replace(".", ",");
        var h4 = document.getElementById('valor2');
        h4.innerHTML = "Total: R$" + calculo.toFixed(2).replace(".", ",");
    }

    function excluir() {
        document.getElementById('produto').style.display = "none";
        document.getElementById('produto2').style.display = "none";
        document.getElementById('botao').style.display = "none";
    }
</script>