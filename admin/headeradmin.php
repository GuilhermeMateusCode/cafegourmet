<!-- /*
      Gabriel: 21018981
      Guilherme Forlani: 20551582
      Guilherme Mateus: 20779723
      João: 20923708
      Samuel: 20408096
      
      Página destinada a colocar o header em um só lugar e sempre chamar ele no começo de todas as páginas

     */
-->

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<html>
    <head>
        <title>Café Gourmet</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #dfbf9f;">
            <a class="navbar-brand" href="indexadm.php">
                <img src="../img/glyphicons-295-coffee-cup.png" width="28"  class="d-inline-block align-center" alt="">
                Café Gourmet
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="cadproduto.php" class="nav-link" title="">Cadastrar Produto</a>
                    </li>
                    <li class="nav-item">
                        <a href="visualizarMensagem.php" class="nav-link" title="">Visualizar mensagem</a>
                    </li>
                    <li class="nav-item">
                        <a href="sair.php" class="nav-link" title="">sair</a>
                    </li>
                    <li class="nav-item" >
                        <?php
                        session_start();
                        if (!isset($_SESSION['user_admin'])) {
                            header('Location: login.php');
                        } else {
                            echo "<p style='margin-top:8px; margin-left:500px;'> Olá " . $_SESSION['user_admin'] . "</p>";
                        }
                        ?>
                    </li>
                </ul>

                </ul>
            </div>
        </nav>
