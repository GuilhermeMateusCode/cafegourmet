-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Nov-2018 às 01:52
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--
CREATE DATABASE IF NOT EXISTS `cafe` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `cafe`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `senha`, `data_nasc`, `cpf`, `sexo`, `telefone`, `celular`, `endereco`, `numero`, `complemento`, `cidade`, `estado`, `cep`) VALUES
(1, 'sadf', 'sdafsadf', 'asdfasdfsadf', '2018-11-06', 'dsfasdfsadf', 'sadfsadfsadfsa', 'dasdfasdf', 'sdafxxzcxzxzxc', 'sadfadf', 'dafadsf', NULL, 'dfsdf', 'asdfsad', 'dsafadsfs'),
(2, 'GUILHERME MATEUS PINHEIRO', 'leehbig@gmail.com', 'teste', '1997-12-23', '12376123212', 'masculino', '1120779723', '11997779823', 'Rua Lagos Da Barra 625, Bl 07 Ap 404', '625', 'Bl 07 Ap 404', 'SÃ£o Paulo', 'SP', '08215540'),
(3, 'GUILHERME MATEUS PINHEIRO', 'leehbig@gmail.com', 'teste', '1997-12-23', '12376123212', 'masculino', '1120779723', '11997779823', 'Rua Lagos Da Barra 625, Bl 07 Ap 404', '625', 'Bl 07 Ap 404', 'SÃ£o Paulo', 'SP', '08215540'),
(4, 'Gabriel Alexandre', 'gab@guilherme.com', 'd57f21e6a273781dbf8b7657940f3b03', '1997-12-23', '44757741878', 'masculino', '11111111111', '11111111111', 'Rua Rio Mogi Guaçu, 325, casa frente', '625', 'k', 'Uberlândia', 'MG', '38414-460'),
(5, 'teste', 'teste@teste.com', '698dc19d489c4e4db73e28a713eab07b', '1997-12-23', '49848487487', 'masculino', '11111111111', '11111111111', 'teste', 'teste', 'teste', 'teste', 'PI', 'teste'),
(6, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '1997-12-23', '12376123212', 'masculino', '1120779723', '11222222222', 'Rua Vinte e Quatro de Maio - 291', '21454', 'dsdsf', 'Rio de Janeiro', 'RJ', '20950-085');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
CREATE TABLE IF NOT EXISTS `mensagem` (
  `id_mensagem` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `data_lancamento` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `situacao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id_mensagem`, `nome`, `email`, `mensagem`, `data_lancamento`, `situacao`) VALUES
(1, 'GUILHERME MATEUS PINHEIRO', 'leehbig@gmail.com', 'dcsakdmclkdsamcklçmaçdlsmlkçcmsadlçkcmlkçasmcklsdamcklmadslkcmlksdamcçlkadsmclçksamdclçkmdsaclkmasdlçckmadslkcmlkdsamclçkasmdcçklamsdçclkmadslçcmlaskdmclkadsmclkdsmacklmdsalçcmlasdkçmcçlaskdmcçlsakdmclçadskmcçlaskdmclkasdmckla', NULL, 'Em Aberto'),
(2, 'dfsdfsdfsd', 'sdfasfdas@dsfsdf.com', 'asdfasdfasfsadfasdfasdfasdfdssdfadsfskdjhfjashdjbdsaclsnajdcdsa\r\ncadsçclasdç,cdsac\r\nsdc\r\nsdc\r\nsad', '2018-11-04 22:49:27', 'Em Aberto'),
(3, 'Odair komori', 'leehbig@gmail.com', 'op´[p', '2018-11-06 20:55:12', 'Em Aberto'),
(4, 'teste vai', 'testevai@testevai.com', 'teste vai', '2018-11-16 18:47:42', 'Em Aberto'),
(5, 'teste', 'teste@teste.com', 'sdfadsfasdfasdfasdfdasf', '2018-11-17 02:06:59', 'Em Aberto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produtos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 NOT NULL,
  `preco` float NOT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `visualizacao` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  `nome_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_produtos`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `nome`, `preco`, `marca`, `tipo`, `peso`, `descricao`, `visualizacao`, `data_inicio`, `data_final`, `nome_img`) VALUES
(32, 'Clássico Torrado em Grãos', 71.9, 'ORFEU ', 'Grãos', '1KG ', 'Orfeu Clássico é um café equilibrado de aroma complexo, com notas florais, frutadas e de caramelo. Apresenta doçura elevada, corpo aveludado e acidez equilibrada com finalização persistente e prazerosa.', 6, '2018-11-07', '2018-12-05', 'imagens/foto_2018_310144637_K529JFG9KNNEJ4QKCNECA8NACNHM6.png'),
(34, 'Supremo Arábica', 64.8, 'Supremo Arábica', 'Grãos', '1kg', 'O café vem do Sul de Minas, grãos 100% arábica, a bebida é mole, torração media, aroma intenso, corpo encorpado, sabor intenso', 5, '2018-11-07', '2019-11-07', 'imagens/foto_2018_31015315_JK3D6AQJ4QR29EM56FF8E3K4JDEQJ.png'),
(35, 'Upgraded Café', 114.25, 'Bulletproof', 'Grãos', '340g', 'O café UPGRADED CAFÉ Bulletproof® é feito com os grãos de café da mais alta qualidade, cuidadosamente colhidos na América Central, onde crescem 1250 metros acima do nível do mar, em fazendas familiares. Os grãos de café inteiros Bulletproof® são colhidos manualmente por lavradores de café especializados que escolhem metodicamente as melhores bagas adequadamente amadurecidas.\r\n<br>O café UPGRADED CAFÉ é cuidadosamente preparado para proporcionar um baixo teor tóxico, inferior ao café normal, e manuseado para oferecer os poderosos benefícios de saúde do café, sem os efeitos colaterais negativos. Estes grãos de café inteiros são encorpados, balanceados e ricos, com toques de maçã, frutos vermelhos e baunilha.', 1, '2018-11-07', '2019-01-07', 'imagens/foto_2018_31015859_MBCPACCEQ62HP67J49HRP5C45J4J5.png'),
(33, 'Espresso Gourmet ', 42.77, 'América', 'Grãos', '1Kg ', 'Café excelente e de alta qualidade. Sabor e aroma balanceados pela seleção exclusiva de grãos 100% Arábica. \r\nNotas frutais, achocolatadas e de nozes. \r\nBlend de grãos selecionados para atender aos requisitos de qualidade.', 1, '2018-11-07', '2018-12-10', 'imagens/foto_2018_310145355_BKP9EEK7CR5RAPR82GH4G383QE694.png'),
(31, 'Café Aromatizado Chocolate Trufado', 19.99, 'Baggio', 'Grãos', '250g', 'O nosso Chocolate Trufado remete à nobreza do conhaque, das frutas secas e até das nozes. O Chocolate Trufado provoca sensações que o chocolate sozinho não conseguiria.', 42, '2018-11-07', '2018-12-07', 'imagens/foto_2018_310132742_DDMD8DKQ23BQF4A885G4R4Q62D9J7.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_imagens`
--

DROP TABLE IF EXISTS `tabela_imagens`;
CREATE TABLE IF NOT EXISTS `tabela_imagens` (
  `codigo` int(10) NOT NULL,
  `evento` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `nome_imagem` varchar(25) NOT NULL,
  `tamanho_imagem` varchar(25) NOT NULL,
  `tipo_imagem` varchar(25) NOT NULL,
  `imagem` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
