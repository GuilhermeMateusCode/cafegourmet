<?php

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * Sai de todas as sessões do admin
 */
// removendo todas as sessões
session_start();
session_destroy();
unset($_SESSION);

// removendo sessões do jogo
// opção 1)
unset($_SESSION['user_admin']);

// opção 2)
//$_SESSION['user_admin'] = null;


header('Location: ../index.php');
?>
