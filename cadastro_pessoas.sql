-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Fev-2022 às 15:57
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_pessoas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `senha`, `cpf`, `sexo`, `data_nascimento`, `cidade`, `bairro`, `rua`, `numero`, `complemento`) VALUES
(7, 'Popó', '1010', '012.365.221.,m', 'outros', '2022-01-12', 'São Leopoldo', 'Centro', 'mjdghbdf', 3589, 'rua paralela a  rua jhkeaskjld,ao lado do correio.'),
(8, 'Maria Silva', '123', '016.114.590-60', 'feminino', '2022-01-19', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 335, ' ao lado da churrascaria do Pancho.'),
(9, 'madalena', '1112', '111.222.333.44', 'feminino', '1988-03-05', 'São Leopoldo', 'vicentina', 'alfredo das dores', 123, 'Casa Própria na frente da Upa.'),
(10, 'Mateus Silva', '123', '016.114.590-60', 'masculino', '2022-01-20', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 337, 'Casa Própria ao lado da churrascaria do Pancho.'),
(11, 'Mateus Silva', '123', '016.114.590-60', 'masculino', '2022-01-20', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 337, ' lado da churrascaria do Pancho.'),
(12, 'Mateus Silva', '123', '016.114.590-60', 'masculino', '2022-01-20', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 337, 'Casa Própria ao lado da churrascaria do Pancho.'),
(13, 'Mateus Silva', '123', '016.114.590-60', 'masculino', '1955-06-05', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 3369, 'Casa Própria ao lado da churrascaria do Pancho.'),
(14, 'João pereira', '1233', '016.114.590-60', 'masculino', '1982-12-02', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 1, 'Casa Própria ao lado da churrascaria do Pancho.'),
(15, 'João Silva', '112233', '016.114.590-60', 'outros', '1958-05-02', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 2, 'Casa Própria ao lado da churrascaria do Pancho.'),
(16, 'João Silva', '12396', '016.114.590-60', 'outros', '2022-01-11', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 1, 'Casa Própria ao lado da churrascaria do Pancho.'),
(17, 'Mateus Silva', '565', '016.114.590-60', 'feminino', '2022-01-12', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 7, 'Casa Própria na frente da Upa.'),
(18, 'Mateus Silva', '123', '016.114.590-60', 'masculino', '2022-01-26', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 335, 'ao lado da segunda casa azul da rua'),
(19, 'Mateus Silva', '123', 'lkjhfgf', 'masculino', '2022-01-26', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 3355, 'ao lado da segunda casa azul da rua'),
(20, 'Mateus Dutra', '55478', '001.256.190-00', 'masculino', '2022-01-20', 'São Leopoldo', 'feitoria', 'mjdghbdf', 45, 'sdafsdaewd'),
(21, 'Mateus Silva', '123', '016.114.590-60', 'masculino', '2022-01-19', 'São Leopoldo', 'Arroio da Manteiga', 'Rio Paraguaçu', 34534, 'rua paralela a independencia, casa ao lado do correio.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolo`
--

CREATE TABLE `protocolo` (
  `n_protocolo` int(11) NOT NULL,
  `sd_contrib` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_registro` date NOT NULL,
  `prazo` date NOT NULL,
  `sct_contrib` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `protocolo`
--

INSERT INTO `protocolo` (`n_protocolo`, `sd_contrib`, `data_registro`, `prazo`, `sct_contrib`) VALUES
(1, ' Buraco na calçada.', '2022-02-05', '2022-02-15', 'Maria Silva'),
(2, ' estourou um cano de esgoto na rua, e tem um buraco,gostaria de uma urgencia.', '2022-01-01', '2022-02-05', 'Maria'),
(3, ' estourou um cano de esgoto na rua, e tem um buraco,gostaria de uma urgencia.', '2022-01-05', '2022-02-06', 'Maria Silva'),
(4, ' estourou um cano de esgoto na rua, e tem um buraco,gostaria de uma urgencia.', '2022-01-05', '2022-02-02', 'Maria'),
(5, ' Buraco na rua.', '2022-01-05', '2022-02-02', 'Maria');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`n_protocolo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `protocolo`
--
ALTER TABLE `protocolo`
  MODIFY `n_protocolo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
