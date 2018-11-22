<?php
/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * Resposta do alterar produto
 */
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
include '../funcoes.php';
//include '../modal/Produto.php';
include_once 'modelAdmin/ProdutoCad.php';
$obj_cad = new ProdutoCad();

$obj_cad->setNome(utf8_decode($_POST['nome']));
$obj_cad->setPreco($_POST['preco']);
$obj_cad->setMarca(utf8_decode($_POST['marca']));
$obj_cad->setTipo(utf8_decode($_POST['tipo']));
$obj_cad->setPeso($_POST['peso']);
$obj_cad->setDescricao(utf8_decode($_POST['descricao']));
$obj_cad->setData_inicio($_POST['data_inicio']);
$obj_cad->setData_final($_POST['data_final']);


if (isset($_FILES['foto_grande'])) {
    $resultado1 = publicarImagem($_FILES['foto_grande']);
    $mensagem1 = $resultado1[0];
    $imagem_grande = $resultado1[1];
}
$obj_cad->setNome_img($imagem_grande);

include '../modal/ProdutoDAO.php';
$banco2 = new ProdutoDAO();
$banco2->alterar($obj_cad, $id);
?>

<script>
    alert("Produto Alterado com sucesso!!")
    window.location.replace("indexadm.php");
</script>