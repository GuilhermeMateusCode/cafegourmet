<?php

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * Pagina de resposta de quando o usuário esqueceu a senha e temos que validar primeiro o login
 */

echo $email = $_POST['email'];
echo "<br>";
echo $resposta = $_POST['conta'];

include_once '../modal/ClienteDAO.php';
$banco = new ClienteDAO();
$teste = $banco->validarEmail($email);

if ($teste === 'Email não enontrado' || $resposta != 10) {

    header('Location: ../esqueceuSenha.php?user=Error');
} else {
    echo $teste;
    header('Location: ../redefinirSenha.php');
}

