<?php

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
  Conteudo e links do footer

 */
include 'DataSource.php';
include 'Produto.php';

class ProdutoDAO {

    private $link;

    public function __construct() {
        $this->link = new DataSource('Cafe');
    }

    //função para inserir produto no banco
    public function inserir($obj) {
        $sql = "INSERT INTO `Produtos` (`id_produtos`, `nome`, `preco`, `marca`, `tipo`, `peso`, `descricao`, `visualizacao`, `data_inicio`, `data_final`, `nome_img`) "
                . "VALUES (null, ?, ?, ?, ?, ?, ?, 0, ?, ?, ?)";
        $stm = mysqli_prepare($this->link->getCon(), $sql);

        $nome = $obj->getNome();
        $preco = $obj->getPreco();
        $marca = $obj->getMarca();
        $tipo = $obj->getTipo();
        $peso = $obj->getPeso();
        $descricao = $obj->getDescricao();
        $data_inicio = $obj->getData_inicio();
        $data_final = $obj->getData_final();
        $imagem_grande = $obj->getNome_img();

        $stm->bind_param("sssssssss", $nome, $preco, $marca, $tipo, $peso, $descricao, $data_inicio, $data_final, $imagem_grande);

        $stm->execute();
    }

    //função paraalterar produto nobanco
    public function alterar($obj, $id) {
        $sql = "UPDATE `produtos` SET `nome` = ?, `preco` = ?, `marca` = ?, `tipo` = ?, `peso` = ?, "
                . "`descricao` = ?, `data_inicio` = ?, `data_final` = ?, `nome_img` = ? WHERE `id_produtos` = ?";
        $stm = mysqli_prepare($this->link->getCon(), $sql);

        $nome = $obj->getNome();
        $preco = $obj->getPreco();
        $marca = $obj->getMarca();
        $tipo = $obj->getTipo();
        $peso = $obj->getPeso();
        $descricao = $obj->getDescricao();
        $data_inicio = $obj->getData_inicio();
        $data_final = $obj->getData_final();
        $imagem_grande = $obj->getNome_img();

        $stm->bind_param("sssssssssi", $nome, $preco, $marca, $tipo, $peso, $descricao, $data_inicio, $data_final, $imagem_grande, $id);

        $stm->execute();
    }

    //função para retornar os produtos mais visualizados na index
    public function maisVisualizados() {
        $linkkkks = $this->link->getCon();
        $produtos = "SELECT `id_produtos`,`nome_img`, `nome`, `preco`,`peso` FROM `produtos` ORDER BY `visualizacao` DESC limit 4";
        $resultado = mysqli_query($linkkkks, $produtos);
        if (!$resultado) {
            die("Erro");
        }

        $i = 0;
        while ($linha = mysqli_fetch_array($resultado)) {
            if ($i < 4) {
                $produto = new Produto();
                $produto->setNome(utf8_encode($linha['nome']));
                $produto->setId_produtos($linha['id_produtos']);
                $produto->setPreco($linha['preco']);
                $produto->setPeso($linha['peso']);
                $produto->setNome_img($linha['nome_img']);
                $arrayObjetos[] = $produto;
                $i++;
            }
        }
        return $arrayObjetos;
    }

    public $qtd_produto;
    //função para listar todos os produtos cadastrado no bd
    public function listarProdutos() {
        $linkkkks = $this->link->getCon();
        $produtos = "SELECT `id_produtos`,`nome_img`, `nome`, `preco`,`peso` FROM `produtos` ORDER BY `visualizacao` DESC";
        $resultado = mysqli_query($linkkkks, $produtos);
        if (!$resultado) {
            die("Erro");
        }
        $i = 0;
        while ($linha = mysqli_fetch_array($resultado)) {
            $produto = new Produto();
            $produto->setNome(utf8_encode($linha['nome']));
            $produto->setId_produtos($linha['id_produtos']);
            $produto->setPreco($linha['preco']);
            $produto->setPeso($linha['peso']);
            $produto->setNome_img($linha['nome_img']);
            $arrayObjetos[] = $produto;
            $i++;
        }
        $this->qtd_produto = $i;
        return $arrayObjetos;
    }

    ////função para listar todos os produtos escolhidos no filtro
    public function listarProdutosPreco($preco) {
        $linkkkks = $this->link->getCon();
        if ($preco === 'Grãos') {
            $produtos = "SELECT `id_produtos`,`nome_img`, `nome`, `preco`,`peso` FROM `produtos` WHERE `tipo` = 'Grãos' ORDER BY `visualizacao`";
        } else if ($preco === '< 50') {
            $produtos = "SELECT `id_produtos`,`nome_img`, `nome`, `preco`,`peso` FROM `produtos` WHERE preco < 50 ORDER BY `visualizacao`";
        } else if ($preco === '> 50') {
            $produtos = "SELECT `id_produtos`,`nome_img`, `nome`, `preco`,`peso` FROM `produtos` WHERE preco > 50 and preco < 100 ORDER BY `visualizacao`";
        } else if ($preco === '> 100') {
            $produtos = "SELECT `id_produtos`,`nome_img`, `nome`, `preco`,`peso` FROM `produtos` WHERE preco > 100 ORDER BY `visualizacao`";
        }
        $resultado = mysqli_query($linkkkks, $produtos);
        if (!$resultado) {
            die("Erro");
        }
        $i = 0;
        while ($linha = mysqli_fetch_array($resultado)) {
            $produto = new Produto();
            $produto->setNome(utf8_encode($linha['nome']));
            $produto->setId_produtos($linha['id_produtos']);
            $produto->setPreco($linha['preco']);
            $produto->setPeso($linha['peso']);
            $produto->setNome_img($linha['nome_img']);
            $arrayObjetos[] = $produto;
            $i++;
        }
        $this->qtd_produto = $i;
        return $arrayObjetos;
    }

    //retorna 1 produto em especifíco no produto_ep.php
    public function retornarProduto($id_produto) {
        $produtos = "SELECT `nome`, `preco`, `descricao`, `visualizacao`, `nome_img`,`peso`,`marca`,`tipo`,`data_inicio`,`data_final` FROM `produtos` WHERE `id_produtos` = '" . $id_produto . "'";
        $resultado = mysqli_query($this->link->getCon(), $produtos);
        if (!$resultado) {
            die("Erro");
        }
        $linha = mysqli_fetch_array($resultado);
        $contvisu = $linha['visualizacao'] + 1;

        $this->inserirVisualizacao($contvisu, $id_produto);

        $produto = new Produto();
        $produto->setNome(utf8_encode($linha['nome']));
        $produto->setPreco($linha['preco']);
        $produto->setDescricao(utf8_encode($linha['descricao']));
        $produto->setNome_img($linha['nome_img']);
        $produto->setPeso($linha['peso']);
        $produto->setMarca(utf8_encode($linha['marca']));
        $produto->setTipo(utf8_encode($linha['tipo']));
        $produto->setData_final($linha['data_final']);
        $produto->setData_inicio($linha['data_inicio']);
        $arrayObjetos[] = $produto;

        return $arrayObjetos;
    }

    //função que soma +1 visualização ao produto, é chamada sempre que a função acima retorna um produto
    public function inserirVisualizacao($contvisu, $produto) {
        $sql = "UPDATE `produtos` SET `visualizacao` = ? WHERE `id_produtos`  = ? ";
        $stm = mysqli_prepare($this->link->getCon(), $sql);

        $stm->bind_param("ii", $contvisu, $produto);

        $stm->execute();
    }

    //retorna o produto e seus dados que desejam ser alterados
    public function retornarProdutoAlterar($id_produto) {
        $produtos = "SELECT `nome`, `preco`, `descricao`, `visualizacao`, `nome_img`,`peso`,`marca`,`tipo`,`data_inicio`,`data_final` FROM `produtos` WHERE `id_produtos` = '" . $id_produto . "'";
        $resultado = mysqli_query($this->link->getCon(), $produtos);
        if (!$resultado) {
            die("Erro");
        }
        $linha = mysqli_fetch_array($resultado);

        $produto = new Produto();
        $produto->setNome(utf8_encode($linha['nome']));
        $produto->setPreco($linha['preco']);
        $produto->setDescricao(utf8_encode($linha['descricao']));
        $produto->setNome_img($linha['nome_img']);
        $produto->setPeso($linha['peso']);
        $produto->setMarca(utf8_encode($linha['marca']));
        $produto->setTipo(utf8_encode($linha['tipo']));
        $produto->setData_final($linha['data_final']);
        $produto->setData_inicio($linha['data_inicio']);
        $arrayObjetos[] = $produto;

        return $arrayObjetos;
    }

    //retorna os produtos baseados na suas dade de inicio e final, a solução foi converteras datas para timestamp e compara-lás
    public function retornarProdutosData() {
        $stmt = $this->link->getCon()->query("SELECT `id_produtos`, `nome`,`peso`, `preco`, `marca`, `nome_img`,`data_inicio`,`data_final` FROM `produtos`");

        date_default_timezone_set('America/Sao_Paulo');
        $data_atual = date('Y-m-d');

        $i = 0;
        while ($linha = $stmt->fetch_assoc()) {
            $data_inicial = $linha['data_inicio'];
            $data_final = $linha['data_final'];

            if (strtotime($data_inicial) <= strtotime($data_atual) && strtotime($data_final) >= strtotime($data_atual)) {
                $produto = new Produto();
                $produto->setNome(utf8_encode($linha['nome']));
                $produto->setId_produtos($linha['id_produtos']);
                $produto->setPreco($linha['preco']);
                $produto->setPeso($linha['peso']);
                $produto->setNome_img($linha['nome_img']);
                $produto->setData_inicio($linha['data_inicio']);
                $produto->setData_final($linha['data_final']);

                $arrayObjetosData[] = $produto;
                $i++;
            }
        }
        $this->qtd_produto = $i;
        return $arrayObjetosData;
    }

}