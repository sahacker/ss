SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Структура таблицы `user`
--

DROP TABLE if exists `user`;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL PRIMARY KEY,
  `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `authkey` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '4',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`uid`, `username`, `passwd`, `token`, `email`, `status`) VALUES
(1, 'admin', 'admin', NULL, 'admin@none.com', 2),
(2, 'user', 'password', NULL, 'user@none.com', 4);


DROP TABLE if exists `role`;
CREATE TABLE `role` (
  `gid` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `role` (`gid`, `name`) values
(1, 'owner'), -- Владелец сайта - все права
(2, 'moder'), -- Модератор сайта - все права кроме удаления владельца
(3, 'xboss'), -- Права привилегированного пользователя
(4, 'xuser'); -- Права простого пользователя

DROP TABLE if exists `perm`;
CREATE TABLE  `perm` (
  `pid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `gid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `perm` (`gid`, `name`) values
(4,'site'), -- Доступ к обычной части сайта
(3,'site'), 
(2,'site'), 
(1,'site'), 
(3,'priv'), -- Доступ к приватной части сайта
(2,'priv'),
(1,'priv'), 
(2,'user'), -- Доступ к меню CRUD на пользователей
(1,'user'),
(1,'role'), -- Доступ к меню CRUD на роли (группы)
(1,'perm'); -- Доступ к меню CRUD на разрешения  

