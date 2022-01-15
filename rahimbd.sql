-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 15 2022 г., 23:51
-- Версия сервера: 5.5.62
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rahimbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `ban` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `img`, `alt`, `title`, `job`, `link`, `mail`, `link2`, `title2`, `ban`) VALUES
(1, 'img/demo/authors/sunny.png', 'Sunny A.', 'Sunny A. (UI/UX Expert)', 'Lead Author', 'https://twitter.com/@myplaneticket', '@myplaneticket', 'https://wrapbootstrap.com/user/myorange', 'Contact Sunny', 0),
(2, 'img/demo/authors/josh.png', 'Jos K.', 'Jos K. (ASP.NET Developer)', 'Partner &amp; Contributor', 'https://twitter.com/@atlantez', '@atlantez', 'https://wrapbootstrap.com/user/Walapa', 'Contact Jos', 0),
(3, 'img/demo/authors/jovanni.png', 'Jovanni Lo', 'Jovanni L. (PHP Developer)', 'Partner &amp; Contributor', 'https://twitter.com/@lodev09', '@lodev09', 'https://wrapbootstrap.com/user/lodev09', 'Contact Jovanni', 1),
(4, 'img/demo/authors/roberto.png', 'Jovanni Lo', 'Roberto R. (Rails Developer)', 'Partner &amp; Contributor', 'https://twitter.com/@sildur', '@sildur', 'https://wrapbootstrap.com/user/sildur', 'Contact Roberto', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `mess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `mess`) VALUES
(26, '111'),
(27, '123'),
(28, 'dfs');

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `id` int(10) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id`, `FirstName`, `LastName`, `UserName`) VALUES
(1, 'Mark', 'Otto', '@mdo'),
(2, 'Jacob', 'Thornton', '@fat'),
(3, 'Larry', 'the Bird', '@twitter'),
(4, 'Larry the Bird', 'Bird', '@twitter');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
