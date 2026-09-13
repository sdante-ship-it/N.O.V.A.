-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/09/2026 às 23:58
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nova_robotic_arm`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `diario_bordo`
--

CREATE TABLE `diario_bordo` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `data_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `data_edicao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `prototipo`
--

CREATE TABLE `prototipo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `versao` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `graus_liberdade` int(11) DEFAULT NULL,
  `capacidade_carga` varchar(50) DEFAULT NULL,
  `material` varchar(150) DEFAULT NULL,
  `alcance` varchar(50) DEFAULT NULL,
  `status` enum('em_desenvolvimento','em_testes','concluido') NOT NULL DEFAULT 'em_desenvolvimento',
  `imagem_principal` varchar(255) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `prototipo`
--

INSERT INTO `prototipo` (`id`, `titulo`, `versao`, `descricao`, `graus_liberdade`, `capacidade_carga`, `material`, `alcance`, `status`, `imagem_principal`, `usuario_id`, `data_criacao`, `data_atualizacao`) VALUES
(1, 'Braço Robótico N.O.V.A.', 'v0.1', 'Protótipo inicial de braço robótico de 5 eixos, desenvolvido para tarefas de manipulação de precisão em ambiente de bancada. Estrutura impressa em 3D com reforços de alumínio nas juntas de maior carga.', 5, '1.2 kg', 'Alumínio 6061 + PLA+', '42 cm', 'em_desenvolvimento', NULL, 1, '2026-09-05 13:28:38', '2026-09-05 13:28:38');

-- --------------------------------------------------------

--
-- Estrutura para tabela `prototipo_imagens`
--

CREATE TABLE `prototipo_imagens` (
  `id` int(11) NOT NULL,
  `prototipo_id` int(11) NOT NULL,
  `caminho_imagem` varchar(255) NOT NULL,
  `legenda` varchar(255) DEFAULT NULL,
  `data_upload` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cargo` enum('admin','colaborador') NOT NULL DEFAULT 'colaborador',
  `ativo` tinyint(1) NOT NULL DEFAULT 1,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cargo`, `ativo`, `data_criacao`) VALUES
(1, 'Administrador N.O.V.A.', 'admin@nova.com', 'admin123', 'admin', 1, '2026-09-05 13:28:38');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `diario_bordo`
--
ALTER TABLE `diario_bordo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_diario_usuario` (`usuario_id`),
  ADD KEY `idx_diario_data` (`data_registro`);

--
-- Índices de tabela `prototipo`
--
ALTER TABLE `prototipo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_prototipo_usuario` (`usuario_id`),
  ADD KEY `idx_prototipo_data` (`data_criacao`);

--
-- Índices de tabela `prototipo_imagens`
--
ALTER TABLE `prototipo_imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_imagem_prototipo` (`prototipo_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `diario_bordo`
--
ALTER TABLE `diario_bordo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prototipo`
--
ALTER TABLE `prototipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `prototipo_imagens`
--
ALTER TABLE `prototipo_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `diario_bordo`
--
ALTER TABLE `diario_bordo`
  ADD CONSTRAINT `fk_diario_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `prototipo`
--
ALTER TABLE `prototipo`
  ADD CONSTRAINT `fk_prototipo_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON UPDATE CASCADE;

--
-- Restrições para tabelas `prototipo_imagens`
--
ALTER TABLE `prototipo_imagens`
  ADD CONSTRAINT `fk_imagem_prototipo` FOREIGN KEY (`prototipo_id`) REFERENCES `prototipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
