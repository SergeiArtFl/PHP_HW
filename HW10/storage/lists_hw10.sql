-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 21 2022 г., 12:26
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lists_hw10`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`ID`, `NAME`) VALUES
(102, 'Anton'),
(103, 'Hleb'),
(101, 'Sergei');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CODE` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`ID`, `NAME`, `CODE`) VALUES
(1001, 'Other', 'other_1'),
(1002, 'Sport', 'sport_2'),
(1003, 'Culture', 'culture_3');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `ID` int(10) NOT NULL,
  `ACTIVE` tinyint(1) NOT NULL,
  `TITLE` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CODE` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTENT` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CATEGORY_ID` int(10) NOT NULL,
  `AUTHOR_ID` int(10) NOT NULL,
  `DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`ID`, `ACTIVE`, `TITLE`, `CODE`, `CONTENT`, `CATEGORY_ID`, `AUTHOR_ID`, `DATE`) VALUES
(1, 1, 'Title_1', 'post_1', 'Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1001, 101, '2022-03-11 21:48:29'),
(2, 1, 'Title_2', 'post_2', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1003, 103, '2022-03-11 21:49:54'),
(3, 1, 'Title_3', 'post_3', '1914 translation by H. Rackham\r\n\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', 1002, 102, '2022-03-11 21:50:41'),
(4, 1, 'Title_4', 'post_4', 'The standard Lorem Ipsum passage, used since the 1500s\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 1001, 101, '2022-03-11 21:51:34'),
(5, 1, 'Title_5', 'post_5', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1001, 101, '2022-03-11 21:52:31'),
(6, 1, 'Title_6', 'post_6', 'Vivamus molestie risus vitae ipsum ultricies fermentum. Nulla sodales nulla vitae malesuada pellentesque. Aliquam a lorem non leo fermentum efficitur eget ut eros. Maecenas viverra massa nec purus vulputate, mattis finibus mi egestas. Suspendisse suscipit viverra imperdiet. Vestibulum interdum, enim et sagittis gravida, eros eros mattis sapien, a eleifend tellus lacus pharetra erat. Morbi tincidunt tellus lorem, et ultricies leo condimentum in. Nunc feugiat ornare arcu vitae elementum.', 1003, 103, '2022-03-12 11:58:03'),
(7, 1, 'Title_7', 'post_7', 'Duis at laoreet felis. Mauris sed elit at lorem efficitur aliquam. Ut quis quam purus. Etiam felis leo, finibus non tincidunt ac, accumsan eget lectus. Curabitur cursus, nunc ac tempor placerat, eros libero pretium nunc, nec malesuada sem ante at nunc. Integer commodo, risus in faucibus ultricies, odio ipsum condimentum eros, et pharetra eros lorem nec massa. Sed porta turpis lectus, id bibendum lacus faucibus et. Quisque elementum mi metus. Fusce accumsan quis ipsum eu consequat. Praesent varius, mauris nec tincidunt molestie, nisl ante viverra urna, a fringilla mauris erat eget augue. Suspendisse vel efficitur tortor, non lobortis dolor. Proin eu tellus massa. Nulla bibendum consectetur varius. Phasellus ac felis tristique, feugiat eros sit amet, hendrerit justo. Integer malesuada pulvinar odio, vitae fringilla lectus ultricies ut.', 1002, 102, '2022-03-12 11:59:01'),
(8, 1, 'Title_8', 'post_8', 'Maecenas malesuada efficitur tortor facilisis scelerisque. Curabitur eu facilisis est. Fusce maximus sagittis arcu eu aliquam. Ut in erat at elit aliquet tempus ut ac lectus. Proin condimentum felis nisi, quis fermentum neque ullamcorper sed. Proin varius ex eros, ac volutpat purus gravida et. Etiam convallis ut tellus vitae rutrum. Pellentesque fermentum arcu tincidunt massa elementum, et tincidunt nibh viverra. Mauris auctor urna ac sapien porta, at efficitur urna tristique. Fusce a efficitur velit, non sodales nunc. Nam sit amet eros at dui interdum laoreet eu vel magna. In interdum ex libero, non tincidunt nisl dictum sit amet. Aenean in ligula dui. Fusce mauris mi, malesuada eu sapien et, rutrum congue orci.', 1001, 101, '2022-03-12 11:59:49'),
(9, 1, 'Title_9', 'post_9', 'Praesent convallis iaculis consectetur. Sed quis lorem vehicula, pellentesque risus ut, dictum leo. In ullamcorper quam vitae neque malesuada, id dapibus eros auctor. Nullam eu eleifend orci. Etiam lectus nibh, dignissim sit amet consectetur tristique, rhoncus et enim. Vestibulum placerat, eros non convallis rutrum, nunc lorem venenatis dui, vel imperdiet ante ipsum sed arcu. Integer sit amet luctus purus, ut tincidunt diam. Etiam suscipit pellentesque elit. Aliquam erat volutpat. Integer eu facilisis eros. Integer pharetra lobortis ipsum, quis elementum leo vestibulum ut. Curabitur purus risus, accumsan nec imperdiet vel, ornare et ligula.', 1002, 102, '2022-03-12 12:01:11'),
(10, 1, 'Title_10', 'post_10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere pellentesque suscipit. Aenean ut mollis risus. Duis vehicula quis arcu quis posuere. Morbi mauris nisi, suscipit id mi nec, iaculis convallis nisi. Nulla rutrum rhoncus diam eu facilisis. Proin iaculis porta justo et porta. Fusce in tellus at velit faucibus pulvinar.', 1003, 103, '2022-03-12 12:05:50'),
(11, 1, 'Title_11', 'post_11', 'Suspendisse auctor nulla at justo posuere, sed malesuada nisi sodales. Etiam sagittis massa non metus mollis suscipit. Sed vestibulum a lorem in faucibus. Integer ultrices tortor odio, eu tincidunt arcu consequat vel. Maecenas et velit at libero egestas auctor ut sit amet justo. Suspendisse venenatis lacus ut tellus porttitor maximus. Aenean aliquam gravida leo in viverra. Aenean mattis cursus lacinia. Proin nec aliquet sem, a blandit dolor. Vestibulum pellentesque suscipit lacinia. Praesent dictum, ipsum vel accumsan fringilla, diam tortor scelerisque ex, sed consequat odio nisi sit amet velit.', 1001, 101, '2022-03-12 12:07:27'),
(12, 1, 'Title_12', 'post_12', 'Vestibulum arcu odio, rhoncus sit amet gravida quis, aliquet ac erat. Phasellus molestie, turpis eget vehicula fringilla, urna diam iaculis felis, et euismod mauris lectus eget mauris. Pellentesque efficitur interdum nisi, id aliquam neque sodales at. Nunc condimentum elementum efficitur. Donec condimentum, tortor at gravida lacinia, magna turpis tempus ligula, et vulputate nibh diam non tortor. Integer ultrices nunc non accumsan malesuada. Nam imperdiet et purus non pulvinar. Nulla molestie euismod neque id ornare. Morbi nec est cursus, lacinia ante non, lacinia purus. Curabitur id bibendum risus. Integer a sem sed arcu molestie dictum at vitae erat. Sed sollicitudin sapien ac nisi consequat, in consequat augue ornare. Integer auctor tincidunt ipsum. Suspendisse magna lectus, sodales eu felis nec, tincidunt tincidunt felis. Vestibulum ut euismod leo, non iaculis massa. Sed suscipit viverra turpis sit amet suscipit.', 1002, 102, '2022-03-12 12:08:01'),
(13, 1, 'Title_13', 'post_13', 'Donec interdum at sapien nec interdum. Nam vestibulum lacus id metus efficitur, ut imperdiet augue feugiat. Phasellus porttitor ornare ex, at blandit justo condimentum vitae. Vestibulum lacinia ex at urna sollicitudin molestie. Curabitur ullamcorper molestie euismod. Morbi cursus placerat tincidunt. Donec imperdiet nulla augue, tempus tincidunt dolor pulvinar sit amet. Etiam a sem vitae sem dictum mattis consequat a sapien.', 1002, 102, '2022-03-12 12:08:49'),
(14, 1, 'Title_14', 'post_14', 'Cras nec risus sagittis, gravida tortor a, maximus ligula. Aenean vitae fermentum lacus, et dignissim justo. Aenean congue velit nec neque mattis elementum. Pellentesque ultrices metus quis felis pellentesque tempor. Praesent vel ultrices ipsum, dapibus rhoncus magna. Aliquam nec blandit odio. Quisque eu porta dolor, non feugiat dolor. Aenean augue ante, placerat id egestas id, sollicitudin laoreet felis. Pellentesque porttitor, elit nec suscipit elementum, metus nulla tincidunt elit, congue sagittis sapien sem vel velit. Nulla facilisi. Duis ultrices, ligula ac convallis aliquet, neque eros aliquam metus, in pulvinar quam arcu vitae ex. Donec eu magna nec massa vestibulum malesuada.', 1001, 101, '2022-03-12 12:11:36'),
(15, 1, 'Title_15', 'post_15', 'Vestibulum arcu odio, rhoncus sit amet gravida quis, aliquet ac erat. Phasellus molestie, turpis eget vehicula fringilla, urna diam iaculis felis, et euismod mauris lectus eget mauris. Pellentesque efficitur interdum nisi, id aliquam neque sodales at. Nunc condimentum elementum efficitur. Donec condimentum, tortor at gravida lacinia, magna turpis tempus ligula, et vulputate nibh diam non tortor. Integer ultrices nunc non accumsan malesuada. Nam imperdiet et purus non pulvinar. Nulla molestie euismod neque id ornare. Morbi nec est cursus, lacinia ante non, lacinia purus. Curabitur id bibendum risus. Integer a sem sed arcu molestie dictum at vitae erat. Sed sollicitudin sapien ac nisi consequat, in consequat augue ornare. Integer auctor tincidunt ipsum. Suspendisse magna lectus, sodales eu felis nec, tincidunt tincidunt felis. Vestibulum ut euismod leo, non iaculis massa. Sed suscipit viverra turpis sit amet suscipit.', 1003, 103, '2022-03-12 12:12:22'),
(16, 1, 'Title_16', 'post_16', 'Suspendisse auctor nulla at justo posuere, sed malesuada nisi sodales. Etiam sagittis massa non metus mollis suscipit. Sed vestibulum a lorem in faucibus. Integer ultrices tortor odio, eu tincidunt arcu consequat vel. Maecenas et velit at libero egestas auctor ut sit amet justo. Suspendisse venenatis lacus ut tellus porttitor maximus. Aenean aliquam gravida leo in viverra. Aenean mattis cursus lacinia. Proin nec aliquet sem, a blandit dolor. Vestibulum pellentesque suscipit lacinia. Praesent dictum, ipsum vel accumsan fringilla, diam tortor scelerisque ex, sed consequat odio nisi sit amet velit.', 1001, 101, '2022-03-12 12:22:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `NAME` (`NAME`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CATEGORY_ID` (`CATEGORY_ID`),
  ADD KEY `AUTHOR_ID` (`AUTHOR_ID`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `categories` (`ID`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`AUTHOR_ID`) REFERENCES `authors` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
