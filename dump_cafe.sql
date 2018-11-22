-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22-Nov-2018 às 01:10
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
  `nivel_user` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `senha`, `data_nasc`, `cpf`, `sexo`, `telefone`, `celular`, `endereco`, `numero`, `complemento`, `cidade`, `estado`, `cep`, `nivel_user`) VALUES
(1, 'sadf', 'sdafsadf', 'bfb7705e28109bb58b4c2964af62fc8f', '2018-11-06', 'dsfasdfsadf', 'masculino', 'dasdfasdf', 'sdafxxzcxzxzxc', 'sadfadf', 'dafadsf', NULL, 'dfsdf', 'asdfsad', 'dsafadsfs', 0),
(2, 'GUILHERME MATEUS PINHEIRO', 'leehbig@gmail.com', '7815696ecbf1c96e6894b779456d330e', '1997-12-23', '12376123212', 'masculino', '1120779723', '11997779823', 'Rua Lagos Da Barra 625, Bl 07 Ap 404', '625', 'Bl 07 Ap 404', 'SÃ£o Paulo', 'SP', '08215540', 0),
(3, 'Leo', 'leonardo@leo.com', 'bfb7705e28109bb58b4c2964af62fc8f', '1997-12-01', '111111', 'feminino', '11111111111111111', '111111111', 'sdfsadfdsafsa', 'asdf', 'dsafasdfsad', 'sadfsadfsa', 'SP', 'safsadsf', 0),
(4, 'Gabriel Alexandre', 'gab@guilherme.com', 'f53b02765b2941d3d16487b10ce678cd', '1997-12-23', '44757741878', 'masculino', '11111111111', '11111111111', 'Rua Rio Mogi Guaçu, 325, casa frente', '625', 'k', 'Uberlândia', 'MG', '38414-460', 0),
(5, 'meu deus', 'teste@teste.com', '698dc19d489c4e4db73e28a713eab07b', '2018-11-12', 'meu deus', 'Masculino', 'meu deus', 'meu deus', 'meu deus', 'meu deus', 'meu deus', 'meu deus', 'RN', 'meu deus', 0),
(6, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '1997-12-23', '12376123212', 'masculino', '1120779723', '11222222222', 'Rua Vinte e Quatro de Maio - 291', '21454', 'dsdsf', 'Rio de Janeiro', 'RJ', '20950-085', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id_mensagem`, `nome`, `email`, `mensagem`, `data_lancamento`, `situacao`) VALUES
(6, 'Guilherme', 'teste@teste.com', 'Olá, Bom dia!\r\n\r\nNão estou conseguindo comprar.', '2018-11-21 18:16:10', 'Em Aberto');

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
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `nome`, `preco`, `marca`, `tipo`, `peso`, `descricao`, `visualizacao`, `data_inicio`, `data_final`, `nome_img`) VALUES
(32, 'Clássico Torrado em Grãos', 71.9, 'ORFEU ', 'Grãos', '1KG ', 'Orfeu Clássico é um café equilibrado de aroma complexo, com notas florais, frutadas e de caramelo. Apresenta doçura elevada, corpo aveludado e acidez equilibrada com finalização persistente e prazerosa.', 35, '2018-11-21', '2018-11-28', 'imagens/foto_2018_310144637_K529JFG9KNNEJ4QKCNECA8NACNHM6.png'),
(34, 'Supremo Arábica', 64.8, 'Supremo Arábica', 'Grãos', '1kg', 'O café vem do Sul de Minas, grãos 100% arábica, a bebida é mole, torração media, aroma intenso, corpo encorpado, sabor intenso', 6, '2018-11-22', '2019-11-29', 'imagens/foto_2018_31015315_JK3D6AQJ4QR29EM56FF8E3K4JDEQJ.png'),
(35, 'Upgraded Café', 114.25, 'Bulletproof', 'Grãos', '340g', 'O café UPGRADED CAFÉ Bulletproof® é feito com os grãos de café da mais alta qualidade, cuidadosamente colhidos na América Central, onde crescem 1250 metros acima do nível do mar, em fazendas familiares. Os grãos de café inteiros Bulletproof® são colhidos manualmente por lavradores de café especializados que escolhem metodicamente as melhores bagas adequadamente amadurecidas.\r\n<br>O café UPGRADED CAFÉ é cuidadosamente preparado para proporcionar um baixo teor tóxico, inferior ao café normal, e manuseado para oferecer os poderosos benefícios de saúde do café, sem os efeitos colaterais negativos. Estes grãos de café inteiros são encorpados, balanceados e ricos, com toques de maçã, frutos vermelhos e baunilha.', 15, '2018-11-23', '2018-11-30', 'imagens/foto_2018_31015859_MBCPACCEQ62HP67J49HRP5C45J4J5.png'),
(33, 'Espresso Gourmet ', 42.77, 'América', 'Grãos', '1Kg ', 'Café excelente e de alta qualidade. Sabor e aroma balanceados pela seleção exclusiva de grãos 100% Arábica. \r\nNotas frutais, achocolatadas e de nozes. \r\nBlend de grãos selecionados para atender aos requisitos de qualidade.', 1, '2018-11-26', '2018-12-03', 'imagens/foto_2018_310145355_BKP9EEK7CR5RAPR82GH4G383QE694.png'),
(31, 'Café Aromatizado Chocolate Trufado', 19.99, 'Baggio', 'Grãos', '250g', 'O nosso Chocolate Trufado remete à nobreza do conhaque, das frutas secas e até das nozes. O Chocolate Trufado provoca sensações que o chocolate sozinho não conseguiria.', 44, '2018-11-30', '2018-12-07', 'imagens/foto_2018_310132742_DDMD8DKQ23BQF4A885G4R4Q62D9J7.png'),
(39, 'CAFÉ L\'OR TORRADO E MOÍDO ', 18.9, 'L\'OR', 'Café - Grãos', '250G', 'Uma bebida intensa e encorpada de baixa acidez, com aroma acentuado e notas de chocolate amargo. Os cafés L\'OR da linha torrado e moído possuem ponto de torra acentuado, com processo de moagem fino e uniforme, garantindo um sabor único. Conheça!\r\n\r\n', 0, '2018-12-01', '2018-12-08', 'imagens/foto_2018_323232355_EQP5JFNQD4PFRFNP3ACQ7DJ6CMC4J.PNG'),
(42, 'Café Orgânico', 29.99, 'Café Cultura', 'Café - Grãos', '250g', 'Plantado a 1100 metros de altitude, nosso café orgânico é cultivado somente com adubos naturais, colhido manualmente, selecionado pelo processo cereja descascado e secado no terreiro suspenso por estufas.\r\n\r\nCorpo médio, acidez sutil e doce, com notas de caramelo e chocolate.\r\n\r\nVARIEDADE: CATUAI\r\nPROCESSO: CEREJA DESCASCADO/NATURAL\r\nALTITUDE: 1000m\r\nSAFRA: 2017-2018\r\nCARACTERÍSTICAS: CARAMELO, FRUTADO, DELICADO.\r\nREGIÃO: ESPIRITO SANTO\r\nTORRA: MÉDIA +\r\n', 0, '2018-11-21', '2018-11-23', 'imagens/foto_2018_324213528_8JH6BJGDQ3BC2MBEACB43EA99M83E.jpg'),
(43, 'Café Tradicional ', 10.99, 'América', 'Cafe em Graos', '500g', 'Descrição do Produto\r\nInformações: \r\nCafé Tradicional América\r\n\r\nCafé de blend especial, cuidadosamente torrado e moído, conferindo constante e harmonioso sabor, agradável ao mais exigente paladar. \r\nOriginário das melhores regiões produtoras.\r\n\r\nEspecificações:\r\n\r\nCafé Tradicional\r\nPeso: 500g\r\nContém: 1 unidade', 0, '2018-11-21', '2018-11-28', 'imagens/foto_2018_324222842_NF5FR2PBG83D8JM77K9MPBJRJ754A.jpg'),
(44, 'Café Tradicional Caboclo', 59.99, 'Caboclo', 'Café - Grãos', '500g', 'Informações: \r\nO café Caboclo Tradicional é o autêntico café da fazenda, com o aroma dos grãos colhidos na hora. São mais de 80 anos de tradição em 500g gramas de café com o verdadeiro sabor do campo. Moído e torrado, o Café em pó Caboclo resulta em uma Xícara ideal para qualquer momento do dia.\r\n\r\nVeja as especificações do café Caboclo: \r\n\r\nMarca: Caboclo \r\nTipo de Café: Moído \r\nEmbalagem: À vácuo \r\nQuantidade: 500g', 1, '2018-11-22', '2018-11-24', 'imagens/foto_2018_324223418_QRN5PQ627C3R6FCHPKQG7GQDPH6BP.jpg'),
(45, 'Café do Centro Gourmet', 52.2, 'Café do Centro', 'Café - Grãos', '1kg', 'Sacos de 1kg de Cafe do Centro Gourmet:\r\nO Café do Centro Gourmet é um café de bebida suave e intenso aroma de caramelo tostado. Este blend especial é fruto da nossa incansável busca por selecionar os melhores grãos arábica das regiões Alta Mogiana (SP) e Cerrado Mineiro (MG) acompanhado do nosso rigoroso processo de torra.\r\n\r\n \r\n\r\nORIGEM: Alta Mogiana e Cerrado\r\n\r\n \r\n\r\nESPÉCIE: 100% Arábica\r\n\r\n \r\n\r\nGRÃO: Tipo 2\r\n\r\n \r\n\r\nPENEIRA: 17/18\r\n\r\n \r\n\r\nBEBIDA: Estritamente \"Mole\" (Suave e Doce)\r\n\r\n \r\n\r\nEMBALAGEM: Disponível em embalagens de 1Kg.\r\n\r\n \r\n\r\nFABRICANTE: Café do Centro', 1, '2018-11-24', '2018-11-30', 'imagens/foto_2018_324223747_MGC48E29QMPFDRKEHQ4BE85Q9J2E3.jpg'),
(46, 'CAFÉ TORRADO EM GRÃOS ORGÂNICO', 19.99, 'TERRARA', 'Café - Grãos', '250G', 'Café Gourmet Orgânico em grãos cultivado e torrado dentro dos exigentes padrões Demeter da agricultura biodinâmica.', 1, '2018-11-28', '2018-12-02', 'imagens/foto_2018_32422391_D8CFCQ5PE8KJBDDEJQ2PG75Q4GE67.jpg'),
(47, 'Café em Grãos Santa Monica Gourmet', 59.99, ' Santa Monica', 'Café - Grãos', '1kg', 'De uma das regiões produtoras mais nobres do Brasil, o Café Santa Monica é um café 100% Arábica e ideal para máquina de café espresso. O espresso produzido tem baixo amargor e baixa acidez, com doçura natural.\r\n\r\nDisponível em embalagens de 1Kg.:\r\n\r\n \r\n\r\nFabricante:\r\n\r\nCAFÉ SANTA MONICA', 0, '2018-11-19', '2018-11-26', 'imagens/foto_2018_324224243_FB6JE23EHDBD385N27D53K7GAHBHD.PNG'),
(48, 'Caramelito', 1.99, 'Nespresso ', 'cápsulas ', '1U', 'COM AROMA DE CARAMELO\r\nO aroma adocicado do caramelo suaviza as notas de torrado do café do Grand Cru Livanto. Este delicado casamento gastronômico evoca a cremosidade do toffee macio.\r\n\r\nAs cápsulas de café Nespresso são vendidas em embalagens com 10 cápsulas da mesma variedades.', 1, '2018-11-21', '2018-11-23', 'imagens/foto_2018_324224824_J92M8JK96D7PJRMD7A9APM7E8JE9D.PNG'),
(49, 'Master Origin Indonesia', 2.99, 'Nespresso', 'cápsulas ', '1U', 'No norte de Sumatra, os produtores locais aperfeiçoaram a arte de descascamento na água devido ao clima úmido atípico, criando um café totalmente diferente.\r\n\r\nPara criar nosso próprio padrão, escolhemos uma das melhores regiões para cultivo de Arábica e ajudamos a organizar uma cooperativa de agricultores para preservar a qualidade dos grãos. E o resultado foi... Um café encorpado e amadeirado, totalmente exótico.', 8, '2018-11-23', '2018-11-28', 'imagens/foto_2018_324225757_7FE7NJ9ENCJ66C25R2HKQ4NRD83JQ.PNG'),
(50, 'ESPRESSO BARISTA', 4.99, 'Nescafé Dolcegusto', 'cápsulas ', '1U', 'Café de alta torrefação de seus grãos Arábicas e Robusta, aroma aveludado e crema generosa, estilo café italiano. Rico e equilibrado com notas de chocolate e sabor requintado. Para aqueles que entendem e apreciam um bom café.', 30, '2018-11-14', '2018-11-22', 'imagens/foto_2018_32423012_B9D9266BMN2FD3FE6R5GJJ558PD74.png'),
(51, 'Café em Grãos Prima Qualità', 149.99, 'Cooxupe', 'Café - Grãos', '1kg', 'Cafe em Grão Prima Qualità 100% Arábica - Saco de 1Kg\r\nElaborado a partir de rigorosa seleção dos melhores e mais perfeitos grãos de café produzidos no Sul de Minas e no Cerrado Mineiro e atendendo os mais exigentes padrões do mercado europeu, o café Prima Qualità Espresso é um produto classificado como ?Gourmet?, digno de ser apreciado pelos mais requintados paladares.\r\nORIGEM: Sul de Minas e Cerrado\r\nESPÉCIE: 100% Arábica\r\nTORRA: Clara\r\nPENEIRA: 16\r\nBEBIDA: Mole (Suave e Doce)\r\nEMBALAGEM: Disponível em embalagens de 1Kg.\r\nFABRICANTE: Torrefação Cooxupé', 1, '2018-11-21', '2018-11-21', 'imagens/foto_2018_32423944_MCJGEQJQ29G3KFJCNGB3MKE53Q7EF.PNG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
