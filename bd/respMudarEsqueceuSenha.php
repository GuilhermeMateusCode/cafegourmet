<?php

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * Resposta da pagina de esqueceu a senha e já validou o email, falta só validar as 2 senhas
 */
session_start();

echo $novaSenha = md5($_POST['novaSenha']);
echo "<br>";
echo $novaSenhaRepetida = md5($_POST['novaSenhaRepetida']);


if ($novaSenha == $novaSenhaRepetida) {
    include_once '../modal/ClienteDAO.php';
    $banco = new ClienteDAO();
    $teste = $banco->alterarSenha($_SESSION['id_temporario'], $novaSenha);
    //unset( $_SESSION['id_temporario'] );
    header('Location: ../senhaSucesso.php');
} else {
    header('Location: ../redefinirSenha.php?user=Error');
}


