<?php

/*

  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Página destinada a remover todas as sessões de um usuário, quando o mesmo clica em sair.
 */
// removendo todas as sessões
session_start();
session_destroy();
unset($_SESSION);

// removendo sessões do jogo
// opção 1)
unset($_SESSION['usuario']);
unset($_SESSION['id']);

// opção 2)
//$_SESSION['user_admin'] = null;


header('Location: index.php');
?>
