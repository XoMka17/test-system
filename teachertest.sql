-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Квт 19 2019 р., 08:33
-- Версія сервера: 5.6.43
-- Версія PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `teachertest`
--

-- --------------------------------------------------------

--
-- Структура таблиці `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` tinytext,
  `value` text,
  `test_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `questions`
--

INSERT INTO `questions` (`id`, `title`, `value`, `test_id`) VALUES
(1, 'question_1', 'a:2:{s:3:\"que\";a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}s:6:\"answer\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}', 1),
(2, 'question_1', 'a:2:{s:3:\"que\";a:3:{i:0;s:8:\"answer_1\";i:1;s:8:\"answer_2\";i:2;s:8:\"answer_3\";}s:6:\"answer\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}}', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `title` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `test`
--

INSERT INTO `test` (`id`, `title`) VALUES
(1, 'hello world'),
(2, 'hello world');

-- --------------------------------------------------------

--
-- Структура таблиці `user_score`
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
-- Дамп даних таблиці `user_score`
--

INSERT INTO `user_score` (`id`, `user`, `division`, `rang`, `posada`, `score`) VALUES
(1, 'Sasha', 'NDC', 'soldat', 'cadet', 'a:1:{s:6:\"data_1\";s:8:\"answer_2\";}');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`);

--
-- Індекси таблиці `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user_score`
--
ALTER TABLE `user_score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `user_score`
--
ALTER TABLE `user_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
