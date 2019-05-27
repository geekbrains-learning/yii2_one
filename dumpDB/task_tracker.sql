-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 28 2019 г., 02:10
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task_tracker`
--

-- --------------------------------------------------------

--
-- Структура таблицы `depart`
--

CREATE TABLE `depart` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `count` int(11) DEFAULT '0',
  `head_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `depart`
--

INSERT INTO `depart` (`id`, `name`, `count`, `head_id`) VALUES
(1, 'it-отдел', 0, NULL),
(19, 'Контроль кач-ва', 0, NULL),
(20, 'Отдел кадров', 0, NULL),
(21, 'Бухгалтерия', 0, NULL),
(22, 'Охрана', 0, NULL),
(23, 'Маркетинг', 0, NULL),
(24, 'Реклама', 0, NULL),
(25, 'Кофейный отдел', 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1558901198),
('m190526_200328_create_tasks_table', 1558901852),
('m190527_130543_users', 1558965138),
('m190527_161552_users', 1558973893),
('m190527_214935_users', 1558994795),
('m190527_224953_users', 1558997636);

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Название задачи',
  `description` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `responsible_id` int(11) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `creator_id`, `responsible_id`, `deadline`, `status_id`) VALUES
(1, 'Task1', 'Install Framework1', 4, 1, '2019-05-27', 1),
(2, 'Task2', 'Install Framework2', 4, 2, '2019-05-27', 2),
(4, 'Task3', 'Install Framework3', 4, 3, '2019-05-27', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isUser` int(11) NOT NULL DEFAULT '0' COMMENT '0-user, 1-admin',
  `auth_key` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `access_token` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isUser`, `auth_key`, `access_token`) VALUES
(1, 'ivanov', '47a7691f33250ef825a582d5473dae1e', 0, NULL, NULL),
(2, 'petrov', '47a7691f33250ef825a582d5473dae1e', 0, NULL, NULL),
(3, 'sidorov', '47a7691f33250ef825a582d5473dae1e', 0, NULL, NULL),
(4, 'admin', '47a7691f33250ef825a582d5473dae1e', 1, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `depart`
--
ALTER TABLE `depart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_creator_idx` (`creator_id`),
  ADD KEY `tasks_responsible_idx` (`responsible_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_key` (`auth_key`),
  ADD UNIQUE KEY `access_token` (`access_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `depart`
--
ALTER TABLE `depart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
