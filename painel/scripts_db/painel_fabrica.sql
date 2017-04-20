-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Abr-2017 às 13:03
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `est`
--
CREATE DATABASE IF NOT EXISTS `est` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `est`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`email`, `senha`) VALUES
('biancaarantes28@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');
--
-- Database: `estoque_laravel`
--
CREATE DATABASE IF NOT EXISTS `estoque_laravel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `estoque_laravel`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `back_produtos`
--

DROP TABLE IF EXISTS `back_produtos`;
CREATE TABLE IF NOT EXISTS `back_produtos` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `valor` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `back_produtos`
--

INSERT INTO `back_produtos` (`ID`, `nome`, `valor`, `descricao`, `quantidade`) VALUES
(1, 'Geladeira', '5900.00', 'Side by Side com gelo na porta', 2),
(2, 'FogÃ£o', '950.00', 'Painel automÃ¡tico e forno elÃ©trico', 5),
(3, 'Microondas', '1520.00', 'Manda SMS quando termina de esquentar', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `criado` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `valor`, `descricao`, `quantidade`, `nome`) VALUES
(1, '5900', 'teste', 2, NULL),
(2, '5900.00', 'Side by Side com gelo na porta', 2, 'Geladeira'),
(3, '950.00', 'Painel automático e forno elétrico', 5, 'Fogão'),
(4, '1520.00', 'Manda SMS quando termina de esquentar', 1, 'Microondas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- Database: `financeiro`
--
CREATE DATABASE IF NOT EXISTS `financeiro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `financeiro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'comida'),
(2, 'academia'),
(3, 'faculdade'),
(4, 'supermercado'),
(5, 'transporte'),
(6, 'convênio'),
(7, 'remédio'),
(8, 'eletrônicos'),
(9, 'jogos'),
(10, 'roupas'),
(11, 'presentes'),
(12, 'viagens'),
(13, 'cartão de crédito'),
(14, 'telefone'),
(15, 'passeios'),
(16, 'outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas_credito`
--

DROP TABLE IF EXISTS `despesas_credito`;
CREATE TABLE IF NOT EXISTS `despesas_credito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `local` varchar(255) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `parcelas` varchar(10) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `despesas_credito`
--

INSERT INTO `despesas_credito` (`id`, `nome`, `local`, `valor`, `parcelas`, `data`, `categoria_id`) VALUES
(44, 'Teste', 'SP', 10, '1X', '2016-07-31', 1),
(43, 'Bolsa Nike', 'SP Market', 159.9, '2X', '2016-07-09', 10),
(42, 'T', 'SP', 10, '1X', '2016-07-31', 1),
(41, 'Teste', 'SP', 10, '1X', '2016-07-31', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas_debito`
--

DROP TABLE IF EXISTS `despesas_debito`;
CREATE TABLE IF NOT EXISTS `despesas_debito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `local` varchar(200) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `pagamento` varchar(200) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `despesas_debito`
--

INSERT INTO `despesas_debito` (`id`, `local`, `valor`, `pagamento`, `data`, `categoria_id`, `nome`) VALUES
(18, 'Teste', 10, 'Dinheiro', '2016-07-06', 1, 'Teste'),
(17, 'Teste', 10, 'Dinheiro', '2016-07-07', 1, 'Teste'),
(14, 'SP', 10, 'Dinheiro', '2016-07-31', 1, 'Teste'),
(13, 'SP', 10, 'Dinheiro', '2016-07-31', 1, 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `poupanca`
--

DROP TABLE IF EXISTS `poupanca`;
CREATE TABLE IF NOT EXISTS `poupanca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` float DEFAULT NULL,
  `data` date DEFAULT NULL,
  `rendimentos` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `poupanca`
--

INSERT INTO `poupanca` (`id`, `valor`, `data`, `rendimentos`) VALUES
(76, 15, '2016-07-31', 0),
(75, 5, '2016-07-30', 0),
(74, 5, '2016-07-30', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `salario`
--

DROP TABLE IF EXISTS `salario`;
CREATE TABLE IF NOT EXISTS `salario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` float DEFAULT NULL,
  `data` date DEFAULT NULL,
  `quem` varchar(200) DEFAULT NULL,
  `referente` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salario`
--

INSERT INTO `salario` (`id`, `valor`, `data`, `quem`, `referente`) VALUES
(72, 100, '2016-08-07', 'Teste', 'Teste'),
(71, 10, '2016-07-07', 'Teste', 'Teste'),
(70, 500, '2016-07-07', 'teste', 'teste'),
(69, 600, '2016-07-20', 'InHouse', 'Vale'),
(68, 50, '2016-07-31', 'Meu', 'Teste'),
(66, 640, '2016-07-20', 'InHouse', 'Vale'),
(67, 40, '2016-07-31', 'Teste', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `total_despesas_credito`
--

DROP TABLE IF EXISTS `total_despesas_credito`;
CREATE TABLE IF NOT EXISTS `total_despesas_credito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` float DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `total_despesas_credito`
--

INSERT INTO `total_despesas_credito` (`id`, `total`, `data`) VALUES
(12, 189.9, '2016-07-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `total_despesas_debito`
--

DROP TABLE IF EXISTS `total_despesas_debito`;
CREATE TABLE IF NOT EXISTS `total_despesas_debito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` float DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `total_despesas_debito`
--

INSERT INTO `total_despesas_debito` (`id`, `total`, `data`) VALUES
(14, 40, '2016-07-06'),
(10, 20, '2016-07-31'),
(13, 30, '2016-07-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `total_poupanca`
--

DROP TABLE IF EXISTS `total_poupanca`;
CREATE TABLE IF NOT EXISTS `total_poupanca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` float DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `total_poupanca`
--

INSERT INTO `total_poupanca` (`id`, `total`, `data`) VALUES
(50, 25, '2016-07-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `total_salario`
--

DROP TABLE IF EXISTS `total_salario`;
CREATE TABLE IF NOT EXISTS `total_salario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `total_salario`
--

INSERT INTO `total_salario` (`id`, `data`, `total`) VALUES
(17, '2016-08-07', 1940),
(16, '2016-07-07', 1840),
(15, '2016-07-07', 1830),
(14, '2016-07-20', 1330),
(13, '2016-07-20', 560),
(18, '2016-07-07', 1830),
(19, '2016-07-07', 1830),
(20, '2016-07-07', 1830),
(21, '2016-07-06', 1830);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'biancaarantes28@gmail.com', 'b44e1190aa21eca7ab280fb0d7bdf6a0');
--
-- Database: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'esporte'),
(2, 'escolar'),
(3, 'mobilidade'),
(4, 'guloseimas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `usado` tinyint(1) DEFAULT '0',
  `descricao` text,
  `isbn` varchar(255) DEFAULT NULL,
  `tipoProduto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `categoria_id`, `usado`, `descricao`, `isbn`, `tipoProduto`) VALUES
(124, 'audi A5', '20000.00', 124, 1, 'Testando', NULL, 'LivroFisico'),
(123, 'vestido', '55.00', 123, 0, 'Testando', NULL, 'LivroFisico'),
(110, 'chocolate', '3.00', 4, 0, NULL, NULL, 'LivroFisico'),
(111, 'gelatina de morango', '10.00', 4, 0, NULL, NULL, 'LivroFisico'),
(118, 'bala de chocolate', '1.00', 4, 0, NULL, NULL, 'LivroFisico'),
(119, 'Audi a', '20000.00', 119, 1, '', NULL, 'LivroFisico'),
(128, 'bola d''agua', '10.00', 1, 0, NULL, NULL, 'LivroFisico'),
(129, 'bola d''Ã¡gua', '15.00', 1, 0, NULL, NULL, 'LivroFisico'),
(122, 'pudim de morango', '10.00', 4, 0, NULL, NULL, 'LivroFisico'),
(125, 'classic', '27000.00', 3, 1, NULL, NULL, 'LivroFisico'),
(130, 'Livro de php', '200.00', 2, 0, 'Testando classe Livro', '', 'LivroFisico'),
(131, 'Livro php orientado a objetos', '200.00', 2, 0, NULL, NULL, 'LivroFisico'),
(132, 'Teste', '10.00', 2, 0, 'Testando para ver se o banco funciona!', NULL, 'LivroFisico'),
(133, 'Livro da casa do cÃ³digo', '60.00', 2, 0, 'Livro de PHP da casa do cÃ³digo', NULL, 'LivroFisico'),
(134, 'Livro da casa do cÃ³digo', '60.00', 2, 1, 'Livro da casa do cÃ³digo de PHP avanÃ§ado', NULL, 'LivroFisico'),
(135, 'Livro de PHP', '60.00', 2, 0, 'Ã‰ um livro da casa do cÃ³digo sobre PHP', NULL, 'LivroFisico'),
(136, 'Teste de setter', '60.00', 1, 0, 'Testando o setter preÃ§o', NULL, 'LivroFisico'),
(138, 'Teste de construtor', '60.00', 2, 1, 'Testando o construtor', NULL, 'LivroFisico'),
(139, 'Teste de ProdutoDAO', '60.00', 2, 1, 'Testando o ProdutoDAO alteraÃ§Ã£o', NULL, 'LivroFisico'),
(140, 'Teste', '40.00', 140, 1, 'T', NULL, 'LivroFisico'),
(141, 'Teste', '66.00', 2, 0, 'Testando', NULL, 'LivroFisico'),
(142, 'Teste isbn select', '66.00', 1, 0, 'Testando o isbn', '42142', 'LivroFisico'),
(143, 'Livro get e seter isbn', '65.00', 2, 0, 'Testando isbn e set e get', '119922', 'LivroFisico'),
(144, 'Livro de java', '60.00', 2, 0, 'Ã‰ um livro de java da casa do cÃ³digo', '23421', 'LivroFisico'),
(145, 'Testando altera formulario', '60.00', 1, 0, 'Testando o formulario', '', 'LivroFisico'),
(146, 'Teste in array', '60.00', 1, 0, 'Testando in array', '43214', 'LivroFisico'),
(147, 'Teste in array', '60.00', 1, 0, 'Testando in array', '43214', 'LivroFisico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'biancaarantes28@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'biancaarantes28@gmail.com', 'b44e1190aa21eca7ab280fb0d7bdf6a0');
--
-- Database: `painel`
--
CREATE DATABASE IF NOT EXISTS `painel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `painel`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `instituicao` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `status` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `instituicao`, `status`, `descricao`) VALUES
(2, 'teste form edit', 'teste', 'concluido', 'teste'),
(3, 'teste location edit', 'teste', 'concluido', ''),
(4, 'teste andamento Edit modal', 'teste', 'andamento', ''),
(16, 'cão 6', 'está', 'concluido', ''),
(15, 'cão 5', 'teste', 'concluido', ''),
(17, 'Teste', 'teste', 'concluido', 'teste'),
(18, 'teste mysql', 'Teste', 'concluido', 'testando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

DROP TABLE IF EXISTS `projeto`;
CREATE TABLE IF NOT EXISTS `projeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `data` varchar(40) DEFAULT NULL,
  `software` varchar(200) DEFAULT NULL,
  `cliente` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `data_final` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id`, `nome`, `descricao`, `data`, `software`, `cliente`, `link`, `data_final`) VALUES
(1, 'teste Editar', 'Testando', '02/2017', 'teste', 'testando', 'teste.com', 'atual'),
(2, 'Teste adicionar', 'testando', '02/2017', 'netbeand', 'teste', 'teste.com', 'Atual'),
(3, 'Teste add', 'testando', '02/2017', 'Xampp', 'Teste', 'teste.com', 'Atual');

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto`
--

DROP TABLE IF EXISTS `texto`;
CREATE TABLE IF NOT EXISTS `texto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` longtext,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `texto`
--

INSERT INTO `texto` (`id`, `texto`, `id_usuario`) VALUES
(1, '<p>Olá, seja bem-vindo ao meu site! Eu sou a Bianca Arantes dos Santos e curso Ciência da Computação na <a target="_blank" href="http://www.uninove.br/">Uninove</a>. Atualmente, estou estagiando na <a target="_blank" href="http://www.inhouse.com.br/pt/">InHouse Contact Center e Tecnologia da Informação</a> como estagiária em programadora web, cujas tarefas são:\n<ul style="list-style:none;">\n<li>Estruturação de páginas web através de HTML5, CSS3, JavaScript, BootStrap, JQuery e JQuery Mobile;</li>\n<li>Desenvolvimento de páginas web através de PHP (POO);</li>\n</ul>teste,teste,teste.teste\n</p>', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `foto`) VALUES
(1, 'Bianca Arantes', 'biancaarantes28@gmail.com', '9c1bbcd902a92174a2b3499ebde6e062', '148750809458a9927e6e705.jpg');
--
-- Database: `painel_fabrica`
--
CREATE DATABASE IF NOT EXISTS `painel_fabrica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `painel_fabrica`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `pme_id` int(11) NOT NULL AUTO_INCREMENT,
  `pme_nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pme_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pme_ptu_id` int(11) NOT NULL,
  `pme_icone` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pme_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`pme_id`, `pme_nome`, `pme_url`, `pme_ptu_id`, `pme_icone`) VALUES
(1, 'Minha conta', 'minhaconta.php', 1, 'fa fa-user'),
(2, 'Depoimento', 'depoimento.php', 1, 'fa fa-comment'),
(3, 'Horário', 'horario.php', 1, 'fa fa-clock-o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `ptu_id` int(11) NOT NULL AUTO_INCREMENT,
  `ptu_nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ptu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`ptu_id`, `ptu_nome`) VALUES
(1, 'Aluno'),
(2, 'Professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `pus_id` int(11) NOT NULL AUTO_INCREMENT,
  `pus_login` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pus_senha` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pus_ptu_id` int(11) NOT NULL,
  PRIMARY KEY (`pus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
--
-- Database: `teste`
--
CREATE DATABASE IF NOT EXISTS `teste` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtoteste`
--

DROP TABLE IF EXISTS `produtoteste`;
CREATE TABLE IF NOT EXISTS `produtoteste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtoteste`
--

INSERT INTO `produtoteste` (`id`, `nome`, `preco`) VALUES
(1, 'carro', '10000.00'),
(2, 'teste', '10.00'),
(3, 'livro php', '250.00');
--
-- Database: `udemy`
--
CREATE DATABASE IF NOT EXISTS `udemy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `udemy`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `descricao` varchar(30) DEFAULT NULL,
  `preco` varchar(30) DEFAULT NULL,
  `quantidade` varchar(30) DEFAULT NULL,
  `imagem` varchar(30) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `quantidade`, `imagem`, `data`) VALUES
(1, 'camera', 'camera digital', '150', '5', 'imagem02.jpg', NULL),
(2, 'notebook', 'notebook samsung', '1500', '10', 'imagem03.jpg', NULL),
(3, 'Bicicleta', 'bicicleta aro 18', '150', '10', 'imagem03.jpg', NULL);
--
-- Database: `udemy_laravel`
--
CREATE DATABASE IF NOT EXISTS `udemy_laravel` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `udemy_laravel`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_03_10_215038_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'First Post Changed', 'Content of my first content', '2017-03-24 00:31:07', '2017-03-24 00:35:55'),
(2, 'Sec Post', 'Sec Post', '2017-03-24 00:33:46', '2017-03-24 00:33:46'),
(3, 'terceiro post', 'Conteudo do terceiro post', '2017-03-24 00:42:51', '2017-03-24 00:42:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
