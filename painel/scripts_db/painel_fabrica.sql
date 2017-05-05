-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Maio-2017 às 22:08
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `pal_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`pal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`pal_id`, `pal_nome`, `pal_ra`, `pal_pcr_id`, `pal_pca_id`, `pal_semestre`, `pal_ppe_id`, `pal_pcg_id`, `pal_foto`, `pal_pus_id`, `pal_facebook`, `pal_github`, `pal_linkedin`) VALUES
(1, 'Bianca Arantes', '2214202556', 1, 1, '5 Semestre', 2, NULL, '1494020570590cf1daf0804_1.jpg', 1, 'https://www.facebook.com/bianca.luna.351756', 'https://github.com/BiancaArantes28', 'https://www.linkedin.com/in/bianca-arantes-dos-santos-919744121/?trk=nav_responsive_tab_profile_pic');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `pga_id` int(11) NOT NULL AUTO_INCREMENT,
  `pga_nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pag_pus_id` int(11) NOT NULL,
  PRIMARY KEY (`pga_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`pme_id`, `pme_nome`, `pme_url`, `pme_ptu_id`, `pme_icone`) VALUES
(1, 'Minha conta', 'minhaconta.php', 1, 'fa fa-user'),
(2, 'Depoimento', 'depoimento.php', 1, 'fa fa-comment'),
(3, 'Horário', 'horario.php', 1, 'fa fa-clock-o'),
(4, 'Minha Conta', 'minha-conta-professor.php', 2, 'fa fa-user'),
(5, 'Depoimento', 'depoimento-professor.php', 2, 'fa fa-comment'),
(6, 'Alunos', 'alunos.php', 2, 'fa fa-user');

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
  `pus_foto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pus_habilitado` int(11) NOT NULL,
  PRIMARY KEY (`pus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`pus_id`, `pus_login`, `pus_senha`, `pus_ptu_id`, `pus_foto`, `pus_habilitado`) VALUES
(1, 'biancaarantes28@gmail.com', 'b44e1190aa21eca7ab280fb0d7bdf6a0', 1, '', 1),
(2, 'teste@professor.com', 'b44e1190aa21eca7ab280fb0d7bdf6a0', 2, NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
