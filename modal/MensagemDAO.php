<?php
include 'DataSource.php';
class MensagemDAO {

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 */
    private $link;

    public function __construct() {
        $this->link = new DataSource('cafe');
    }
    
    //insere uma mensagem que aparece no painel do admin
    public function inserir($obj) {
        $sql = "INSERT INTO `mensagem` (`id_mensagem`, `nome`, `email`, `mensagem`, `data_lancamento`, `situacao`) "
                . "VALUES (null, ?, ?, ?, ?, 'Em Aberto')";
        
        $stm = mysqli_prepare($this->link->getCon(), $sql);
        
        $nome = $obj-> getNome();
        $email = $obj-> getEmail();
        $mensagem = $obj-> getMensagem();
        $date = $obj-> getData_lancamento();
                
        $stm ->bind_param("ssss", $nome, $email,$mensagem,$date);
        
        $stm ->execute();
    }

}
