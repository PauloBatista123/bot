-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Fev-2023 às 12:11
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bot-log`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mensagem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1572 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id`, `mensagem`, `bot`, `created_at`, `updated_at`) VALUES
(1566, 'Erro com a atomação do tipo: replace expected at least 2 arguments, got 1', 'PLD/FT', '2023-02-15 18:46:53', '2023-02-15 18:46:53'),
(1567, 'Erro com a atomação do tipo: \'str\' object cannot be interpreted as an integer', 'PLD/FT', '2023-02-15 19:20:09', '2023-02-15 19:20:09'),
(1568, 'Erro com a atomação do tipo: decoding to str: need a bytes-like object, re.Pattern found', 'PLD/FT', '2023-02-15 19:27:09', '2023-02-15 19:27:09'),
(1569, 'Erro com a atomação do tipo: decoding to str: need a bytes-like object, re.Pattern found', 'PLD/FT', '2023-02-15 19:27:25', '2023-02-15 19:27:25'),
(1570, 'Erro com a atomação do tipo: nothing to repeat at position 0', 'PLD/FT', '2023-02-15 19:28:02', '2023-02-15 19:28:02'),
(1571, 'Erro com a atomação do tipo: nothing to repeat at position 0', 'PLD/FT', '2023-02-15 19:28:52', '2023-02-15 19:28:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_10_163203_create_logs_table', 1),
(6, '0000_00_00_000000_create_websockets_statistics_entries_table', 2),
(7, '2023_02_13_130333_create_robos_table', 2),
(8, '2023_02_13_130434_create_servicos_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `robos`
--

DROP TABLE IF EXISTS `robos`;
CREATE TABLE IF NOT EXISTS `robos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `robos`
--

INSERT INTO `robos` (`id`, `nome`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PLD/FT', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mensagem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `protocolo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `robo_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `servicos_robo_id_foreign` (`robo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `mensagem`, `protocolo`, `robo_id`, `created_at`, `updated_at`) VALUES
(24, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):POLLYANNA GOMES ROMERO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 13:17:57', '2023-02-15 13:17:57'),
(25, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):POLLYANNA GOMES ROMERO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 13:22:05', '2023-02-15 13:22:05'),
(26, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):POLLYANNA GOMES ROMERO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 15:33:55', '2023-02-15 15:33:55'),
(27, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):MARCELO RIBEIRO FELISBERTO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 16:35:13', '2023-02-15 16:35:13'),
(28, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):MARCELO RIBEIRO FELISBERTO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 16:39:22', '2023-02-15 16:39:22'),
(29, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):MARCELO RIBEIRO FELISBERTO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 16:43:30', '2023-02-15 16:43:30'),
(30, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):MARCELO RIBEIRO FELISBERTO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 16:50:43', '2023-02-15 16:50:43'),
(31, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):MARCELO RIBEIRO FELISBERTO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 17:26:08', '2023-02-15 17:26:08'),
(32, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):MARCELO RIBEIRO FELISBERTO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 17:39:51', '2023-02-15 17:39:51'),
(33, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):MARCELO RIBEIRO FELISBERTO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 17:44:11', '2023-02-15 17:44:11'),
(34, 'Foi aberto um novo chamado para ocorrência ID 3795754  - Cooperado(a):MARCELO RIBEIRO FELISBERTO', 'NÚMERO DO CHAMADO: #0000', 1, '2023-02-15 18:06:36', '2023-02-15 18:06:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `websockets_statistics_entries`
--

DROP TABLE IF EXISTS `websockets_statistics_entries`;
CREATE TABLE IF NOT EXISTS `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `app_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
