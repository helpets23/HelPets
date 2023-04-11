-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Abr-2023 às 22:44
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animaizinho`
--

CREATE TABLE `animaizinho` (
  `id` int(5) NOT NULL,
  `nome` varchar(10) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `idade` varchar(25) NOT NULL,
  `porte` varchar(10) NOT NULL,
  `peso` varchar(15) NOT NULL,
  `local` varchar(50) NOT NULL,
  `vacina_dia` varchar(3) NOT NULL,
  `doença` varchar(3) NOT NULL,
  `descrição` text NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `Raca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `animaizinho`
--

INSERT INTO `animaizinho` (`id`, `nome`, `sexo`, `idade`, `porte`, `peso`, `local`, `vacina_dia`, `doença`, `descrição`, `img`, `Raca`) VALUES
(3, 'CachorroCa', 'M', '11', 'Maior Que ', '100Kl', 'Minha casa', 'Sim', 'sim', '', 'WhatsApp Image 2022-12-19 at 21.55.30.jpeg', ''),
(4, 'sadsa', 'F', '10 anos', 'seguro', '11 kl', 'Rua maria jose', 'Sim', 'sim', '', 'WhatsApp Image 2022-12-19 at 21.56.40.jpeg', 'Gato'),
(5, '', '', '', '', '', '', 'Sim', 'sim', '', '2022-09-26.png', ''),
(6, 'Belinha', 'F', '17 anos', 'grande', '45k', 'Rua Tarcisio pacheco n 84', 'Sim', 'sim', '', 'WhatsApp Image 2022-08-01 at 15.03.08.jpeg', 'Gata'),
(7, '', '', '', '', '', '', 'Sim', 'sim', '', 'WhatsApp Image 2022-08-01 at 15.03.08.jpeg', ''),
(8, 'ugdgig', '', '', '', '', '', 'Sim', 'sim', '', 'WhatsApp Image 2022-08-01 at 15.03.08.jpeg', ''),
(9, '', '', '', '', '', '', 'Sim', 'sim', '', 'WhatsApp Image 2022-08-01 at 15.03.08.jpeg', ''),
(10, '', '', '', '', '', '', 'Sim', 'sim', '', '', ''),
(11, 'Gata', '', '', '', '', '', 'Sim', 'sim', '', 'WhatsApp Image 2022-08-01 at 15.03.08.jpeg', '2'),
(12, '', '', '', '', '', '', 'Sim', 'sim', '', 'desenho orca.PNG', ''),
(13, 'frida', 'f', '1', 'medio', '5k', 'bh', 'Sim', 'sim', '', 'luiz.png', 'angora'),
(14, '', '', '', '', '', '', 'Sim', 'sim', '', '', ''),
(15, '', '', '', '', '', '', 'Sim', 'sim', '', '', ''),
(16, '', '', '', '', '', '', 'Sim', 'sim', '', '', ''),
(17, '', '', '', '', '', '', 'Sim', 'sim', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(20) NOT NULL,
  `outgoing_msg_id` int(20) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1355528892, 540715985, 'oi'),
(2, 1355528892, 540715985, 'tudo bem?'),
(3, 126546628, 540715985, 'oi'),
(4, 540715985, 126546628, 'ola'),
(5, 540715985, 126546628, 'como vai'),
(6, 540715985, 540715985, 'bem e vc'),
(7, 126546628, 540715985, 'bem'),
(8, 540715985, 126546628, 'que bom'),
(9, 540715985, 126546628, 'kkkkkkkkkkkkkkkk'),
(10, 126546628, 540715985, 'kkkkkkkkkkkkkkkkkk legal'),
(11, 126546628, 540715985, 'bbbb'),
(12, 540715985, 126546628, 'blz c'),
(13, 540715985, 126546628, 'vei?'),
(14, 540715985, 126546628, 'kjwlkedfnerf'),
(15, 540715985, 126546628, 'dss'),
(16, 540715985, 126546628, 'oie'),
(17, 126546628, 540715985, 'blz'),
(18, 126546628, 540715985, 'cmm vai vei'),
(19, 1071962950, 126546628, 'oi'),
(20, 126546628, 1071962950, 'blz cara'),
(21, 1071962950, 126546628, 'ss'),
(22, 126546628, 1071962950, 'oi'),
(23, 1071962950, 126546628, 'muju'),
(24, 126546628, 1071962950, 'ngf'),
(25, 126546628, 1071962950, 'hhh'),
(26, 1071962950, 126546628, 'ola'),
(27, 1071962950, 126546628, 'ta bem ai'),
(28, 1127268651, 126546628, 'wkfjds'),
(29, 1127268651, 126546628, 'dgdkskdsg'),
(30, 1127268651, 126546628, 'dgkgfdçkjfgd'),
(31, 1127268651, 126546628, 'grsjlfsgklgs4fsg]'),
(32, 1127268651, 126546628, 'grdkjfg'),
(33, 1127268651, 126546628, 'fdg'),
(34, 1127268651, 126546628, 'd'),
(35, 1127268651, 126546628, 'd'),
(36, 1127268651, 126546628, 'd'),
(37, 1127268651, 126546628, 'd'),
(38, 1127268651, 126546628, 'd'),
(39, 1127268651, 126546628, 'd'),
(40, 1127268651, 126546628, 'd'),
(41, 540715985, 126546628, 'A'),
(42, 1127268651, 126546628, 'sdasdsadasd'),
(43, 540715985, 903618933, 'io');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(6, 540715985, 'zoro', 'orco', 'zoroorco@gmail.com', '$2y$10$NEJY8JXIp2h.HbqHkpluk.XUQlVrf7WcOByHjloqZZZgOcHQvJrZ6', '1680545508zoro.jpg', ' Ativo agora '),
(7, 126546628, 'Zé', 'DoPagode', 'isaacabreu499@gmail.com', '$2y$10$K3sjggCIQbfZo20QUGS5buqH8grYAPn8KIvJvcrnFpHY6gNOjAx0m', '1680545896Guts-1-576x1024.jpg', 'Off-line agora'),
(12, 1127268651, 'Abner', 'Almeida', 'abneralmeidabh18@gmail.com', '$2y$10$Vpkg/gOJyJsbLFm0wgpCAOgWZD662s9v7V.1/N5i7B88FWg4ZqZLC', '1680635025abner.jpg', 'Off-line agora'),
(13, 1071962950, 'Isabelly', 'Biet', 'isabellybiet03@gmail.com', '$2y$10$c8X59A/mZV4m9BQ9jNjQnuY6iaZwJpgWa0cGfGDNgSMnB707pOVx2', '1680699033marrom.png', 'Off-line agora'),
(14, 1110066752, 'goku', 'chan', 'goku1@gmail.com', '$2y$10$W8InjImijCd6SriTBG5exOpGCQPdVM0hOoXY4/WI5mwXUZ7imjKGi', '1680721968goku.png', 'Off-line agora'),
(15, 49593462, 'jinx', 'arcane', 'nik123@gmail.com', '$2y$10$j3xqZVXinJM30IpGnfcC6OxWk56h39vr4c5bXND0jAnORRX.s8mDK', '1680727410vi lol.jpg', 'Off-line agora'),
(16, 423035069, 'marrom', 'ww', 'es106651@gmail.com', '$2y$10$1gkOxNdj0rw83vuAf28JseEBXICXA.We2Wc6q4xoMM/WT4XJZUqt2', '1680727567marrom.png', 'Off-line agora'),
(17, 1106143011, 'vi', 'orco', 'teste@gmail.com', '$2y$10$EJ8SbQMJzmREFnvYpYG05eQHloAnRJkkM1auiuyvuFmDugkFoTSKu', '1680727732abner.jpg', 'Off-line agora'),
(18, 1606460012, 'gg', 'henrique', 'es1066541@gmail.com', '$2y$10$F0S1pjHdaqDSzleAkIr0zOR4plQ83q2Ij8FO/YhuRMksBDzYGuzve', '1680727813abner.jpg', 'Off-line agora'),
(19, 1635540480, 'goku', 'arcane', 'teste1@gmail.com', '$2y$10$DQiM0f9BaHICX6HSD3UIcOTnnsd44VJUwnAIoMeXGZ0CYHRl.2gA.', '1680727905goku.png', 'Off-line agora'),
(20, 351193835, 'qq', 'qq', 'teste2@gmail.com', '$2y$10$6uWmvjMMAszDr5r4Z8r9QuLM41c93WSkNE8HclXQF2LmAZWsUF6C6', '1680730036goku.png', 'Off-line agora'),
(21, 903618933, 'Zé', 'ww', 'teste3@gmail.com', '$2y$10$F9AzzAGLm.kJKEjHEvoFS.yyWBXe9ZiE/3mBU25vuxNj/WkqGUZUe', '1680730954goku.png', 'Off-line agora'),
(22, 917688683, 'zoro', 'r', 'teste6@gmail.com', '$2y$10$kA6m3L8TobvL3ZNX5kbj1.bmZOdJMwAYJKEBT/CAD1zKrZxzch9tO', '1680731842goku.png', 'Off-line agora'),
(23, 1421648263, 'qq', 'qq', 'testew@gmail.com', '$2y$10$cx6OjoT7ImTpf5y45MjncenLEpI7H9UTAqN2ap7piaN50T2F/imh2', '1680733926vi lol.jpg', 'Off-line agora'),
(24, 1674385848, 'Gabi', 'felix', 'gabrielavitoria0411@gmail.com', '$2y$10$2S7PWBMDC3SqrgZ29mSvAe4FP91EuG5YqYIjjFBXmr3ziIWW5nbV6', '1680781506gabizinha.jpg', ' Ativo agora '),
(25, 849256564, 'qq', 'arcane', 'teste0@gmail.com', '$2y$10$l9/q4advrwnYC/nwfGGPzepemGYehWxv.z3rGfgoIILrPN9kPodbK', '1680783645luiz.png', ' Ativo agora ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animaizinho`
--
ALTER TABLE `animaizinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animaizinho`
--
ALTER TABLE `animaizinho`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
