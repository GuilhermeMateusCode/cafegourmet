<?php
session_start();
$_SESSION['carrinho'] = array();


/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Conteudo e links do header incluindo o menu


 */
?>
<html>
    <head>
        <title>Café Gourmet</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #dfbf9f;">
            <a class="navbar-brand" href="index.php">
                <img src="img/glyphicons-295-coffee-cup.png" width="28"  class="d-inline-block align-center" alt="">
                Café Gourmet
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="produtos-list.php" class="nav-link" title="">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="sobre.php" class="nav-link" title="">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a href="mensagem.php" class="nav-link" title="">Fale Conosco</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php
                        //session_start();
                        if (!isset($_SESSION['usuario'])) {
                            ?>
                            <a href="login.php" class="nav-link" title="">Login</a>
                        <?php } else { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Olá " . $_SESSION['usuario']; ?></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/ecommerce-cafe/altCliente.php">Alterar Cadastro</a>
                                <a class="dropdown-item" href="/ecommerce-cafe/redefinirSenhaLog.php">Alterar Senha</a>
                                <a class="dropdown-item" href="/ecommerce-cafe/excluirSucesso.php">Excluir Cadastro</a>
                                <a class="dropdown-item" href="/ecommerce-cafe/mensagem.php">Enviar Mensagem</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/ecommerce-cafe/sair_user.php">Sair</a>
                            </div>
                        </li>
                        <?php } ?>

                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand nav-link" href="carrinho.php">
                            <img src="img/glyphicons-203-shopping-cart.png" width="28"  class="d-inline-flex align-center" alt="">
                            Carrinho
                        </a>
                    </li>
                    <!-- <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
                            
                    </form>
                    <li>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
                    </li> -->
                </ul>
            </div>
        </nav>