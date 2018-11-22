<?php
include('paginas/header.php');
if (isset($_GET['user'])) {
    echo "<center> <div class='col-md-6 alert alert-danger' style='margin-top:25px; margin-bottom:25px;' role='alert'> Usuário ou senha invalidos</div></center>";
}
/*

  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Pagina para o usuário enviar efetuar o login, o trecho de código acima
 * é a resposta de que sua senha atual ou ambas as senhas não são iguais, recebemos essa resposta do arquivo: respLogin.php
 */
?>


<div class="container  col-md-3">
    <form class="form-signin" method="post" action="bd/respLogin.php">
        <h1 class="h3 mb-3 font-weight-normal">Faça login:</h1>

        <div class="form-group">
            <label for="inputEmail">E-mail:</label>
            <input type="email" name="email" class="form-control" placeholder="email@email" required autofocus>
        </div>

        <div class="form-group">
            <label for="inputPassword">Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembre-me
            </label><br>
            <a href="cadCliente.php" title="">Não possui conta? Cadastre-se!</a><br>
            <a href="esqueceuSenha.php" title="">Esqueceu a senha? Redefina!</a>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

    </form>
</div>

<?php include('paginas/footer.php'); ?>