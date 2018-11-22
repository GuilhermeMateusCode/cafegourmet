<?php
/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * 
 * Resposta da pagina de mensgaem, onde ele pega a data e hr de um servida e logo após faz o processo de preencher o obj mensagem e cadastrar a mensagem
 */
$socket = fsockopen('udp://pool.ntp.br', 123, $err_no, $err_str, 1);
if ($socket) {
    if (fwrite($socket, chr(bindec('00' . sprintf('%03d', decbin(3)) . '011')) . str_repeat(chr(0x0), 39) . pack('N', time()) . pack("N", 0))) {
        stream_set_timeout($socket, 1);
        $unpack0 = unpack("N12", fread($socket, 48));
        $date = date('Y-m-d H:i:s', $unpack0[7]);
    }

    fclose($socket);
}

include_once '../modal/Mensagem.php';
$obj = new Mensagem();

$obj->setNome(utf8_decode($_POST['nome']));
$obj->setEmail($_POST['email']);
$obj->setMensagem(utf8_decode($_POST['mensagem']));
$obj->setData_lancamento($date);

include_once '../modal/MensagemDAO.php';
$banco = new MensagemDAO();
$banco->inserir($obj);
?>
<script>
    window.location.replace("../mensagemSucesso.php");
</script>




