-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11/05/2026 às 21:39
-- Versão do servidor: 10.6.22-MariaDB-cll-lve-log
-- Versão do PHP: 8.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `forum3858119_bioetica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin_usuarios`
--

CREATE TABLE `admin_usuarios` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nivel_acesso` enum('admin','editor','leitor') NOT NULL DEFAULT 'leitor',
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `admin_usuarios`
--

INSERT INTO `admin_usuarios` (`id`, `nome_completo`, `email`, `cpf`, `nivel_acesso`, `senha`, `created_at`, `updated_at`) VALUES
(1, 'Erik Primão Silva', 'erikprimao@gmail.com', '35857206847', 'admin', '$2y$10$9birO8iAe8y7ABKWImziNOUcEfxtJ1LUBHW9H2JZ0MHsJrtRkUPjO', '2026-03-24 00:41:35', '2026-03-24 02:56:16'),
(2, 'Erik Primao Silva', 'erikpsilva@gmail.com', '07560931804', 'editor', '$2y$10$S3YUxfGgw4bz00aRT54dpOXNpPL90hXDFt3qzbjvFJATMkSoya3RC', '2026-03-24 02:47:50', '2026-03-24 02:47:50'),
(3, 'Ana Paula Aparecida Rodrigues Assunção', 'anapaula.nutri11@gmail.com', '34044956839', 'leitor', '$2y$10$HaNR2fZfJfX23SFPblcRtu24h5y4ujP8PUFjnJ0DaET5jqSRrpQf.', '2026-03-24 02:49:59', '2026-03-24 02:49:59'),
(4, 'Bruno Talanski', 'brunotalanski@gmail.com', '68880241052', 'admin', '$2y$10$B/sMKueJI95cW8lXacNli.bjbzsZ8lw/lkzq7GIe5.oG29Lt0/mua', '2026-05-09 13:54:14', '2026-05-09 13:54:14'),
(5, 'Taylison Santos', 'taylison@forumanimal.org', '46771797007', 'admin', '$2y$10$WQ7cn5WOf4gMfVN9zFDqmOct.tBoyoBI.uiuNDoqxWkvPqmGFEKw2', '2026-05-09 14:17:10', '2026-05-09 14:17:10'),
(6, 'Camilla Souza', 'csouza@forumanimal.org', '99455131099', 'admin', '$2y$10$Gxq0L.Pe5Kra6aWpFGKZcuRRlC2wImFPbFIcKGBroe8GPftCY1sa2', '2026-05-09 14:17:44', '2026-05-11 12:11:12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `pagina` varchar(50) NOT NULL,
  `arquivo` varchar(255) NOT NULL DEFAULT 'images/bannerHome.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `banners`
--

INSERT INTO `banners` (`id`, `pagina`, `arquivo`, `created_at`, `updated_at`) VALUES
(1, 'home', 'images/bannerHome.jpg', '2026-05-09 06:48:00', '2026-05-09 06:48:00'),
(3, 'doacao-sucesso', 'images/bannerHome.jpg', '2026-05-09 06:51:57', '2026-05-09 06:51:57'),
(4, 'doacao-pendente', 'images/bannerHome.jpg', '2026-05-09 06:51:57', '2026-05-09 06:51:57'),
(5, 'doacao-erro', 'images/bannerHome.jpg', '2026-05-09 06:51:57', '2026-05-09 06:51:57');

-- --------------------------------------------------------

--
-- Estrutura para tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `chave` varchar(100) NOT NULL,
  `valor` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `configuracoes`
--

INSERT INTO `configuracoes` (`chave`, `valor`, `updated_at`) VALUES
('mp_modo_teste', '1', '2026-05-09 04:47:51');

-- --------------------------------------------------------

--
-- Estrutura para tabela `conteudo_apadrinhe`
--

CREATE TABLE `conteudo_apadrinhe` (
  `id` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `pretitulo` varchar(120) DEFAULT NULL,
  `titulo` text NOT NULL,
  `titulo_destaque` text NOT NULL,
  `texto` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL DEFAULT 'images/imgCientista.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `conteudo_apadrinhe`
--

INSERT INTO `conteudo_apadrinhe` (`id`, `pretitulo`, `titulo`, `titulo_destaque`, `texto`, `imagem`) VALUES
(1, 'Apadrinhe', '<p>Veja porque sua doação</p>', '<p>pode mudar vidas.</p>', '<p>Somos financiados exclusivamente por pessoas que acreditam na ciência sem animais. Atuamos onde as decisões realmente acontecem: nas comissões de ética, regulações e normas científicas.</p><p>Nossa missão é reduzir e substituir o uso de animais em pesquisa e ensino. É dentro das <strong>CEUAs (Comissões de Ética no Uso de Animais)</strong> que esse impacto começa.</p><p>Nosso principal instrumento é o <em>Curso de Formação em Proteção dos Animais nas CEUAs</em>, em parceria com a UFPR. Ele prepara representantes da sociedade civil para atuar nessas comissões, influenciando diretamente a aprovação de projetos com animais.</p><p>Cada representante pode impactar centenas ou até <strong>milhares de animais por ano</strong> em uma única instituição.</p>', 'images/imgCientista.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `conteudo_apoiar`
--

CREATE TABLE `conteudo_apoiar` (
  `id` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `pretitulo` varchar(120) DEFAULT NULL,
  `titulo` text NOT NULL,
  `titulo_destaque` text NOT NULL,
  `texto1` longtext NOT NULL,
  `t1_titulo` text NOT NULL,
  `t1_texto` text NOT NULL,
  `t2_titulo` text NOT NULL,
  `t2_texto` text NOT NULL,
  `t3_titulo` text NOT NULL,
  `t3_texto` text NOT NULL,
  `texto2` longtext NOT NULL,
  `botao_texto` varchar(120) NOT NULL,
  `botao_link` varchar(255) NOT NULL,
  `botao_target` varchar(10) NOT NULL DEFAULT '_self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `conteudo_apoiar`
--

INSERT INTO `conteudo_apoiar` (`id`, `pretitulo`, `titulo`, `titulo_destaque`, `texto1`, `t1_titulo`, `t1_texto`, `t2_titulo`, `t2_texto`, `t3_titulo`, `t3_texto`, `texto2`, `botao_texto`, `botao_link`, `botao_target`) VALUES
(1, 'Por que nos apoiar?', '<p>Três frentes</p>', '<p>um só propósito</p>', '<p>Animais ainda sofrem todos os dias em nome da ciência, mesmo quando isso já poderia ser evitado.</p><p>Ao apoiar essa causa, você ajuda a mudar essa realidade de dentro para fora: formando profissionais, influenciando decisões e reduzindo o uso de animais de forma efetiva.</p><p>Cada contribuição gera impacto real. Menos sofrimento. Mais ciência. Mais consciência.</p>', '<p>+500 mil</p>', '<p>Animais impactados diretamente por ano.</p>', '<p>Atuação</p>', '<p>em comissões de éticas e políticas públicas.</p>', '<p>Formação</p>', '<p>que transforma e multiplica o impacto</p>', '<p>O Fórum Animal trabalha para transformar a ciência, reduzindo e substituindo o uso de animais em pesquisas e ensino.</p><p>Em vez de atuar apenas nas consequências, atuamos na origem do problema: nas decisões que autorizam o uso de animais.</p><p>Por meio da atuação em comissões de ética (CEUAs), da formação de representantes da sociedade e da promoção de métodos alternativos, conseguimos gerar mudanças reais dentro de universidades, laboratórios e políticas públicas.</p><p>Esse trabalho já contribuiu para avanços importantes, como a proibição de testes em cosméticos e a adoção de métodos mais éticos e eficazes na ciência.</p><p>Ao apoiar essa causa, você não está apenas ajudando animais individualmente, você está ajudando a transformar todo o sistema que impacta milhões deles.</p>', 'Saiba mais sobre bioética', 'https://forumanimal.org/bioetica/', '_blank');

-- --------------------------------------------------------

--
-- Estrutura para tabela `conteudo_banner_home`
--

CREATE TABLE `conteudo_banner_home` (
  `id` tinyint(4) NOT NULL DEFAULT 1,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(500) NOT NULL,
  `texto` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `conteudo_banner_home`
--

INSERT INTO `conteudo_banner_home` (`id`, `titulo`, `subtitulo`, `texto`, `updated_at`) VALUES
(1, 'Bioética', 'Nos ajude a ajudar os animais usados na ciência.', 'Promovemos a substituição do uso prejudicial de animais em pesquisas, ensino e testes, por um futuro mais justo e consciente.', '2026-05-09 13:35:28');

-- --------------------------------------------------------

--
-- Estrutura para tabela `conteudo_intro`
--

CREATE TABLE `conteudo_intro` (
  `id` tinyint(4) NOT NULL DEFAULT 1,
  `pretitulo` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `titulo_destaque` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `imagem` varchar(255) NOT NULL DEFAULT 'images/imgRato.jpg',
  `t1_titulo` varchar(255) NOT NULL,
  `t1_texto` varchar(500) NOT NULL,
  `t2_titulo` varchar(255) NOT NULL,
  `t2_texto` varchar(500) NOT NULL,
  `t3_titulo` varchar(255) NOT NULL,
  `t3_texto` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `conteudo_intro`
--

INSERT INTO `conteudo_intro` (`id`, `pretitulo`, `titulo`, `titulo_destaque`, `texto`, `imagem`, `t1_titulo`, `t1_texto`, `t2_titulo`, `t2_texto`, `t3_titulo`, `t3_texto`, `updated_at`) VALUES
(1, NULL, 'O que é', 'bioética.', 'É uma ponte que conecta Ciência e Ética\nA Bioética ajuda na construção de futuro um onde o avanço do conhecimento caminhe junto com o avanço moral da sociedade', 'images/imgRato.jpg', 'Menos sofrimento', 'Redução do uso de animais na ciência.', 'Mais ciência', 'Fomento a métodos modernos e eficazes.', 'Mais consciência', 'Formação de pessoas críticas e preparadas.', '2026-05-09 13:35:28');

-- --------------------------------------------------------

--
-- Estrutura para tabela `doadores`
--

CREATE TABLE `doadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `tipo` enum('unica','mensal') NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `status` enum('pendente','aprovado','recusado','cancelado') NOT NULL DEFAULT 'pendente',
  `mp_id` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `doadores`
--

INSERT INTO `doadores` (`id`, `nome`, `email`, `telefone`, `tipo`, `valor`, `status`, `mp_id`, `created_at`, `updated_at`) VALUES
(1, 'ERik Primao', 'erikprimao@gmail.com', '11942030406', 'unica', 60.00, 'aprovado', '2964733367-2ce9c880-dc3c-4c1e-a7de-8221c7205c39', '2026-05-09 05:30:20', '2026-05-09 06:24:13'),
(2, 'Ana Paula', 'ana@ana.com', '11904560464', 'mensal', 60.00, 'cancelado', 'eec519a33120400296ac30a20703e5e1', '2026-05-09 05:44:39', '2026-05-09 06:24:09'),
(3, 'Erik Primao', 'erikprimao@erik.com', '11906840654', 'unica', 60.00, 'aprovado', '2964733367-1f35fce8-3784-41df-97a2-1fefcd655393', '2026-05-09 05:46:33', '2026-05-09 06:24:11'),
(4, 'ERik Primao Silveira', 'erikprimao13@gmail.com', '11945054646', 'unica', 30.00, 'aprovado', '2964733367-b96c1a74-a119-4520-bee9-309cbd6af23f', '2026-05-09 06:16:36', '2026-05-09 06:17:59'),
(5, 'Erik Silveira', 'erikprimao13@gmail.com', '11942035403', 'unica', 120.00, 'aprovado', '2964733367-7cf9168c-89eb-419e-ab0b-e4693f59803e', '2026-05-11 20:39:57', '2026-05-11 20:42:19');

-- --------------------------------------------------------

--
-- Estrutura para tabela `testemunhos`
--

CREATE TABLE `testemunhos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `profissao` varchar(255) DEFAULT NULL,
  `edicao` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `testemunhos`
--

INSERT INTO `testemunhos` (`id`, `nome`, `profissao`, `edicao`, `texto`, `created_at`) VALUES
(1, 'Gabriella Lisboa', NULL, 'Aluna da 1ª Edição do Curso', '<p>Curso extremamente completo, com grandes nomes da área e que abrange desde a filosofia da ética até metodologias alternativas. É ótimo para expandir a visão sobre o assunto por diversos ângulos. Recomendo a todos!</p>', '2026-05-09 07:06:27'),
(2, 'Gabriela Chueiri de Moraes', 'Médica Veterinária, doutoranda em epidemiologia e saúde única pela USP.', 'Aluna da 1ª Edição do Curso', '<p>Confesso que o curso superou minhas expectativas. Alguns professores eu já conhecia e admirava, mas todos são absolutamente inteligentes e transmitem conhecimento com muita facilidade. Esse curso contribuiu demais com minha pesquisa de pós-graduação! Sou muito grata a toda a equipe.</p>', '2026-05-09 07:06:27'),
(3, 'Paulo Augusto Esteves', 'Embrapa Suínos e Aves', 'Aluno da 4ª Edição do Curso', '<p>Sou presidente de uma CEUA e membro de uma outra. Ambas são CEUAS que trabalham quase que em sua totalidade avaliando propostas que envolvem a utilização de animais de produção em atividades de ensino ou pesquisa. Em ambas as CEUAs sempre tentamos verificar a real necessidade da execução da atividade e, também, sempre buscamos a possibilidade da redução do número de animais utilizados, ou, a utilização de métodos alternativos. O início do curso foi difícil para mim. Achei o discurso dos professores um pouco agressivo demais. Como não sou membro de uma organização protetora de animais, me senti como sendo julgado e culpado por estar atuando fora de uma ONG deste tipo. Mas, entendendo que o objetivo fundamental do curso é a capacitação de representantes de ONGs em CEUAS e o incentivo a que tais representantes sejam, de fato, atuantes; como respeito a ideia, fui em frente. Gostei demais do curso, especialmente das aulas ministradas pelos professores Vicente, Tales (muito top as aulas do módulo 3), Paula e Evelyne. O curso me trouxe várias informações que eu desconhecia e me levou a novas reflexões sobre o conteúdo apresentado, abrindo minha mente para uma nova percepção da experimentação animal como um todo.</p>', '2026-05-09 07:06:27'),
(4, 'Marcelo Coelho Almeida', 'Psicólogo, Doutor em Educação Arte e História da Cultura', 'Coordenador da CEUA Mackenzie - Aluno da 5ª Edição', '<p>Sou o coordenador da CEUA Mackenzie em São Paulo. Estou quase terminando o módulo 6 e portanto perto de terminar o curso. O nosso vice coordenador também está matriculado e esse curso está exercendo uma influência muito grande em nossa CEUA. Realmente o curso é muito bom e muito instrumentalização para nossa conduta como líderes de nossa CEUA...</p>', '2026-05-09 07:06:27'),
(5, 'Rafael Ferreira Muniz', 'Eng. de Pesca / Eng. de Seg. do Trabalho', 'Aluno da 5ª Edição do Curso', '<p>Terminei o curso e fiquei deslumbrado de tantas informações preciosas.</p>', '2026-05-09 07:06:27'),
(6, 'Alexandre Terreri', 'Ativista da causa animal', 'Aluno da 1ª Edição do Curso', '<p>O Curso para Proteção dos Animais na Ciência oferecido pelo FNPDA é fundamental para quem se propõe a representar os interesses dos animais, pois nos possibilita obter conhecimento técnico, legislação, dicas de especialistas e membros mais experientes, de forma a otimizar nossos esforços para a discussão dos casos apresentados nas CEUAs e a busca de caminhos alternativos que beneficiem os animais não humanos.</p>', '2026-05-09 07:06:27'),
(7, 'Eduardo Henrique Gonçalves', 'Biólogo, pesquisador em bem-estar animal', 'Aluno da 3ª Edição do Curso', '<p>Olá, meu nome é Eduardo, fiz a 3ª edição do curso em 2023. Embora já tivesse estudado um pouco sobre o tema, o curso foi fundamental para meu ingresso e atuação em Comissões de Ética. A diversidade de conteúdos permitiu revisar e expandir conhecimentos essenciais na atuação em defesa dos animais em CEUAs. Mais do que o conteúdo em si, a organização do curso me forneceu segurança e melhores maneiras de argumentar e me portar para alcançar melhores resultados para os animais nas discussões dos protocolos. Vejo como indispensável a proposição de cursos como este, que pode atingir o público docente que utiliza os animais, abrindo portas para novas abordagens experimentais, assim como para reunir, fortalecer e amadurecer pessoas que tem o desejo de ajudar os animais nos contextos de experimentação científica.</p>', '2026-05-09 07:06:27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `data_nascimento`, `cpf`, `telefone`, `senha`, `created_at`, `updated_at`) VALUES
(1, 'João Silva', 'joao.silva@teste.com', '1990-06-15', '52998224725', '11987654321', '$2y$10$KUJWG3.JQ4Kf3AvazaL6tOKTAWRQWyvY2djp85.1a4YAhdpUMFq1W', '2026-03-24 03:10:20', '2026-03-24 03:10:20');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admin_usuarios`
--
ALTER TABLE `admin_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices de tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pagina` (`pagina`);

--
-- Índices de tabela `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`chave`);

--
-- Índices de tabela `conteudo_apadrinhe`
--
ALTER TABLE `conteudo_apadrinhe`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `conteudo_apoiar`
--
ALTER TABLE `conteudo_apoiar`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `conteudo_banner_home`
--
ALTER TABLE `conteudo_banner_home`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `conteudo_intro`
--
ALTER TABLE `conteudo_intro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `doadores`
--
ALTER TABLE `doadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `testemunhos`
--
ALTER TABLE `testemunhos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin_usuarios`
--
ALTER TABLE `admin_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `doadores`
--
ALTER TABLE `doadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `testemunhos`
--
ALTER TABLE `testemunhos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
