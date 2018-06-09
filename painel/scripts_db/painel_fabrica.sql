-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jun-2018 às 14:41
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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

INSERT INTO `aluno` (`pal_id`, `pal_nome`, `pal_ra`, `pal_pcr_id`, `pal_pca_id`, `pal_semestre`, `pal_ppe_id`, `pal_pcg_id`, `pal_foto`, `pal_pus_id`, `pal_facebook`, `pal_github`, `pal_linkedin`, `pal_habilitado`, `pal_data_ini`, `pal_data_update`, `pal_data_fim`) VALUES
(1, 'Bianca Arantes', '2214202556', 1, 1, '5 Semestre', 2, NULL, '1494081667590de0831e61a_1.jpg', 1, 'https://www.facebook.com/bianca.luna.351756', 'https://github.com/BiancaArantes28', 'https://www.linkedin.com/in/bianca-arantes-dos-santos-919744121/', 1, '2016-05-12', '2017-05-27', NULL);

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
(2, 'Memorial');

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
(1, 'Programadora'),
(2, 'Design'),
(3, 'Professor');


-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `curso` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `curso`) VALUES
(1, 'Ciencias da Computacao'),
(2, 'Tecnologia da Informacao');

-- --------------------------------------------------------
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
(5, 'Teste 2  dia 29 de setembro', '2017-09-27', '2017-09-29', 1);

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

--
-- Extraindo dados da tabela `depoimento_professor`
--

INSERT INTO `depoimento_professor` (`pdp_id`, `pdp_texto`, `pdp_data_inclusao`, `pdp_data_update`, `pdp_prf_id`) VALUES
(2, 'Testando depoimento do professor alterado\r\n', '2017-09-30', '2018-05-25', 2);

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
(3, 'Horário', 'horario.php', 1, 'fa fa-clock-o'),
(4, 'Minha Conta', 'minha-conta-professor.php', 2, 'fa fa-user'),
(5, 'Depoimento', 'depoimento-professor.php', 2, 'fa fa-comment'),
(6, 'Alunos', 'alunos.php', 2, 'fa fa-user'),
(7, 'Projetos', 'projetos.php', 2, 'fa fa-code'),
(8, 'Professores', 'professores.php', 2, 'fa fa-graduation-cap');

-- --------------------------------------------------------

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
(1, 'Manha'),
(2, 'Noite');

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
(1, 'Joao teste', 1, '149528133859202ebabe5fb_2.png', 2, 'teste', 'teste', 'teste', NULL, '2017-06-09', NULL, 3);

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

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`prj_id`, `prj_nome`, `prj_descricao`, `prj_data_inicio`, `prj_data_fim`, `prj_tecnologias`, `prj_habilitado`) VALUES
(1, 'Site Oficial', 'Teste Site Oficial', '2015-04-30', '0000-00-00', 'PHP, Sublime Text', 1),
(11, 'Cavidade', 'Odonto', '2018-02-24', '0000-00-00', 'Modelagem 3D', 0);

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
(4, 'g@e.com', 'b6118b5c9b886f8a7736c1100949d034', 2, NULL, 1),
(5, 'debora@e.com', 'b6118b5c9b886f8a7736c1100949d034', 2, NULL, 1);

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
  MODIFY `pal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `pca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `pcr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `prf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `prj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `pus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
