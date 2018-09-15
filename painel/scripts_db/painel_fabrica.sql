-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Set-2018 às 16:26
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `painel_fabrica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `pal_id` int(11) NOT NULL,
  `pal_nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pal_ra` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pal_pcr_id` int(11) NOT NULL,
  `pal_pca_id` int(11) NOT NULL,
  `pal_semestre` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pal_ppe_id` int(11) NOT NULL,
  `pal_pcg_id` int(11) DEFAULT NULL,
  `pal_pcu_id` int(11) NOT NULL,
  `pal_foto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pal_pus_id` int(11) NOT NULL,
  `pal_facebook` longtext COLLATE utf8mb4_unicode_ci,
  `pal_github` longtext COLLATE utf8mb4_unicode_ci,
  `pal_linkedin` longtext COLLATE utf8mb4_unicode_ci,
  `pal_habilitado` int(11) DEFAULT NULL,
  `pal_data_ini` date DEFAULT NULL,
  `pal_data_update` date DEFAULT NULL,
  `pal_data_fim` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`pal_id`, `pal_nome`, `pal_ra`, `pal_pcr_id`, `pal_pca_id`, `pal_semestre`, `pal_ppe_id`, `pal_pcg_id`, `pal_pcu_id`, `pal_foto`, `pal_pus_id`, `pal_facebook`, `pal_github`, `pal_linkedin`, `pal_habilitado`, `pal_data_ini`, `pal_data_update`, `pal_data_fim`) VALUES
(4, 'Alexandre Pirolo', '3015106933', 1, 2, '6', 1, NULL, 2, NULL, 12, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(5, 'Arlete Siqueira de Souza', '416101640', 1, 2, '6', 1, NULL, 1, NULL, 13, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(6, 'Alexandre Correia Alves', '2318200853', 1, 1, '1', 1, NULL, 1, NULL, 14, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(7, 'Claudio Diniz Antuned', '3017101805', 1, 2, '4', 1, NULL, 1, NULL, 15, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(8, 'Daniel Lucas Gomes da Silva', '3015203069', 1, 2, '6', 1, NULL, 1, NULL, 16, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(9, 'Davi Queiroz Sobrinho', '416106657', 1, 2, '6', 1, NULL, 1, NULL, 17, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(10, 'Everton de Oliveira', '2515201261', 1, 2, '7', 1, NULL, 1, NULL, 18, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(11, 'Felipe Rodrigues de Mello', '916204478', 1, 2, '5', 1, NULL, 1, NULL, 19, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(12, 'Gabriel Dorneles Pereira da Silva', '2216111920', 1, 1, '1', 1, NULL, 1, NULL, 20, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(13, 'Mayara Rodrigues Souza', '2217112579', 1, 1, '4', 2, NULL, 1, '15358111785b8a9e6a816c4_21.jpg', 21, '', 'https://github.com/maahrodrigues', 'https://www.linkedin.com/in/mayara-rodrigues-92701295/', 1, NULL, '2018-09-01', NULL),
(14, 'George Alan Rufo', '3017101422', 1, 2, '4', 1, NULL, 1, NULL, 22, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(15, 'Guilherme Barbosa Alves', '3018106587', 1, 2, '2', 1, NULL, 1, NULL, 23, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(16, 'Gean Carlos Araújo da Silva', '2216108098', 1, 1, '1', 1, NULL, 1, NULL, 24, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(17, 'Guilherme Silva de Andrade', '917121532', 1, 2, '4', 1, NULL, 1, NULL, 25, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(18, 'Guilherme Sant Ana Fujita', '415108696', 1, 1, '8 ', 2, NULL, 1, NULL, 26, '', '', '', 1, NULL, '2018-09-02', NULL),
(19, 'Jeison Junqueira Rodrigues', '3015104162', 1, 2, '8', 1, NULL, 1, NULL, 27, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(20, 'Jônatas Ferreira Lino', '3016105214', 1, 2, '6', 1, NULL, 1, NULL, 28, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(21, 'Janailson Rocha de sousa', '2213207111', 1, 1, '1', 1, NULL, 1, NULL, 29, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(22, 'Júlio Marques Correa Dias', '2215113593', 1, 1, '1', 1, NULL, 1, NULL, 30, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(23, 'Kelvin Pudimaits Silva', '2215202196', 1, 1, '1', 1, NULL, 1, NULL, 31, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(24, 'Kimberly Costa Almeida', '916207219', 1, 2, '5', 1, NULL, 1, NULL, 32, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(26, 'Luiz Henrique de Oliveira Souza', '917105116', 1, 2, '4', 1, NULL, 1, NULL, 34, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(27, 'Marcos Masahiro Santana Otake', '2215204085', 1, 1, '1', 1, NULL, 1, NULL, 35, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(28, 'Mateus Guedes da Conceição', '2215202730', 1, 1, '1', 1, NULL, 1, NULL, 36, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(30, 'Noemi Ferreira Silva', '416106899', 1, 2, '6', 1, NULL, 1, NULL, 38, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(31, 'Rafael da Silva Marinho', '3017109579', 1, 2, '4', 1, NULL, 1, NULL, 39, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(33, 'Renato Rebouças da Silva', '2217202677', 1, 1, '1', 1, NULL, 1, NULL, 41, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(34, 'Samuel Ribeiro', '916121273', 1, 2, '6', 1, NULL, 1, NULL, 42, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(35, 'Sidney Rodrigues Novais', '3016103917', 1, 2, '6', 1, NULL, 1, NULL, 43, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(36, 'Tatiani Silva', '3016200637', 1, 2, '5', 1, NULL, 1, NULL, 44, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(37, 'Victor Augusto de Andrade Teixeira Monfardini', '916206890', 1, 2, '5', 1, NULL, 1, NULL, 45, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(38, 'Rodolfo dos Santos Pinto', '2215108468', 1, 1, '1', 1, NULL, 1, NULL, 46, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(39, 'Viní­cius Komninakis', '3017108746', 1, 2, '4', 1, NULL, 1, NULL, 47, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(40, 'William Xavier Pereira', '3017109462', 1, 2, '4', 1, NULL, 1, NULL, 48, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(42, 'Jonathan Paulo Souza', '2215111156', 1, 1, '1', 1, NULL, 1, NULL, 50, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(44, 'Luiz Aurélio Araújo Teixeira', '3017109303', 1, 1, '1', 1, NULL, 1, NULL, 52, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(45, 'Felipe Paes de Souza', '3017104726', 2, 1, '1', 1, NULL, 1, NULL, 53, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(46, 'Bianca Arantes Teste', '221411111', 1, 1, '8', 2, NULL, 1, '', 1, '', '', '', 1, NULL, '2018-09-07', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `campus`
--

CREATE TABLE `campus` (
  `pca_id` int(11) NOT NULL,
  `pca_nome` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `campus`
--

INSERT INTO `campus` (`pca_id`, `pca_nome`) VALUES
(1, 'Santo Amaro'),
(2, 'Vila Prudente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `pcr_id` int(11) NOT NULL,
  `pcr_nome` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`pcr_id`, `pcr_nome`) VALUES
(1, 'Programador'),
(2, 'Designer'),
(3, 'Professor'),
(4, 'Líder');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `pcu_id` int(11) NOT NULL,
  `pcu_nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`pcu_id`, `pcu_nome`) VALUES
(1, 'Ciência da Computação'),
(2, 'Sistemas de Informação'),
(3, 'Tecnologia em Análise e Desenvolvimento de Sistemas'),
(4, 'Tecnologia em Banco de Dados'),
(5, 'Tecnologia em Gestão da Tecnologia da Informação'),
(6, 'Tecnologia em Jogos Digitais'),
(7, 'Tecnologia em Redes de Computadores'),
(8, 'Tecnologia em Segurança da Informação'),
(9, 'Tecnologia em Sistemas para Internet');

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimento_aluno`
--

CREATE TABLE `depoimento_aluno` (
  `pda_id` int(11) NOT NULL,
  `pda_texto` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pda_data_inicio` date NOT NULL,
  `pda_data_update` date NOT NULL,
  `pda_pal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `depoimento_aluno`
--

INSERT INTO `depoimento_aluno` (`pda_id`, `pda_texto`, `pda_data_inicio`, `pda_data_update`, `pda_pal_id`) VALUES
(1, 'TESTEEE1111', '2018-09-15', '0000-00-00', 40),
(3, 'TESTE (de novo, tô nervosa)', '2018-09-15', '0000-00-00', 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimento_professor`
--

CREATE TABLE `depoimento_professor` (
  `pdp_id` int(11) NOT NULL,
  `pdp_texto` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pdp_data_inclusao` date NOT NULL,
  `pdp_data_update` date NOT NULL,
  `pdp_prf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `pga_id` int(11) NOT NULL,
  `pga_nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pag_pus_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `pme_id` int(11) NOT NULL,
  `pme_nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pme_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pme_ptu_id` int(11) NOT NULL,
  `pme_icone` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`pme_id`, `pme_nome`, `pme_url`, `pme_ptu_id`, `pme_icone`) VALUES
(1, 'Minha conta', 'minhaconta.php', 1, 'fa fa-user'),
(2, 'Depoimento', 'depoimento.php', 1, 'fa fa-comment'),
(4, 'Minha Conta', 'minha-conta-professor.php', 2, 'fa fa-user'),
(5, 'Depoimento', 'depoimento-professor.php', 2, 'fa fa-comment'),
(6, 'Alunos', 'alunos.php', 2, 'fa fa-user'),
(7, 'Projetos', 'projetos.php', 2, 'fa fa-code'),
(8, 'Professores', 'professores.php', 2, 'fa fa-graduation-cap');

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodo`
--

CREATE TABLE `periodo` (
  `ppe_id` int(11) NOT NULL,
  `ppe_nome` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `periodo`
--

INSERT INTO `periodo` (`ppe_id`, `ppe_nome`) VALUES
(1, 'Diurno'),
(2, 'Noturno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `prf_id` int(11) NOT NULL,
  `prf_nome` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prf_habilitado` int(11) DEFAULT NULL,
  `prf_foto` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prf_pus_id` int(11) DEFAULT NULL,
  `prf_facebook` longtext COLLATE utf8_unicode_ci,
  `prf_github` longtext COLLATE utf8_unicode_ci,
  `prf_linkedin` longtext COLLATE utf8_unicode_ci,
  `prf_data_ini` date DEFAULT NULL,
  `prf_data_update` date DEFAULT NULL,
  `prf_data_fim` date DEFAULT NULL,
  `prf_pcr_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`prf_id`, `prf_nome`, `prf_habilitado`, `prf_foto`, `prf_pus_id`, `prf_facebook`, `prf_github`, `prf_linkedin`, `prf_data_ini`, `prf_data_update`, `prf_data_fim`, `prf_pcr_id`) VALUES
(1, 'Joao teste', 1, '15362845415b91d77d9a75e_2.png', 2, 'teste', 'teste', 'teste', NULL, '2017-06-09', NULL, 3),
(2, 'Huoston Rodrigues Batista ', 1, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(3, 'João Carlos da Silva Souza', 1, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(4, 'Antônio Andrade dos Santos', 1, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(5, 'Daniel Ferreira de Barros Júnior', 1, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(6, 'Gabriel Lara Baptista', 1, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(7, 'Debora Virgilia Canne ', 1, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `prj_id` int(11) NOT NULL,
  `prj_nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `prj_descricao` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prj_data_inicio` date NOT NULL,
  `prj_data_fim` date NOT NULL,
  `prj_tecnologias` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prj_habilitado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `ptu_id` int(11) NOT NULL,
  `ptu_nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `usuario` (
  `pus_id` int(11) NOT NULL,
  `pus_login` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pus_senha` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pus_ptu_id` int(11) NOT NULL,
  `pus_foto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pus_habilitado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`pus_id`, `pus_login`, `pus_senha`, `pus_ptu_id`, `pus_foto`, `pus_habilitado`) VALUES
(1, 'biancaarantes28@gmail.com', 'b44e1190aa21eca7ab280fb0d7bdf6a0', 1, '', 1),
(2, 'teste@professor.com', 'b44e1190aa21eca7ab280fb0d7bdf6a0', 2, NULL, 1),
(6, 'huoston@uni9.pro.br', 'b6118b5c9b886f8a7736c1100949d034', 2, NULL, 1),
(7, 'joao.souza@uni9.pro.br', 'b6118b5c9b886f8a7736c1100949d034', 2, NULL, 1),
(8, 'a.a.s@uni9.pro.br', 'b6118b5c9b886f8a7736c1100949d034', 2, NULL, 1),
(9, 'daniel@uni9.pro.br', 'b6118b5c9b886f8a7736c1100949d034', 2, NULL, 1),
(10, 'gabriel.baptista@uni9.pro.br', 'b6118b5c9b886f8a7736c1100949d034', 2, NULL, 1),
(11, 'debora.canne@uni9.pro.br', 'b6118b5c9b886f8a7736c1100949d034', 2, NULL, 1),
(12, 'alepirolo1895@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(13, 'arietesiqueira@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(14, 'alexandrergp.alves@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(15, 'claudio.diniz.antunes@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(16, 'daniellucascv@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(17, 'davidqs2009@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(18, 'everton_ace@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(19, 'felipe.mello0208@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(20, 'gabrieldorneles09@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(21, 'maahrdg.z@gmail.com', '07ba5176ded03c08669f196c7447f125', 1, NULL, 1),
(22, 'georgealan@uninove.edu.br', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(23, 'guinflames@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(24, 'geancarlos_27@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(25, 'guilherme_gsa@live.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(26, 'fujitaguilherme@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(27, 'jeison@outlook.com.br', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(28, 'jonatas.linoo@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(29, 'janailson100@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(30, 'juliomarques@uninove.edu.br', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(31, 'kelvin_kps@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(32, 'kimberly.designer@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(33, 'luanadl.joh@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(34, 'souza_luiz@live.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(35, 'marcosotake@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(36, 'teuguedes@outlook.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(37, 'meloomatheus@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(38, 'silva.noemi158@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(39, 'rafael.marinho07@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(40, 'lucas-pedrosilva@outlook.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(41, 'renato190698@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(42, 'samuelribeiro9@icloud.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(43, 'sidneyrn3@live.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(44, 'silvatatiani@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(45, 'victor.monfardini@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(46, 'rodolfostopinto@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(47, 'vinikomninakis@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(48, 'williamdzzn@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(49, 'vinifrancasilva@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(50, 'jonathan.paulo.souza@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(51, 'jonathan.paulo.souza@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(52, 'luisaurelio40@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(53, 'felipe.souza-97@hotmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1),
(54, 'biancaarantes28@gmail.com', 'b6118b5c9b886f8a7736c1100949d034', 1, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`pal_id`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`pca_id`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`pcr_id`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`pcu_id`);

--
-- Indexes for table `depoimento_aluno`
--
ALTER TABLE `depoimento_aluno`
  ADD PRIMARY KEY (`pda_id`);

--
-- Indexes for table `depoimento_professor`
--
ALTER TABLE `depoimento_professor`
  ADD PRIMARY KEY (`pdp_id`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`pga_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`pme_id`);

--
-- Indexes for table `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`ppe_id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`prf_id`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`prj_id`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`ptu_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`pus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `pal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `pca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `pcr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `pcu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `depoimento_aluno`
--
ALTER TABLE `depoimento_aluno`
  MODIFY `pda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `depoimento_professor`
--
ALTER TABLE `depoimento_professor`
  MODIFY `pdp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `pga_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `pme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `prf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `prj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `ptu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `pus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
