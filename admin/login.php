
<!-- /*
      Gabriel: 21018981
      Guilherme Forlani: 20551582
      Guilherme Mateus: 20779723
      João: 20923708
      Samuel: 20408096

        Pagina de login do admin
     */-->

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body style="background-color: #dfbf9f;">
<div class="container  col-md-3" style="margin-top: 100px;">
    <form class="form-signin" method="post" action="bd_admin/respLoginAdmin.php">
        <div class="form-group">
            <label for="inputEmail">E-mail:</label>
            <input type="email" name="email" class="form-control" placeholder="email@email" required autofocus>
        </div>

        <div class="form-group">
            <label for="inputPassword">Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

    </form>
</div>
</body>