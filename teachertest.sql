-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2019 г., 09:50
-- Версия сервера: 5.5.53
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `teachertest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` tinytext,
  `value` text,
  `answer` tinytext,
  `test_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `title`, `value`, `answer`, `test_id`) VALUES
(25, 'question_1', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(26, 'question_2', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(27, 'question_3', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(28, 'question_4', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(29, 'question_5', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(30, 'question_6', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(31, 'question_7', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(32, 'question_8', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(33, 'question_9', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(34, 'question_10', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(35, 'question_11', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(36, 'question_12', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(37, 'question_13', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(38, 'question_14', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(39, 'question_15', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(40, 'question_16', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(41, 'question_17', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(42, 'question_18', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(43, 'question_19', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(44, 'question_1', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(45, 'question_2', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(46, 'question_3', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(47, 'question_4', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(48, 'question_5', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(49, 'question_6', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(50, 'question_7', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(51, 'question_8', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(52, 'question_9', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(53, 'question_10', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(54, 'question_11', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(55, 'question_12', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(56, 'question_13', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(57, 'question_14', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(58, 'question_15', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(59, 'question_16', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(60, 'question_17', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(61, 'question_18', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(62, 'question_19', 'a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}', '1', 1),
(72, '123', 'a:6:{i:0;s:3:\"132\";i:1;s:3:\"123\";i:2;s:3:\"123\";i:3;s:3:\"123\";i:4;s:3:\"123\";i:5;s:3:\"123\";}', '1', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `title` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `title`) VALUES
(1, 'hello world'),
(2, 'hello world'),
(3, ''),
(4, ''),
(9, ''),
(10, ''),
(11, ''),
(12, '');

-- --------------------------------------------------------

--
-- Структура таблицы `user_score`
--

CREATE TABLE `user_score` (
  `id` int(11) NOT NULL,
  `user` tinytext,
  `division` tinytext,
  `rang` tinytext,
  `posada` tinytext,
  `score` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_score`
--

INSERT INTO `user_score` (`id`, `user`, `division`, `rang`, `posada`, `score`) VALUES
(1, 'Sasha', 'NDC', 'soldat', 'cadet', 'a:1:{s:6:\"data_1\";s:8:\"answer_2\";}'),
(2, 'Кальян', 'C5 курс', '', '', 'a:0:{}'),
(3, 'user1', 'C6 курс', '', '', 'a:0:{}'),
(4, 'user2', 'C6 курс', 'сол', 'С55', 'a:0:{}'),
(5, 'user3', 'C8 курс', 'сол', 'С55', 'a:1:{i:1;d:20;}'),
(6, 'user11', 'C8 курс', 'сол', 'Курсант', 'a:1:{i:0;a:1:{i:1;d:30;}}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_score`
--
ALTER TABLE `user_score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `user_score`
--
ALTER TABLE `user_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
