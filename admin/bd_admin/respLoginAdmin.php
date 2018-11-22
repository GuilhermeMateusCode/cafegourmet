<?php

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * Valida o login do admin
 */
$email = $_POST['email']; //$_POST['email'];
$senha = md5($_POST['senha']);

include_once '../../modal/DataSource.php';
$pdo = new DataSource('cafe');

$stmt = $pdo->getCon()->query("SELECT * FROM clientes where email = '" . $email . "' and senha = '" . $senha . "'");
$linhas = mysqli_num_rows($stmt);
$linhas;

if ($linhas !== 0) {
    $row = $stmt->fetch_assoc(); //ou mysql_fetch_all()
    if ($row['nivel_user'] == 1) {
        echo $row['nome'] . "<br />\n";
        session_start();
        $_SESSION['user_admin'] = $row['nome'];
        header('Location: ../indexadm.php');
    } else {
        echo "usuário sem permissão para acessar essa pagina";
    }
} else {
    echo "Usuário não encontrado";
}