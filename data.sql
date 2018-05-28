CREATE DATABASE IF NOT EXISTS `travel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `travel`;

-- --------------------------------------------------------

--
-- Структура таблицы `routes`
--

CREATE TABLE `routes` (
  `id` int(10) DEFAULT NULL,
  `title` varchar(10) DEFAULT NULL,
  `current_cost` varchar(10) DEFAULT NULL,
  `hotels_ids` varchar(10) DEFAULT NULL,
  `transport_ids` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) DEFAULT NULL,
  `first_name` varchar(10) DEFAULT NULL,
  `last_name` varchar(10) DEFAULT NULL,
  `login` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `base_country` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users_routes`
--

CREATE TABLE `users_routes` (
  `user_id` int(10) DEFAULT NULL,
  `route_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

