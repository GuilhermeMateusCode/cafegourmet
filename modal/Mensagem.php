<?php

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Conteudo e links do footer

 */

class Mensagem {

    private $nome, $email, $mensagem, $data_lancamento, $situacao;

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function getData_lancamento() {
        return $this->data_lancamento;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    function setData_lancamento($data_lancamento) {
        $this->data_lancamento = $data_lancamento;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

}
