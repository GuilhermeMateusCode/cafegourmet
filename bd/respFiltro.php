<?php

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * Pagina de resposta pra pegar opções do filtro
 */
$preco = '';

if (isset($_POST['preco'])) {
    $preco = $_POST['preco'];
}

if ($preco === '') {
    header('Location: ../produtos-list.php?');
} else if ($preco !== '') {
    header('Location: ../produtos-list.php?preco=' . $preco);
}    




