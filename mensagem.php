<?php

include('paginas/header.php');
/*

  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Pagina para o usuário enviar uma mensagem para os adm, essa mensgaem é mostrado na pinel do admin
 */
?>

<style type="text/css" media="screen">
    small{
        margin-bottom: 10px;
    }    
</style>
<div class="container col-md-6" style="margin-top: 25px;">
    <form class="" action="bd/respMensagem.php" method="POST">
        <div class="form-goup">
            <label for="exampleInputEmail1">Nome:</label>
            <input type="text" class="form-control" name="nome"placeholder="Digite seu nome">
            <small class="form-text text-muted">Insira o Nome Completo.</small>
        </div>
        <div class="form-goup">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
            <small class="form-text text-muted">Insira seu e-mail.</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem:</label>
            <textarea class="form-control" name="mensagem" rows="6"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>


    </form>
</div>
<?php include('paginas/footer.php'); ?>