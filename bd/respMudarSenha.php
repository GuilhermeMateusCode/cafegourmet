<?php

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * Pagina de resposta par amudar a senha quando se está logado
 */


session_start();

echo $senha_atual = md5($_POST['senhaAtual']);
echo "<br>";
echo $nova_Senha = md5($_POST['novasenha']);

include_once '../modal/ClienteDAO.php';
$banco = new ClienteDAO();
$teste = $banco->validarSenha($_SESSION['id'], $senha_atual, $nova_Senha);
if ($teste === 'Senha Atual errada') {
    header('Location: ../redefinirSenhaLog.php?user=Error');
} else {
    echo $teste;
    header('Location: ../senhaSucesso.php');
}

