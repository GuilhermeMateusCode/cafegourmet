<?php
include('paginas/header.php');
if (isset($_GET['user'])) {
    echo "<center> <div class='col-md-6 alert alert-danger' style='margin-top:25px; margin-bottom:25px;' role='alert'> Email ou reesultados errados</div></center>";
}
/*

  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Pagina para o usuário deseja redefinir sua senha sem estar logado, o trecho de código acima
 * é a resposta de que sua senha atual ou ambas as senhas não são iguais, recebemos essa resposta do arquivo: respEsqueceuSenha.php
 */
?>


<div class="container  col-md-3">
    <form class="form-signin" action="bd/respEsqueceuSenha.php" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Redefina sua senha:</h1>

        <div class="form-group">
            <label for="inputEmail">E-mail:</label>
            <input type="email" name="email" class="form-control" placeholder="email@email" required autofocus>
        </div>

        <div class="form-group">
            <label for="inputEmail">3+7:</label>
            <input type="text" name="conta" class="form-control" placeholder="Resposta" required autofocus>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Redefenir</button>
        <small class="form-text text-muted">*Um email será enviado para sua caixa de entrada.</small>
        <small class="form-text text-muted">**Caso não receba o email de redefinição, verifique sua caixa de Spam.</small>

    </form>

</div>

<?php include('paginas/footer.php'); ?>