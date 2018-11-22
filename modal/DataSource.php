<?php

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Conteudo e links do footer

 */

class DataSource {

    private $con;

    function __construct($database) {
        $server = "localhost";
        $usuario = "root";
        $senha = "";

        $this->con = new mysqli($server, $usuario, $senha, $database);

        if ($this->con->connect_error) {
            die("Erro ao conectar no banco de dados");
        }
    }

    function getCon() {
        return $this->con;
    }

    function __destruct() {
        $this->con->close();
    }

}
