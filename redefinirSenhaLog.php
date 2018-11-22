<?php
include('paginas/header.php');
if (isset($_GET['user'])) {
    echo "<center> <div class='col-md-6 alert alert-danger' style='margin-top:25px; margin-bottom:25px;' role='alert'> senha invalida</div></center>";
}

/*

  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Página destinada para usuários que estão logados e queremredefinir sua senhas, o trecho de código acima
 * é a resposta de que sua senha atual ou ambas as senhas não são iguais, recebemos essa resposta do arquivo: respMudarSenha.php
 */
?>




<div class="container  col-md-3">
    <form class="form-signin" method="post" action="bd/respMudarSenha.php">
        <h1 class="h3 mb-3 font-weight-normal">Redefina sua senha:</h1>

        <div class="form-group">
            <label for="exampleInputEmail1">Senha Atual</label>
            <input type="password" name="senhaAtual" id="inputEmail" class="form-control" placeholder="Digite sua senha atual" required autofocus>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Nova senha</label>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" name="novasenha" class="form-control" placeholder="Password" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"> Repita a nova senha</label>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>



        <button class="btn btn-lg btn-primary btn-block" type="submit">Redefenir</button>

    </form>
</div>

<?php include('paginas/footer.php'); ?>