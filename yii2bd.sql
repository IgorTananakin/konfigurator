-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 08 2018 г., 09:12
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `assembly`
--

CREATE TABLE `assembly` (
  `id` int(5) NOT NULL,
  `sound_card_id` int(5) NOT NULL,
  `video_card_id` int(5) NOT NULL,
  `ram_id` int(5) NOT NULL,
  `processor_id` int(11) NOT NULL,
  `hard_disc_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `motherboard_id` int(11) NOT NULL,
  `power_supply_id` int(11) NOT NULL,
  `cooling_system_id` int(11) NOT NULL,
  `corpus_id` int(11) NOT NULL,
  `network_card_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='сборка';

--
-- Дамп данных таблицы `assembly`
--

INSERT INTO `assembly` (`id`, `sound_card_id`, `video_card_id`, `ram_id`, `processor_id`, `hard_disc_id`, `driver_id`, `motherboard_id`, `power_supply_id`, `cooling_system_id`, `corpus_id`, `network_card_id`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `connector`
--

CREATE TABLE `connector` (
  `id` int(11) NOT NULL,
  `pcie_count` int(1) NOT NULL,
  `pci_count` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Таблица с которой должны быть совмещены элементы сборки: мат';

-- --------------------------------------------------------

--
-- Структура таблицы `cooling_system`
--

CREATE TABLE `cooling_system` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `socket_id` int(5) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cooling_system`
--

INSERT INTO `cooling_system` (`id`, `title`, `price`, `socket_id`, `power`) VALUES
(1, 'Deepcool GAMMAXX 300', '500.00', 5, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `corpus`
--

CREATE TABLE `corpus` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` int(5) NOT NULL,
  `size_hard_disc` decimal(2,1) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `corpus`
--

INSERT INTO `corpus` (`id`, `title`, `price`, `size`, `size_hard_disc`, `power`) VALUES
(1, 'Zalman Z1 Neo', '1500.00', 3, '3.0', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `driver`
--

CREATE TABLE `driver` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` int(5) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `driver`
--

INSERT INTO `driver` (`id`, `title`, `price`, `size`, `power`) VALUES
(1, 'Transcend TS8XDVDS-K Black', '1200.00', 1, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `hard_disk`
--

CREATE TABLE `hard_disk` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `socket_id` int(11) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hard_disk`
--

INSERT INTO `hard_disk` (`id`, `title`, `price`, `socket_id`, `power`) VALUES
(1, 'Western Digital WD Blue 1 TB (WD10EZEX)', '3400.00', 5, 70);

-- --------------------------------------------------------

--
-- Структура таблицы `motherboard`
--

CREATE TABLE `motherboard` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sound` varchar(30) NOT NULL,
  `pci_count` int(1) NOT NULL,
  `ide_count` int(1) NOT NULL,
  `graphical_scheme` varchar(30) NOT NULL,
  `socket_id` int(11) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `motherboard`
--

INSERT INTO `motherboard` (`id`, `title`, `price`, `sound`, `pci_count`, `ide_count`, `graphical_scheme`, `socket_id`, `power`) VALUES
(1, 'GIGABYTE GA-970A-DS3P FX (rev. 2.1)', '4900.00', '7.1CH, HDA', 5, 1, 'FOXCONN', 1251, 100);

-- --------------------------------------------------------

--
-- Структура таблицы `network_card`
--

CREATE TABLE `network_card` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='сетевая карта';

--
-- Дамп данных таблицы `network_card`
--

INSERT INTO `network_card` (`id`, `title`, `power`) VALUES
(1, 'TP-LINK TG-3269', 50);

-- --------------------------------------------------------

--
-- Структура таблицы `physical_size`
--

CREATE TABLE `physical_size` (
  `id` int(5) NOT NULL,
  `physical_size` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Таблица с которой должны быть совмещены элементы сборки: кор';

-- --------------------------------------------------------

--
-- Структура таблицы `power_supply`
--

CREATE TABLE `power_supply` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Таблица блок питания';

--
-- Дамп данных таблицы `power_supply`
--

INSERT INTO `power_supply` (`id`, `title`, `price`, `power`) VALUES
(1, 'FSP Group ATX-500PNR 500W', '1700.00', 500);

-- --------------------------------------------------------

--
-- Структура таблицы `processor`
--

CREATE TABLE `processor` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `socket_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `frequency` decimal(5,2) NOT NULL,
  `digit_capacity` int(3) NOT NULL,
  `keh_memory` int(10) NOT NULL,
  `load` int(3) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `processor`
--

INSERT INTO `processor` (`id`, `title`, `socket_id`, `price`, `frequency`, `digit_capacity`, `keh_memory`, `load`, `power`) VALUES
(1, 'IntelCoreI5', 0, 300, '0.00', 0, 0, 0, 0),
(2, 'IntelCoreI5', 0, 1000, '0.00', 0, 0, 0, 0),
(4, 'Intel Pentium Ivy Bridge', 0, 3000, '0.00', 0, 0, 0, 0),
(5, 'Intel Pentium Skylake', 0, 4170, '0.00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `ram`
--

CREATE TABLE `ram` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `manufacturer` varchar(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `frequency` int(6) NOT NULL,
  `sze` int(10) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='оперативная память';

--
-- Дамп данных таблицы `ram`
--

INSERT INTO `ram` (`id`, `title`, `manufacturer`, `price`, `frequency`, `sze`, `power`) VALUES
(1, 'Samsung DDR4 2400 DIMM 8Gb', '2400', '5700.00', 15, 8, 100);

-- --------------------------------------------------------

--
-- Структура таблицы `socket`
--

CREATE TABLE `socket` (
  `id` int(5) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Таблица с которой должны быть совмещены элементы сборки: про';

-- --------------------------------------------------------

--
-- Структура таблицы `sound_card`
--

CREATE TABLE `sound_card` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='звуковая карта';

--
-- Дамп данных таблицы `sound_card`
--

INSERT INTO `sound_card` (`id`, `title`, `price`, `power`) VALUES
(1, 'Creative Sound Blaster Audigy Fx', '2530.00', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `video_card`
--

CREATE TABLE `video_card` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `graphical_scheme` varchar(50) NOT NULL,
  `video_controler` varchar(30) NOT NULL,
  `size_video_memory` int(10) NOT NULL,
  `pci_count` int(1) NOT NULL,
  `pcie_count` int(1) NOT NULL,
  `power` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `video_card`
--

INSERT INTO `video_card` (`id`, `title`, `price`, `graphical_scheme`, `video_controler`, `size_video_memory`, `pci_count`, `pcie_count`, `power`) VALUES
(1, 'Palit GeForce GTX 1060 1506Mhz PCI-E 3.0 6144Mb 80', '28000.00', 'NVIDIA GeForce GTX 1060', 'МПФ', 100000, 2, 0, 150);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `assembly`
--
ALTER TABLE `assembly`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `connector`
--
ALTER TABLE `connector`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cooling_system`
--
ALTER TABLE `cooling_system`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `corpus`
--
ALTER TABLE `corpus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hard_disk`
--
ALTER TABLE `hard_disk`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `network_card`
--
ALTER TABLE `network_card`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `physical_size`
--
ALTER TABLE `physical_size`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `power_supply`
--
ALTER TABLE `power_supply`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `processor`
--
ALTER TABLE `processor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `socket`
--
ALTER TABLE `socket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sound_card`
--
ALTER TABLE `sound_card`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `video_card`
--
ALTER TABLE `video_card`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `assembly`
--
ALTER TABLE `assembly`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `corpus`
--
ALTER TABLE `corpus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `hard_disk`
--
ALTER TABLE `hard_disk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `network_card`
--
ALTER TABLE `network_card`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `physical_size`
--
ALTER TABLE `physical_size`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `power_supply`
--
ALTER TABLE `power_supply`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `processor`
--
ALTER TABLE `processor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `ram`
--
ALTER TABLE `ram`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `socket`
--
ALTER TABLE `socket`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sound_card`
--
ALTER TABLE `sound_card`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `video_card`
--
ALTER TABLE `video_card`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
