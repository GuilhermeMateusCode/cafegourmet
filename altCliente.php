<?php
include('paginas/header.php');
$_SESSION['id'];

include_once 'modal/ClienteDAO.php';
$clienteDaoAlte = new ClienteDAO();
$vetorCliente[] = $clienteDaoAlte->retornarCliente($_SESSION['id']);

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Pagina para o usuário alterarseu cadastros*/
?>

<div class="container" style="margin-top: 50px; margin-bottom: 100px;">
    <h1 class="text-center">Cadastre-se em nosso site: </h1>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="bd/respAltCliente.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome Completo</label>
                    <input type="text" value="<?php echo $vetorCliente[0][0]->getNome(); ?>" class="form-control" name="nome" aria-describedby="Nome Completo" placeholder="Digite o Nome completo" required>
                    <small class="form-text text-muted">Insira o Nome Completo.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" class="form-control" name="email" aria-describedby="Email" value="<?php echo $vetorCliente[0][0]->getEmail(); ?>" placeholder="Digite o e-mail" required>
                    <small id="emailHelp" class="form-text text-muted">Insira seu e-mail</small>
                </div>
                <div class="form-group">
                    <label for="data">Data Nascimento:</label>
                    <div class="form-row">

                        <div class="col-4">
                            <input type="date" value="<?php echo $vetorCliente[0][0]->getData_nasc(); ?>" class="form-control" name="data_nasc" placeholder="Dia" maxlength="2" name="dia" required>
                        </div>


                    </div>
                    <small id="emailHelp" class="form-text text-muted">Insira somente números</small>
                </div>

                <div class="form-group">
                    <div class="form-row">

                        <div class="col-6">
                            <label for="data">CPF:</label>
                            <input type="text" class="form-control" placeholder="CPF" maxlength="11" name="cpf" value="<?php echo $vetorCliente[0][0]->getCpf(); ?>" required>
                            <small id="emailHelp" class="form-text text-muted">Insira somente números</small>
                        </div>
                        <div class="col-6">
                            <label for="data">Sexo:</label>
                            <select name="sexo" class="form-control" >
                                <option  selected value="<?php echo $vetorCliente[0][0]->getSexo(); ?>"><?php echo $vetorCliente[0][0]->getSexo(); ?></option>
                                <option  value="Masculino">Masculino</option>
                                <option  value="Feminino">Feminino</option>

                            </select>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">


                        <div class="col-4">
                            <label for="numero">Telefone:</label>
                            <input type="text" class="form-control" placeholder="Telefone" value="<?php echo $vetorCliente[0][0]->getTelefone(); ?>" name="telefone" maxlength="9" required>
                        </div>


                        <div class="col-4">
                            <label for="numero">Celular:</label>
                            <input type="text" class="form-control" placeholder="Telefone" name="celular" maxlength="9" value="<?php echo $vetorCliente[0][0]->getCelular(); ?>" required>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" name="endereco" value="<?php echo $vetorCliente[0][0]->getEndereco(); ?>" placeholder="Rua, Avenida, Estada..." required>
                    <small  class="form-text text-muted">Insira seu endereço</small>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputCity">Complemento</label>
                        <input type="text" class="form-control" name="complemento" value="<?php echo $vetorCliente[0][0]->getComplemento(); ?>">
                        <small class="form-text text-muted">EX: Casa 2, Bloco G, Próximo à...</small>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputZip">Número</label>
                        <input type="text" class="form-control" name="numero" required value="<?php echo $vetorCliente[0][0]->getNumero(); ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" name="cidade" value="<?php echo $vetorCliente[0][0]->getCidade(); ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Estado</label>
                        <select name="estado" class="form-control">
                            <option selected value="<?php echo $vetorCliente[0][0]->getEstado(); ?>"> <?php echo $vetorCliente[0][0]->getEstado(); ?></option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">CEP</label>
                        <input type="text" class="form-control" name="cep" value="<?php echo $vetorCliente[0][0]->getCep(); ?>">
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6">
                        <a href="index.php">
                            <button type="button" class="btn btn-primary">Voltar</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">

    var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Senhas diferentes!");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;


</script>

<?php include('paginas/footer.php'); ?>