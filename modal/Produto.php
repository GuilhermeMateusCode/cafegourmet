<?php

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Conteudo e links do footer

 */

class Produto {

    private $id_produtos, $nome, $preco, $marca, $tipo, $peso, $descricao, $visualizacao, $data_inicio, $data_final, $nome_img;

    function getNome() {
        return $this->nome;
    }

    function getId_produtos() {
        return $this->id_produtos;
    }

    function setId_produtos($id_produtos) {
        $this->id_produtos = $id_produtos;
    }

    function getPreco() {
        return $this->preco;
    }

    function getMarca() {
        return $this->marca;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getPeso() {
        return $this->peso;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getVisualizacao() {
        return $this->visualizacao;
    }

    function getData_inicio() {
        return $this->data_inicio;
    }

    function getData_final() {
        return $this->data_final;
    }

    function getNome_img() {
        return $this->nome_img;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setVisualizacao($visualizacao) {
        $this->visualizacao = $visualizacao;
    }

    function setData_inicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    function setData_final($data_final) {
        $this->data_final = $data_final;
    }

    function setNome_img($nome_img) {
        $this->nome_img = $nome_img;
    }

}
