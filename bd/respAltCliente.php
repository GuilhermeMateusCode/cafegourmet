<?php
/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * Pagina de resposta par alterar os dados do cliente
 */

session_start();
include_once '../modal/Cliente.php';
$obj = new Cliente();

$obj->setNome(utf8_decode($_POST['nome']));
$obj->setEmail($_POST['email']);
$obj->setData_nasc($_POST['data_nasc']);
$obj->setCpf($_POST['cpf']);
$obj->setSexo($_POST['sexo']);
$obj->setTelefone($_POST['telefone']);
$obj->setCelular($_POST['celular']);
$obj->setEndereco(utf8_decode($_POST['endereco']));
$obj->setComplemento(utf8_decode($_POST['complemento']));
$obj->setNumero($_POST['numero']);
$obj->setCidade(utf8_decode($_POST['cidade']));
$obj->setEstado(utf8_decode($_POST['estado']));
$obj->setCep($_POST['cep']);

include_once '../modal/ClienteDAO.php';
$banco = new ClienteDAO();
$banco->alterar($obj, $_SESSION['id']);
?>

<script>

    window.location.replace("../alteracaoSucesso.php");
</script>



