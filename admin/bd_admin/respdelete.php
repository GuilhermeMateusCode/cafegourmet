<?php
/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * Pagina para apagar o produto
 */

include_once '../../modal/DataSource.php';
$banco = new DataSource("cafe");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$sql = "DELETE FROM `produtos` WHERE `produtos`.`id_produtos` = '" . $id . "'";
$resultado = mysqli_query($banco->getCon(), $sql);
if (!$resultado) {
    die("Erro ao apagar produto");
}
?>
<script>
    alert("Produto Excluido com sucesso!!")
    window.location.replace("../indexadm.php");
</script>

