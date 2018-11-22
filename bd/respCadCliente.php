<?php
/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * Cadstra o cliente logo após de pegar os dados e colocar em um objeto cliente
 */

include_once '../modal/Cliente.php';
$obj = new Cliente();

$obj->setNome(utf8_decode($_POST['nome']));
$obj->setEmail($_POST['email']);
$obj->setSenha(md5($_POST['senha']));

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$data = $ano . '-' . $mes . '-' . $dia;
$obj->setData_nasc($data);

$obj->setCpf($_POST['cpf']);
$obj->setSexo($_POST['sexo']);

$ddd1 = $_POST['ddd1'];
$tel1 = $_POST['tel1'];
$telefone = $ddd1 . $tel1;
$obj->setTelefone($telefone);

$ddd2 = $_POST['ddd2'];
$tel2 = $_POST['tel2'];
$celular = $ddd2 . $tel2;
$obj->setCelular($celular);

$obj->setEndereco(utf8_decode($_POST['endereco']));
$obj->setComplemento(utf8_decode($_POST['complemento']));
$obj->setNumero($_POST['numero']);
$obj->setCidade(utf8_decode($_POST['cidade']));
$obj->setEstado(utf8_decode($_POST['estado']));
$obj->setCep($_POST['cep']);

include_once '../modal/ClienteDAO.php';
$banco = new ClienteDAO();
$banco->inserir($obj);
?>

<script>
    window.location.replace("../cadastroSucesso.php");
</script>


