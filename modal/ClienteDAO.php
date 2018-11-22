<?php

include_once 'DataSource.php';
include_once 'Cliente.php';

class ClienteDAO {
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
    
    //insere um cliente no bd
    public function inserir($obj) {
        $sql = "INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `senha`, `data_nasc`, `cpf`, `sexo`, `telefone`, `celular`, `endereco`, `numero`, `complemento`, `cidade`, `estado`, `cep`, `nivel_user`) "
                . "VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,0)";

        $stm = mysqli_prepare($this->link->getCon(), $sql);

        $nome = $obj->getNome();
        $email = $obj->getEmail();
        $senha = $obj->getSenha();
        $data = $obj->getData_nasc();
        $cpf = $obj->getCpf();
        $sexo = $obj->getSexo();
        $telefone = $obj->getTelefone();
        $celular = $obj->getCelular();
        $endereco = $obj->getEndereco();
        $numero = $obj->getNumero();
        $complemento = $obj->getComplemento();
        $cidade = $obj->getCidade();
        $estado = $obj->getEstado();
        $cep = $obj->getCep();

        $stm->bind_param("ssssssssssssss", $nome, $email, $senha, $data, $cpf, $sexo, $telefone, $celular, $endereco, $numero, $complemento, $cidade, $estado, $cep);

        $stm->execute();
    }

    //altera os dados do cliente
    public function alterar($obj, $id) {
        $sql = "UPDATE `clientes` SET `nome` = ?, `email` = ?, `data_nasc` = ?, `cpf` = ?, `sexo` = ?, `telefone` = ?, `celular` = ?, `endereco` = ?, `numero` = ?, `complemento` = ?, `cidade` = ?,`estado` = ?, `cep` = ? WHERE `clientes`.`id_cliente` = ?";

        $stm = mysqli_prepare($this->link->getCon(), $sql);

        $nome = $obj->getNome();
        $email = $obj->getEmail();
        //$senha = $obj->getSenha();
        $data = $obj->getData_nasc();
        $cpf = $obj->getCpf();
        $sexo = $obj->getSexo();
        $telefone = $obj->getTelefone();
        $celular = $obj->getCelular();
        $endereco = $obj->getEndereco();
        $numero = $obj->getNumero();
        $complemento = $obj->getComplemento();
        $cidade = $obj->getCidade();
        $estado = $obj->getEstado();
        $cep = $obj->getCep();

        $stm->bind_param("ssssssssssssss", $nome, $email, $data, $cpf, $sexo, $telefone, $celular, $endereco, $numero, $complemento, $cidade, $estado, $cep, $id);

        $stm->execute();
    }

    //retorna um obj cliente para seu usado na função acima
    public function retornarCliente($id_produto) {
        $produtos = "SELECT * FROM `clientes` WHERE `id_cliente` = '" . $id_produto . "'";
        $resultado = mysqli_query($this->link->getCon(), $produtos);
        if (!$resultado) {
            die("Erro");
        }
        $linha = mysqli_fetch_array($resultado);

        $cliente = new Cliente();
        $cliente->setNome(utf8_encode($linha['nome']));
        $cliente->setEmail($linha['email']);
        $cliente->setData_nasc($linha['data_nasc']);
        $cliente->setCpf($linha['cpf']);
        $cliente->setSexo($linha['sexo']);
        $cliente->setTelefone($linha['telefone']);
        $cliente->setCelular($linha['celular']);
        $cliente->setEndereco(utf8_encode($linha['endereco']));
        $cliente->setNumero($linha['numero']);
        $cliente->setComplemento(utf8_encode($linha['complemento']));
        $cliente->setCidade(utf8_encode($linha['cidade']));
        $cliente->setEstado($linha['estado']);
        $cliente->setCep($linha['cep']);

        $arrayObjetos[] = $cliente;

        return $arrayObjetos;
    }

    //válida o login
    public function validarLogin($usuario, $senha) {
        $produtos = "SELECT `id_cliente`,`nome`, `email`, `senha` FROM `clientes` WHERE `email` = '" . $usuario . "' and `senha` = '" . $senha . "'";
        $resultado = mysqli_query($this->link->getCon(), $produtos);
        if (!$resultado) {
            die("Erro");
        }
        $qtdLinhas = mysqli_num_rows($resultado);

        if ($qtdLinhas === 1) {
            $linha = mysqli_fetch_array($resultado);
            session_start();
            $_SESSION['id'] = $linha['id_cliente'];
            return utf8_encode($linha['nome']);
        } else {
            return 'Usuário ou senha errados';
        }
    }

    //válida a senha para qunado o usuario que esta logado queira mudar a senha
    public function validarSenha($id, $senhaAntiga, $novaSenha) {
        $produtos = "SELECT `nome` FROM `clientes` WHERE `id_cliente` = '" . $id . "' and `senha` = '" . $senhaAntiga . "'";
        $resultado = mysqli_query($this->link->getCon(), $produtos);
        if (!$resultado) {
            die("Erro");
        }
        $qtdLinhas = mysqli_num_rows($resultado);

        if ($qtdLinhas === 1) {

            $sql = "Update `clientes` SET `senha` = ? WHERE `id_cliente` = '" . $id . "'";
            $stm = mysqli_prepare($this->link->getCon(), $sql);
            $stm->bind_param("s", $novaSenha);
            $stm->execute();
            return 'Senha Alterada';
        } else {
            return 'Senha Atual errada';
        }
    }

    //válida email para quando o usuário esqueceu a senha
    public function validarEmail($email) {
        $produtos = "SELECT `id_cliente` FROM `clientes` WHERE `email` = '" . $email . "'";
        $resultado = mysqli_query($this->link->getCon(), $produtos);
        if (!$resultado) {
            die("Erro");
        }
        $qtdLinhas = mysqli_num_rows($resultado);

        if ($qtdLinhas === 1) {
            $linha = mysqli_fetch_array($resultado);
            session_start();
            $_SESSION['id_temporario'] = $linha['id_cliente'];
            return $_SESSION['id_temporario'];
        } else {
            return 'Email não enontrado';
        }
    }

    //altera a senha para quando o usuário esqueceu a senha
    public function alterarSenha($id, $novaSenha) {
        $sql = "Update `clientes` SET `senha` = ? WHERE `id_cliente` = '" . $id . "'";
        $stm = mysqli_prepare($this->link->getCon(), $sql);
        $stm->bind_param("s", $novaSenha);
        $stm->execute();
        return 'Senha Alterada';
    }

}
