<?php

session_start();
/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * resposta e validação do login
 */
$email = $_POST['email'];
$senha = md5($_POST['senha']);

include_once '../modal/ClienteDAO.php';
$banco = new ClienteDAO();
$teste = $banco->validarLogin($email, $senha);
if ($teste === 'Usuário ou senha errados') {
    header('Location: ../login.php?user=Error');
} else {
    session_start();
    $_SESSION['usuario'] = $teste;
    header('Location: ../index.php');
}




