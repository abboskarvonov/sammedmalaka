-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 06 2022 г., 09:22
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `med`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifyCode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `address`, `message`, `verifyCode`) VALUES
(1, 'Abbos', 'abbos_karvonov1995@icloud.com', '+998995903162', 'Samarqand viloyati Bulung`ur tumani Yangiobod mahallasi', 'a', 'ieczkht');

-- --------------------------------------------------------

--
-- Структура таблицы `filial`
--

CREATE TABLE `filial` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_uz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_uz` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ru` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `filial`
--

INSERT INTO `filial` (`id`, `name_uz`, `name_ru`, `name_en`, `director_uz`, `director_ru`, `director_en`, `address_uz`, `address_ru`, `address_en`, `phone`, `img`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Namangan filiali', 'Наманганский филиал', 'Namangan branch', 'Yakubjonov Islom Inamjanovich', 'Алиев', 'Aliyev', 'Namangan shahar, Go\'zal dahasi, Chamanzor turar joy massivi, 52-uy.', 'Город Наманган, Гозальский район, жилой массив Чаманзор, дом 52.', 'Namangan city, Gozal district, Chamanzor residential area, 52.', '+998 (69) 237-27-58', '../../frontend/web/img/filial/filial_164390849261fc0d8ce60f561fc0d8ce60ed1643908492.jpg', 'nam_malaka@umail.uz', '2022-02-03 08:14:52', '2022-02-04 10:11:45'),
(2, 'Jizzax filiali', 'Джизакский филиал', 'Djizzakh branch', 'Isroilov Xabibulla Abdurazakovich', 'Исроилов Хабибулла Абдуразакович', 'Isroilov Khabibulla Abdurazakovich', 'Jizzax shahar, Toshloq mahallasi, Shifokorlar ko\'chasi, 2-uy.', 'г. Джизак, махалля Тошлок, улица Шифокорлар, 2', 'Jizzakh city, Toshloq mahalla, Shifokorlar street, 2', '+998 (72) 226-33-41', '../../frontend/web/img/filial/filial_164395051061fcb1ae2338961fcb1ae233851643950510.jpg', 'jiz-soglik@umail.uz', '2022-02-04 09:55:10', '2022-02-04 10:11:55'),
(3, 'Qo\'qon filiali', 'Кокандский филиал', 'Kokand branch', 'Hakimova Maxbuba Turobovna', 'Хакимова Маxбуба Туробовна', 'Hakimova Maxbuba Turobovna', 'Qo\'qon shahar, Sabrez ko\'chasi, 41-uy', 'г. Коканд, ул. Сабрез, 41', 'Kokand city, Sabrez street, 41', '+998 (73) 542-17-32', '../../frontend/web/img/filial/filial_164395147961fcb57776a1061fcb57776a0c1643951479.jpg', 'Malaka.oshirish@inbox.ru', '2022-02-04 10:11:19', '2022-02-04 10:11:19'),
(4, 'Guliston filiali', 'Гулистонский филиал', 'Guliston branch', 'Qarshiboyeva Matluba Erxanovna', 'Каршибоева Матлуба Эрхановна', 'Karshiboyeva Matluba Erkhanovna', 'Guliston shahar, G\'oliblar ko\'chasi, 46-uy.', 'г. Гулистан, улица Голибляр, 46.', 'Gulistan city, Goliblar street, 46.', '+998 (67) 227-31-39', '../../frontend/web/img/filial/filial_164395171261fcb6606f35661fcb6606f3501643951712.jpg', 'malakaguliston@mail.ru', '2022-02-04 10:15:12', '2022-02-04 10:15:12'),
(5, 'Urganch filiali', 'Ургенчский филиал', 'Urgench branch', 'Rajabova Umida Xudoyberganovna', 'Раджабова Умида Худойбергановна', 'Rajabova Umida Khudoyberganovna', 'Urganch shahar, Yo\'ldosh Bobojonov ko\'chasi, 1 yo\'lak, 1-uy.', 'г. Ургенч, улица Юлдаша Бобожонова, 1 коридор, 1 дом.', 'Urgench city, Yuldash Bobojonov street, 1 corridor, 1.', '+998 (62) 228-10-16', '../../frontend/web/img/filial/filial_164395200661fcb786e04e361fcb786e04da1643952006.jpg', 'Malakaurg@mail.ru', '2022-02-04 10:20:06', '2022-02-04 10:20:06'),
(6, 'Andijon filiali', 'Андижанский филиал', 'Andijon branch', 'To\'raxo\'jaeva Gulnora Anvarovna', 'Тураходжаева Гулнора Анваровна', 'Turahojaeva Gulnora Anvarovna', 'Andijon shahar, Buvasadin ko\'chasi, 18-uy.', 'г. Андижан, улица Бувасадин, 18.', 'Andijan city, Buvasadin street, 18.', '+998 (74) 223-30-50', '../../frontend/web/img/filial/filial_164395218761fcb83b8cf7d61fcb83b8cf771643952187.jpg', 'andmalaka@umail.uz', '2022-02-04 10:23:07', '2022-02-04 10:23:07'),
(7, 'Navoiy filiali', 'Навоийский филиал', 'Navoi branch', 'To\'raqulov Vali Norqulovich', 'Туракулов Вали Норкулович', 'Turakulov Vali Norkulovich', 'Navoiy shahar, Sputnik qo\'rg\'oni, S.Ayniy ko\'chasi, 91-a uy.', 'г. Навои, крепость Спутник, улица С.Айни, дом 91-а.', 'Navoi city, Sputnik fortress, S.Aini street, house 91-a.', '+998 (79) 226-42-61', '../../frontend/web/img/filial/filial_164395314461fcbbf81aa2861fcbbf81aa1f1643953144.jpg', 'malakanv@umail.uz', '2022-02-04 10:39:04', '2022-02-04 10:39:04'),
(8, 'Qarshi filiali', 'Каршинский филиал', 'Karshi branch', 'Rustamov Malik Muqumovich', 'Рустамов Малик Мукумович', 'Rustamov Malik Mukumovich', 'Qarshi shahar, Qarlukbogot ko\'chasi, 86-uy.', 'г.Карши, ул.Карлукбогот, 86.', 'Karshi city, Qarlukbogot street, 86.', '+998 (75) 225-14-42', '../../frontend/web/img/filial/filial_164395334061fcbcbc5cc7e61fcbcbc5cc6f1643953340.jpg', 'urtatib@mail.ru', '2022-02-04 10:42:20', '2022-02-04 10:42:20'),
(9, 'Buxoro filiali', 'Бухарский филиал', 'Bukhara branch', 'Jumaev Xalil Jumaevich', 'Джумаев Халил Джумаевич', 'Jumaev Khalil Jumaevich', 'Buxoro shahar, Sheyxon ko\'chasi, 114-uy.', 'г. Бухара, ул. Шейхана, 114', 'Bukhara city, Sheykhan street, 114', '+998 (65) 228-50-36', '../../frontend/web/img/filial/filial_164395371461fcbe32d825461fcbe32d824f1643953714.jpg', 'shaxnoza_ruzieva@mail.ru', '2022-02-04 10:48:34', '2022-02-04 10:48:34'),
(11, 'Termiz filiali', 'Термезский филиал', 'Termez branch', 'Safarov Zokir Amonovich', 'Сафаров Зокир Амонович', 'Safarov Zokir Amonovich', 'Termiz shahar, Eski shahar mahallasi, Birdamlik ko\'chasi, 20-uy.', 'г.Термез, махалля Эски шахр, улица Бирдамлик, 20.', 'Termez city, Eski shahr mahalla, Birdamlik street, 20.', '+998 (76) 223-71-48', '../../frontend/web/img/filial/filial_164395437961fcc0cb92dae61fcc0cb92daa1643954379.png', 't.malaka@umail.uz', '2022-02-04 10:59:39', '2022-02-04 10:59:39'),
(12, 'Nukus filiali', 'Нукусский филиал', 'Nukus branch', 'Kaipbekova Gulbaxar Konysbaevna', 'Каипбекова Гулбахар Конысбаевна', 'Kaipbekova Gulbaxar Konysbaevna', 'Nukus shahar, Ashxabot ko\'chasi.', 'г. Нукус, ул. Ашхабадская.', 'Nukus city, Ashgabat street.', '+998 (61) 224-75-67', '../../frontend/web/img/filial/filial_164395463761fcc1cd9128761fcc1cd9127e1643954637.jpg', 'nukusmalaka@mail.ru', '2022-02-04 11:03:57', '2022-02-04 11:03:57'),
(13, 'Respublika O\'rta tibbiyot va farmatsevt xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi', 'Республиканский центр повышения квалификации и специализации средних медицинских и фармацевтических работников', 'Republican Center for Advanced Training and Specialization of Secondary Medical and Pharmaceutical Workers', 'Musadjanova Lolaxon Xalildjanovna', 'Мусаджанова Лолахон Халилджановна', 'Musadjanova Lolaxon Xalildjanovna', 'Toshkent shahar, Olmazor tumani, Shifokorlar-2 ko\'chasi, 14-uy. ', 'Город Ташкент, Алмазарский район, улица Шифокорлар-2, дом 14.', 'Tashkent city, Almazar district, Shifokorlar-2 street, 14.', '+998 (71) 214-51-60', '../../frontend/web/img/filial/filial_164395505261fcc36c8468f61fcc36c8468a1643955052.jpg', 'med2005@bk.ru', '2022-02-04 11:10:52', '2022-02-04 11:10:52');

-- --------------------------------------------------------

--
-- Структура таблицы `gallereya`
--

CREATE TABLE `gallereya` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallereya`
--

INSERT INTO `gallereya` (`id`, `name_uz`, `name_ru`, `name_en`, `gallery_id`, `type`, `photo`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'Тест', 'Test', NULL, 1, '../../frontend/web/img/gallery/photo_164438370862034ddc2708b62034ddc270881644383708.jpg', 'test1644383708', '2022-02-09 10:15:08', '2022-02-09 10:15:08'),
(2, 'Test', 'Тест', 'Test', 1, 2, '../../frontend/web/img/gallery/photo_164438372962034df10019762034df1001941644383729.jpg', 'test1644383729', '2022-02-09 10:15:29', '2022-02-09 10:15:29'),
(3, 'Test', 'Тест', 'Test', 1, 2, '../../frontend/web/img/gallery/photo_164438373262034df492bee62034df492be41644383732.jpg', 'test1644383732', '2022-02-09 10:15:32', '2022-02-09 10:15:32'),
(4, 'Test', 'Тест', 'Test', 9, 2, '../../frontend/web/img/gallery/photo_164438373562034df76d8a962034df76d8a51644383735.jpg', 'test1644431095', '2022-02-09 10:15:35', '2022-02-09 23:24:55'),
(5, 'Test', 'Тест', 'Test', 1, 2, '../../frontend/web/img/gallery/photo_164438373762034df9b307362034df9b30701644383737.jpg', 'test1644383737', '2022-02-09 10:15:37', '2022-02-09 10:15:37'),
(6, 'Test 1', 'Test 1', 'Test 1', NULL, 1, '../../frontend/web/img/gallery/photo_164438376662034e16c089162034e16c088e1644383766.jpg', 'test11644383766', '2022-02-09 10:16:06', '2022-02-09 10:16:06'),
(7, 'Test 1', 'Test 1', 'Test 1', 6, 1, '../../frontend/web/img/gallery/photo_164438377462034e1e4f24462034e1e4f2411644383774.jpg', 'test11644383774', '2022-02-09 10:16:14', '2022-02-09 10:16:14'),
(8, 'Test 1', 'Test 1', 'Test 1', 6, 1, '../../frontend/web/img/gallery/photo_164438377762034e211d4c562034e211d4c11644383777.jpg', 'test11644383777', '2022-02-09 10:16:17', '2022-02-09 10:16:17'),
(9, 'Test 1', 'Test 1', 'Test 1', 6, 1, '../../frontend/web/img/gallery/photo_164438377962034e235d08b62034e235d0881644383779.jpg', 'test11644383779', '2022-02-09 10:16:19', '2022-02-09 10:16:19');

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `name_uz`, `name_ru`, `name_en`, `link`, `img`) VALUES
(1, 'O\'zbekiston Respublikasi Prezidenti veb sahifasi', 'Сайт Президента Республики Узбекистан', 'Website of the President of the Republic of Uzbekistan', 'https://president.uz/ru', '../../frontend/web/img/links/link_164438277862034a3a2126762034a3a212641644382778.png'),
(2, 'O\'zbekiston Respublikasi Hukumat portali', 'Правительственный портал Республики Узбекистан', 'Government Portal of the Republic of Uzbekistan', 'https://www.gov.uz/uz', '../../frontend/web/img/links/link_164438284362034a7b7725662034a7b772501644382843.jpg'),
(3, 'Yagona interaktiv davlat xizmatlari portali', 'Единый интерактивный портал госуслуг', 'Single interactive public services portal', 'https://my.gov.uz/ru', '../../frontend/web/img/links/link_164438289762034ab1735d062034ab1735cd1644382897.png'),
(4, 'O\'zbekiston Respublikasi Prezidentining matbuot xizmati veb sahifasi', 'Сайт Пресс-службы Президента Республики Узбекистан', 'Website of the Press Service of the President of the Republic of Uzbekistan', 'https://president.uz/uz', '../../frontend/web/img/links/link_164438296662034af66402d62034af6640271644382966.png'),
(5, '2017-2021 yillarda O\'zbekiston Respublikasini rivojlantirishning beshta ustuvor yo\'nalishi bo\'yicha harakatlar strategiyasi', 'Стратегия действий по пяти приоритетным направлениям развития Республики Узбекистан на 2017-2021 годы', 'Strategy of actions on five priority directions of development of the Republic of Uzbekistan for 2017-2021', 'http://strategy.gov.uz/uz', '../../frontend/web/img/links/link_164438306162034b557e5a662034b557e5a31644383061.jpg'),
(6, 'O\'zbekiston Respublikasi Qonun hujjatlari ma\'lumotlari milliy bazasi', 'Национальная база данных законодательства Республики Узбекистан', 'National Database of Legislation of the Republic of Uzbekistan', 'https://lex.uz/uz/', '../../frontend/web/img/links/link_164438317862034bcabef6962034bcabef631644383178.png');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name_uz`, `name_ru`, `name_en`, `type`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Bosh sahifa', 'Главная', 'Home', 1, 'boshsahifa', '2022-02-02 12:22:40', '2022-02-02 12:22:40'),
(2, 'Filial haqida', 'О филиале', 'About the branch', 2, 'filialhaqida', '2022-02-02 12:23:27', '2022-02-02 12:23:27'),
(3, 'Hududiy filiallar', 'Региональные отделения', 'Regional branches', 1, 'hududiyfiliallar', '2022-02-02 12:24:40', '2022-02-02 12:24:40'),
(4, 'Matbuot xizmati', 'Пресс-служба', 'Press service', 2, 'matbuotxizmati', '2022-02-02 12:26:18', '2022-02-02 12:26:18'),
(6, 'Interaktiv xizmatlar', 'Интерактивные услуги', 'Interactive services', 2, 'interaktivxizmatlar', '2022-02-02 06:01:20', '2022-02-02 06:01:20'),
(7, 'Bog\'lanish', 'Контакт', 'Contact', 1, 'boglanish', '2022-02-02 06:02:27', '2022-02-02 06:02:27');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1643692722),
('m130524_201442_init', 1643692724),
('m190124_110200_add_verification_token_column_to_user_table', 1643692724);

-- --------------------------------------------------------

--
-- Структура таблицы `multi_menu`
--

CREATE TABLE `multi_menu` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `multi_menu`
--

INSERT INTO `multi_menu` (`id`, `name_uz`, `name_ru`, `name_en`, `sub_menu_id`, `link`, `created_at`, `updated_at`) VALUES
(2, 'O\'zbekiston Respublikasi qonunlari', 'Законы Республики Узбекистан', 'Laws of the Republic of Uzbekistan', 4, 'ozbekistonrespublikasiqonunlari', '2022-02-12 12:30:17', '2022-02-12 12:30:17'),
(3, 'Prizidentning farmon, qaror va farmoyishlari', 'Указы, постановления и распоряжения Президента', 'Decrees, resolutions and orders of the President', 4, 'prizidentningfarmonqarorvafarmoyishlari', '2022-02-12 12:30:34', '2022-02-12 12:30:34'),
(4, 'Vazirlar Mahkamasi qaror va farmoyishlari', 'Постановления и распоряжения Кабинета Министров', 'Decisions and orders of the Cabinet of Ministers', 4, 'vazirlarmahkamasiqarorvafarmoyishlari', '2022-02-12 12:30:52', '2022-02-12 12:30:52'),
(5, 'Oʻzbekiston Respublikasi davlat ramzlari', 'Государственные символы Республики Узбекистан', 'State symbols of the Republic of Uzbekistan', 4, 'ozbekistonrespublikasidavlatramzlari', '2022-02-12 12:35:00', '2022-02-12 12:35:00');

-- --------------------------------------------------------

--
-- Структура таблицы `other_page`
--

CREATE TABLE `other_page` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fish_uz` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fish_ru` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fish_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qabul_uz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qabul_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qabul_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `other_page`
--

INSERT INTO `other_page` (`id`, `name_uz`, `name_ru`, `name_en`, `fish_uz`, `fish_ru`, `fish_en`, `phone`, `email`, `qabul_uz`, `qabul_ru`, `qabul_en`, `type`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi  Samarqand filiali direktori', 'Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi  Samarqand filiali direktori', 'Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi  Samarqand filiali direktori', 'Egamov Xasan Xudoyberdiyevich', 'Egamov Xasan Xudoyberdiyevich', 'Egamov Xasan Xudoyberdiyevich', '+998 (66) 233-68-42', 'sam.malaka@mail.ru', 'Dushanbadan-jumagacha', 'Dushanbadan-jumagacha', 'Dushanbadan-jumagacha', 1, '../../frontend/web/img/otherpage/page_16455265226214bdfa033376214bdfa033341645526522.png', '2022-02-22 15:42:02', '2022-02-22 15:42:02'),
(2, 'Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi  Samarqand filiali direktori', 'Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi  Samarqand filiali direktori', 'Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi  Samarqand filiali direktori', 'Egamov Xasan Xudoyberdiyevich', 'Egamov Xasan Xudoyberdiyevich', 'Egamov Xasan Xudoyberdiyevich', '+998 (66) 233-68-42', 'sam.malaka@mail.ru', 'Dushanbadan-jumagacha', 'Dushanbadan-jumagacha', 'Dushanbadan-jumagacha', 2, '../../frontend/web/img/otherpage/page_16455265326214be045ff676214be045ff601645526532.png', '2022-02-22 15:42:12', '2022-02-22 15:42:12');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_uz` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ru` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `sub_menu_id` int(11) DEFAULT NULL,
  `multi_menu` int(11) DEFAULT NULL,
  `link_page_id` int(11) DEFAULT NULL,
  `created_at` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name_uz`, `name_ru`, `name_en`, `content_uz`, `content_ru`, `content_en`, `type`, `img`, `view`, `link`, `menu_id`, `sub_menu_id`, `multi_menu`, `link_page_id`, `created_at`, `updated_at`) VALUES
(1, 'Yangilik', 'Новости', 'News', '<p><strong>Tarix</strong>&nbsp;(<a href=\"https://uz.wikipedia.org/wiki/Arab_tili\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Arab tili\">arabcha</a>: التاريخ,&nbsp;<em>oʻtmish; davr, vaqt, era; sana</em>)&nbsp;&mdash;&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=O%CA%BBtmish&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Oʻtmish (sahifa yaratilmagan)\">oʻtmish</a>&nbsp;voqealar haqida&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Axborot\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Axborot\">axborot</a>&nbsp;ochish, yigʻish, tartiblashtirish va namoyish etish bilan shugʻullanuvchi&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fan</a>. Tarix bilan shugʻullanuvchi olimlar tarixchilar, deb ataladi. Tarix fani voqealar ketma-ketligini tahlil etadi va ularning sabab va samaralarini tizimlashtiradi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-2\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[2]</a></sup>&nbsp;Tarixchilar tarix tabiati va foydasi ustida bahs olib borishadi. Bunda ushbu&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fanning</a>&nbsp;oʻzi ham oʻrganiladi va zamonaviy muammolarni uning yordamida hal qilishga uriniladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Tosh1-3\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[3]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-4\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[4]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-5\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[5]</a></sup>&nbsp;Biror madaniyatga oid, biroq tashqi manbalarga asoslanmagan hikoyalar (masalan,&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Alpomish\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Alpomish\">Alpomish</a>&nbsp;haqida asotirlar) tarixiy mavzu emas, balki&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=Madaniy_meros&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Madaniy meros (sahifa yaratilmagan)\">madaniy meros</a>&nbsp;sanaladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-6\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[6]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Low1-7\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[7]</a></sup></p>\r\n\r\n<p>Tarix&nbsp;&mdash; 1) tabiat va jamiyatdagi har qanday rivojlanish jarayoni. Shu maʼnoda olamning yaratilish tarixi, Yer tarixi, barcha fanlar tarixi va boshqa tushuniladi; 2) insoniyat va uning mahsuli boʻlgan tamaddunlar rivoji, jamiyat va davlatlar oʻtmishi taraqqiyoti jarayonini oʻrganuvchi fan.</p>\r\n\r\n<p>Tarix fani&nbsp;&mdash; insoniyatning butun oʻtmishi davomida jamiyat hayotida sodir boʻlgan voqea-hodisalar, jarayonlarni (jamiyat rivojini) yaxlit bir tarzda oʻrganadi. Tarix fani ijtimoiy-gumanitar fanlar (falsafa, sotsiologiya, iqtisod, psixologiya, sanʼatshunoslik va boshqalar) tizimining tarkibiy qismi. Tarix fanining bu guruhdagi oʻrni uning tadqiqot predmeti va usullari bilan belgilanadi. Turli ijtimoiy va gumanitar fanlar jamiyat hayotining alohida jihatlarini oʻrgansa, tarix fanining tadqiqot obʼyekti&nbsp;&mdash; aholi, jamiyat, mamlakat, davlat hayotining oʻtmishi va hoziri haqidagi faktlarni yigʻish, taxlil qilish, toʻplangan bilimlarni maʼlum bir tizimga solish va nazariy jihatdan umumlashtirishdir. Tarix fani oʻtmishda sodir boʻlgan jarayon va hodisalar orasidagi oʻzaro bogʻliqlik, ularning ildizi, tarixni harakatlantiruvchi sabablar, uning mantigʻi va maʼnosini koʻrish imkonini beradi. Ijtimoiy va gumanitar fanlar tarix tadqiqotlari natijalariga tayanadi. Fanlararo yondashuv jamiyat haqidagi yaxlit tasavvurni shakllantirib, oʻtmishni va hozirni anglash orqali jamiyat rivoji istiqbolini koʻra bilishdek muhim vazifani xal qiladi.</p>\r\n', '<p>Новости</p>\r\n', '<p>News</p>\r\n', 2, '../../frontend/web/img/pages/page_164408066561feae192131c61feae19213121644080665.jpg', '14', 'yangilik1644127031', 4, 5, NULL, NULL, '2022-02-05 10:04:25', '2022-02-06 10:57:11'),
(2, 'Tuzilma', 'Структура', 'Structure', '<p style=\"text-align: center;\"><strong>Respublika o`rta tibbiyot va farmaseft xodimlar malakasini oshirish va ularni ixtisoslashtirish markazi </strong></p>\r\n\r\n<p style=\"text-align: center;\"><strong>Samarqand</strong> <strong>filiali tashkiliy</strong></p>\r\n\r\n<p style=\"text-align: center;\"><strong>TUZILMASI</strong></p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/web/../../frontend/web/upload/global/T.jpg\" style=\"width:100%\" /></p>\r\n', '', '', 1, NULL, '7', 'tuzilma1644081324', 2, 16, NULL, NULL, '2022-02-05 10:15:24', '2022-02-05 10:15:24'),
(7, 'Oʻzbekiston Respublikasi davlat bayrogʻi', 'Государственный флаг Республики Узбекистан', 'State flag of the Republic of Uzbekistan', '<p>&quot;O&#39;zbekiston Respublikasi Davlat bayrog&#39;i to&#39;g&#39;risida&quot;gi qonun 1991 yil 18-noyabrda O&#39;zbekiston Respublikasi Oliy Kengashining navbatdan tashqari o&#39;tkazilgan VII sessiyasida qabul qilingan. Davlat bayrog&#39;i va uning ramzi bugungi O&#39;zbekiston sarhadida qadimda mavjud bo&#39;lgan davlatlar bilan tarixan bog&#39;liqligini anglatadi hamda respublikaning milliy-madaniy an&#39;analarini o&#39;zida mujassamlashtiradi. Bayroqdagi moviy rang tiriklik mazmuni aks etgan mangu osmon va obihayot ramzi. Timsollar tilida bu - yaxshilikni, donishmandlikni, halollikni, shon-shuhrat va sadoqatni bildiradi. Binobarin, Amir Temur davlati bayrog&#39;ining rangi ham moviy rangda edi.Bayroqdagi oq rang - muqaddas tinchlik ramzi bo&#39;lib, u kun charog&#39;onligi va koinot yoritkichlari bilan uyg&#39;unlashib ketadi. Oq rang - poklik, beg&#39;uborlik, soflikni, orzu va hayollar tozaligi, ichki go&#39;zallikka intilishning timsoli.Yashil rang - tabiatning yangilanish ramzi. U ko&#39;pgina xalqlarda navqironlik, umid va shodumonlik timsoli hisoblanadi.Qizil chiziqlar - vujudimizda jo&#39;shib oqayotgan hayotiy qudrat irmoqlarini anglatadi.Navqiron yarim oy tasviri bizning tarixiy an&#39;analarimiz bilan bog&#39;liq. Ayni paytda u qo&#39;lga kiritilgan mustaqilligimiz ramzi ham.Yulduzlar barcha uchun ruhoniy, ilohiy timsol sanalgan. O&#39;zbekiston Respublikasi Davlat bayrog&#39;idagi 12 yulduz tasviri ham tarixiy an&#39;analarimiz, qadimgi yilnomamizga bevosita aloqador. Bizning o&#39;n ikki yulduzga bo&#39;lgan e&#39;tiborimiz O&#39;zbekiston sarhadidagi qadimgi davlatlar ilmiy tafakkurida nujum ilmi taraqqiy etganligi bilan ham izohlanadi.Davlat bayrog&#39;imizdagi 12 yulduz tasvirini o&#39;zbek xalqi madaniyatining qadimiyligi, uning komillikka, o&#39;z tuprog&#39;ida saodatga intilishi ramzi sifatida tushunish lozim.</p>\r\n', '<p>Закон &quot;О Государственном флаге Республики Узбекистан&quot; принят 18 ноября 1991 года на восьмой сессии Верховного Совета Республики Узбекистан. Символика Государственного флага Республики Узбекистан продолжает лучшие традиции, свойственные флагам могущественных держав, существовавших на территории нашей страны, одновременно отражает природные особенности республики, национальную и культурную самобытность народа. Небесно-голубой цвет на флаге - символ голубого неба и чистой воды. Лазурный цвет почитаем на Востоке, его избрал когда-то для своего флага и великий Амир Тимур. Белый цвет - символ мира и чистоты. Молодое независимое государство должно преодолеть на своем пути высокие перевалы. Белый цвет на флаге означает доброе пожелание, чтобы путь был чист и светел. Зеленый цвет - олицетворение благодатной природы. В настоящее время во всем мире ширится движение по охране окружающей среды, символом которого тоже является зеленый цвет. Красные полосы - это жизненные силы, пульсирующие в каждом живом существе, символ жизни. Полумесяц соответствует многовековой традиции народа Узбекистана. Полумесяц и звезды - символ безоблачного неба мира. На нашем флаге 12 звезд. Число 12 считается знаком совершенства.</p>\r\n', '<p>The law about &quot;The State Flag of the Republic of Uzbekistan&quot; was adopted on November 18 in 1991 in the 8th session of the Supreme Council of Uzbekistan. The flag of our country is a symbol of the sovereignty of the Republic. The national flag of the Republic represents the country internationally when official delegations from Uzbekistan visit foreign countries, as well as at conferences, world exhibition, and sports competitions. The national flag of the Republic is a right-angled colored cloth of three horizontal stripes: blue, white and green. Blue is the symbol of the sky and water, which are the main source of life. Mainly, blue was the color of the state flag of Temur. White is the traditional symbol of peace and good luck, as Uzbek people say &quot;Ok yul&quot;. Green is the color of nature and new life and good harvest. Two thin red stripes symbolize the power of life. There is a new moon, which symbolizes the newly independent Republic. There are twelve stars, which stand for spiritual sign. The stars also signify the historical traditions of the Uzbek people, as well as ancient solar calendar. A particular attention to twelve stars in the flag is explained yet by another suggestion, that in the states previously existed in the territory of modern Uzbekistan the scientific thought as &quot;Astrology&quot; had seen its rise. The stars in the Uzbek flag also point to the ancient roots of local culture, the aspirations of Uzbek people towards perfection and loyalty.</p>\r\n', 2, '../../frontend/web/img/pages/page_164408176461feb264d40c961feb264d40c11644081764.gif', '1', 'ozbekistonrespublikasidavlatbayrogi1644651358', 2, 4, 5, NULL, '2022-02-05 10:22:44', '2022-02-12 12:35:58'),
(8, 'Oʻzbekiston Respublikasi Davlat gerbi', 'Государственный герб Республики Узбекистан', 'State emblem of the Republic of Uzbekistan', '<p>&quot;O&#39;zbekiston Respublikasi Davlat gerbi to&#39;g&#39;risida&quot;gi Qonun 1992-yil 2-iyulda O&#39;zbekiston Respublikasi Oliy Kengashining X-sessiyasida qabul qilingan. O&#39;zbekiston Respublikasining Davlat gerbi gullagan vodiy uzra charaqlab turgan quyosh tasviridan hamda so&#39;l tomonida bug&#39;doy boshoqlari, o&#39;ng tomonida ochilgan paxta chanoqlari suvrati tushirilgan chambardan iborat. Gerbning yuqori qismida respublika jipsligining ramzi sifatida sakkiz qirrali yulduz tasvirlangan: sakkiz qirra ichida joylashgan yarim oy va yulduz musulmonlarning qutlug&#39; ramzidir. Gerbning markazida himmat, olijanoblik va fidoyilik timsoli bo&#39;lgan afsonaviy Xumo qushi qanotlarini yozib turibdi. Ushbu ramz va timsollar xalqimizning tinchlik, yaxshilik, baxt-saodat, farovonlik yo&#39;lidagi orzu-umidlarini ifodalaydi. Gerbning pastki qismida respublika Davlat bayrog&#39;ini ifoda etuvchi chambar lentasining bandiga &quot;O&#39;zbekiston&rdquo; deb yozib qo&#39;yilgan.</p>\r\n', '<p>Закон &quot;О Государственном гербе Республики Узбекистан&quot; принят 2 июля 1992 года на десятой сессии Верховного Совета Республики Узбекистан. В центре герба изображена птица Хумо с раскрытыми крыльями - символ счастья и свободолюбия. Наш великий предок Алишер Навои характеризовал птицу Хумо как самое доброе из всех живых существ. В верхней части герба находится восьмигранник, символизирующий знак утверждения республики, внутри -полумесяц со звездой. Изображение солнца - пожелание, чтобы путь нашего государства был озарен ярким светом. Одновременно оно указывает на уникальные природно-климатические условия республики. Колосья - символ хлеба насущного, стебли с раскрывающимися коробочками хлопка - главное богатство нашей солнечной Земли, прославившее ее во всем мире. Колосья и коробочки хлопка, перевитые лентой Государственного флага, означают консолидацию народов, проживающих в республике.</p>\r\n', '<p>The law &quot;On the State Emblem of the Republic of Uzbekistan&quot; was adopted on July 2, 1992 at the tenth session of the Supreme Council of the Republic of Uzbekistan. In the center of the coat of arms is depicted the bird Humo with spread wings - a symbol of happiness and love of freedom. Our great ancestor Alisher Navoi characterized the Humo bird as the kindest of all living beings. In the upper part of the coat of arms there is an octahedron, symbolizing the sign of the approval of the republic, inside there is a crescent moon with a star. The image of the sun is a wish that the path of our state be illuminated with bright light. At the same time, it points to the unique natural and climatic conditions of the republic. Ears are a symbol of our daily bread, stems with expanding cotton bolls are the main wealth of our sunny Earth, which made it famous all over the world. Ears and bolls of cotton entwined with the ribbon of the State Flag mean the consolidation of the peoples living in the republic.</p>\r\n', 2, '../../frontend/web/img/pages/page_164408197661feb3388701e61feb3388700c1644081976.gif', '0', 'ozbekistonrespublikasidavlatgerbi1644651397', 2, 4, 5, NULL, '2022-02-05 10:26:16', '2022-02-12 12:36:37'),
(9, 'Oʻzbekiston Respublikasi Davlat madhiyasi', 'Государственный гимн Республики Узбекистан', 'State Anthem of the Republic of Uzbekistan', '<p style=\"text-align:justify\">&quot;O&#39;zbekiston Respublikasining davlat madhiyasi to&#39;g&#39;risida&quot;gi Qonun 1992 yil 10 dekabrda O&#39;zbekiston Respublikasi Oliy Kengashining o&#39;n birinchi sessiyasida qabul qilingan.</p>\r\n\r\n<p>Mutal Burhonov musiqasi<br />\r\nAbdulla Oripov so&#39;zi</p>\r\n\r\n<p>Serquyosh hur o&#39;lkam, elga baxt, najot,<br />\r\nSen o&#39;zing do&#39;stlarga yo&#39;ldosh, mehribon!<br />\r\nYashnagay to abad ilmu fan, ijod,<br />\r\nShuhrating porlasin toki bor jahon!<br />\r\n<br />\r\nOltin bu vodiylar - jon O&#39;zbekiston,<br />\r\nAjdodlar mardona ruhi senga yor!<br />\r\nUlug&#39; xalq qudrati jo&#39;sh urgan zamon,<br />\r\nOlamni mahliyo aylagan diyor!<br />\r\n<br />\r\nBag&#39;ri keng o&#39;zbekning o&#39;chmas iymoni,<br />\r\nErkin, yosh avlodlar senga zo&#39;r qanot!<br />\r\nIstiqlol mash&#39;ali tinchlik posboni,<br />\r\nXaqsevar, ona yurt, mangu bo&#39;l obod!<br />\r\n<br />\r\nOltin bu vodiylar - jon O&#39;zbekiston,<br />\r\nAjdodlar mardona ruhi senga yor!<br />\r\nUlug&#39; xalq qudrati jo&#39;sh urgan zamon,<br />\r\nOlamni mahliyo aylagan diyor!</p>\r\n', '<p>Закон &quot;О Государственном гимне Республики Узбекистан&quot; принят 10 декабря 1992 года на одиннадцатой сессии Верховного Совета Республики Узбекистан.</p>\r\n\r\n<p>Музыка - Мутала Бурханова<br />\r\nСлова - Абдуллы Орипова</p>\r\n\r\n<p>Serquyosh hur o&#39;lkam, elga baxt, najot,<br />\r\nSen o&#39;zing do&#39;stlarga yo&#39;ldosh, mehribon!<br />\r\nYashnagay to abad ilmu fan, ijod,<br />\r\nShuhrating porlasin toki bor jahon!<br />\r\n<br />\r\nOltin bu vodiylar - jon O&#39;zbekiston,<br />\r\nAjdodlar mardona ruhi senga yor!<br />\r\nUlug&#39; xalq qudrati jo&#39;sh urgan zamon,<br />\r\nOlamni mahliyo aylagan diyor!<br />\r\n<br />\r\nBag&#39;ri keng o&#39;zbekning o&#39;chmas iymoni,<br />\r\nErkin, yosh avlodlar senga zo&#39;r qanot!<br />\r\nIstiqlol mash&#39;ali tinchlik posboni,<br />\r\nXaqsevar, ona yurt, mangu bo&#39;l obod!<br />\r\n<br />\r\nOltin bu vodiylar - jon O&#39;zbekiston,<br />\r\nAjdodlar mardona ruhi senga yor!<br />\r\nUlug&#39; xalq qudrati jo&#39;sh urgan zamon,<br />\r\nOlamni mahliyo aylagan diyor!</p>\r\n', '<p>The law &quot;On national anthem of the Republic of Uzbekistan&quot; was adopted on the December 10, 1992 at the 11th session of the Supreme Council of Uzbekistan.</p>\r\n\r\n<p>Poem by A. Aripov<br />\r\nMusic by M. Burkhanov</p>\r\n\r\n<p>Serquyosh hur o&#39;lkam, elga baxt, najot,<br />\r\nSen o&#39;zing do&#39;stlarga yo&#39;ldosh, mehribon!<br />\r\nYashnagay to abad ilmu fan, ijod,<br />\r\nShuhrating porlasin toki bor jahon!<br />\r\n<br />\r\nOltin bu vodiylar - jon O&#39;zbekiston,<br />\r\nAjdodlar mardona ruhi senga yor!<br />\r\nUlug&#39; xalq qudrati jo&#39;sh urgan zamon,<br />\r\nOlamni mahliyo aylagan diyor!<br />\r\n<br />\r\nBag&#39;ri keng o&#39;zbekning o&#39;chmas iymoni,<br />\r\nErkin, yosh avlodlar senga zo&#39;r qanot!<br />\r\nIstiqlol mash&#39;ali tinchlik posboni,<br />\r\nXaqsevar, ona yurt, mangu bo&#39;l obod!<br />\r\n<br />\r\nOltin bu vodiylar - jon O&#39;zbekiston,<br />\r\nAjdodlar mardona ruhi senga yor!<br />\r\nUlug&#39; xalq qudrati jo&#39;sh urgan zamon,<br />\r\nOlamni mahliyo aylagan diyor!</p>\r\n', 2, '../../frontend/web/img/pages/page_164408242061feb4f48167b61feb4f4816401644082420.png', '0', 'ozbekistonrespublikasidavlatmadhiyasi1644651407', 2, 4, 5, NULL, '2022-02-05 10:33:40', '2022-02-12 12:36:47'),
(10, 'Yangilik', 'Новости', 'News', '<p><strong>Tarix</strong>&nbsp;(<a href=\"https://uz.wikipedia.org/wiki/Arab_tili\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Arab tili\">arabcha</a>: التاريخ,&nbsp;<em>oʻtmish; davr, vaqt, era; sana</em>)&nbsp;&mdash;&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=O%CA%BBtmish&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Oʻtmish (sahifa yaratilmagan)\">oʻtmish</a>&nbsp;voqealar haqida&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Axborot\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Axborot\">axborot</a>&nbsp;ochish, yigʻish, tartiblashtirish va namoyish etish bilan shugʻullanuvchi&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fan</a>. Tarix bilan shugʻullanuvchi olimlar tarixchilar, deb ataladi. Tarix fani voqealar ketma-ketligini tahlil etadi va ularning sabab va samaralarini tizimlashtiradi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-2\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[2]</a></sup>&nbsp;Tarixchilar tarix tabiati va foydasi ustida bahs olib borishadi. Bunda ushbu&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fanning</a>&nbsp;oʻzi ham oʻrganiladi va zamonaviy muammolarni uning yordamida hal qilishga uriniladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Tosh1-3\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[3]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-4\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[4]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-5\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[5]</a></sup>&nbsp;Biror madaniyatga oid, biroq tashqi manbalarga asoslanmagan hikoyalar (masalan,&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Alpomish\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Alpomish\">Alpomish</a>&nbsp;haqida asotirlar) tarixiy mavzu emas, balki&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=Madaniy_meros&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Madaniy meros (sahifa yaratilmagan)\">madaniy meros</a>&nbsp;sanaladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-6\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[6]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Low1-7\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[7]</a></sup></p>\r\n\r\n<p>Tarix&nbsp;&mdash; 1) tabiat va jamiyatdagi har qanday rivojlanish jarayoni. Shu maʼnoda olamning yaratilish tarixi, Yer tarixi, barcha fanlar tarixi va boshqa tushuniladi; 2) insoniyat va uning mahsuli boʻlgan tamaddunlar rivoji, jamiyat va davlatlar oʻtmishi taraqqiyoti jarayonini oʻrganuvchi fan.</p>\r\n\r\n<p>Tarix fani&nbsp;&mdash; insoniyatning butun oʻtmishi davomida jamiyat hayotida sodir boʻlgan voqea-hodisalar, jarayonlarni (jamiyat rivojini) yaxlit bir tarzda oʻrganadi. Tarix fani ijtimoiy-gumanitar fanlar (falsafa, sotsiologiya, iqtisod, psixologiya, sanʼatshunoslik va boshqalar) tizimining tarkibiy qismi. Tarix fanining bu guruhdagi oʻrni uning tadqiqot predmeti va usullari bilan belgilanadi. Turli ijtimoiy va gumanitar fanlar jamiyat hayotining alohida jihatlarini oʻrgansa, tarix fanining tadqiqot obʼyekti&nbsp;&mdash; aholi, jamiyat, mamlakat, davlat hayotining oʻtmishi va hoziri haqidagi faktlarni yigʻish, taxlil qilish, toʻplangan bilimlarni maʼlum bir tizimga solish va nazariy jihatdan umumlashtirishdir. Tarix fani oʻtmishda sodir boʻlgan jarayon va hodisalar orasidagi oʻzaro bogʻliqlik, ularning ildizi, tarixni harakatlantiruvchi sabablar, uning mantigʻi va maʼnosini koʻrish imkonini beradi. Ijtimoiy va gumanitar fanlar tarix tadqiqotlari natijalariga tayanadi. Fanlararo yondashuv jamiyat haqidagi yaxlit tasavvurni shakllantirib, oʻtmishni va hozirni anglash orqali jamiyat rivoji istiqbolini koʻra bilishdek muhim vazifani xal qiladi.</p>\r\n', '<p>Новости</p>\r\n', '<p>News</p>\r\n', 2, '../../frontend/web/img/pages/page_164408066561feae192131c61feae19213121644080665.jpg', '1', 'yangilik1644127032', 4, 5, NULL, NULL, '2022-02-05 10:04:25', '2022-02-06 10:57:11'),
(11, 'Yangilik', 'Новости', 'News', '<p><strong>Tarix</strong>&nbsp;(<a href=\"https://uz.wikipedia.org/wiki/Arab_tili\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Arab tili\">arabcha</a>: التاريخ,&nbsp;<em>oʻtmish; davr, vaqt, era; sana</em>)&nbsp;&mdash;&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=O%CA%BBtmish&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Oʻtmish (sahifa yaratilmagan)\">oʻtmish</a>&nbsp;voqealar haqida&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Axborot\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Axborot\">axborot</a>&nbsp;ochish, yigʻish, tartiblashtirish va namoyish etish bilan shugʻullanuvchi&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fan</a>. Tarix bilan shugʻullanuvchi olimlar tarixchilar, deb ataladi. Tarix fani voqealar ketma-ketligini tahlil etadi va ularning sabab va samaralarini tizimlashtiradi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-2\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[2]</a></sup>&nbsp;Tarixchilar tarix tabiati va foydasi ustida bahs olib borishadi. Bunda ushbu&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fanning</a>&nbsp;oʻzi ham oʻrganiladi va zamonaviy muammolarni uning yordamida hal qilishga uriniladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Tosh1-3\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[3]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-4\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[4]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-5\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[5]</a></sup>&nbsp;Biror madaniyatga oid, biroq tashqi manbalarga asoslanmagan hikoyalar (masalan,&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Alpomish\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Alpomish\">Alpomish</a>&nbsp;haqida asotirlar) tarixiy mavzu emas, balki&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=Madaniy_meros&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Madaniy meros (sahifa yaratilmagan)\">madaniy meros</a>&nbsp;sanaladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-6\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[6]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Low1-7\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[7]</a></sup></p>\r\n\r\n<p>Tarix&nbsp;&mdash; 1) tabiat va jamiyatdagi har qanday rivojlanish jarayoni. Shu maʼnoda olamning yaratilish tarixi, Yer tarixi, barcha fanlar tarixi va boshqa tushuniladi; 2) insoniyat va uning mahsuli boʻlgan tamaddunlar rivoji, jamiyat va davlatlar oʻtmishi taraqqiyoti jarayonini oʻrganuvchi fan.</p>\r\n\r\n<p>Tarix fani&nbsp;&mdash; insoniyatning butun oʻtmishi davomida jamiyat hayotida sodir boʻlgan voqea-hodisalar, jarayonlarni (jamiyat rivojini) yaxlit bir tarzda oʻrganadi. Tarix fani ijtimoiy-gumanitar fanlar (falsafa, sotsiologiya, iqtisod, psixologiya, sanʼatshunoslik va boshqalar) tizimining tarkibiy qismi. Tarix fanining bu guruhdagi oʻrni uning tadqiqot predmeti va usullari bilan belgilanadi. Turli ijtimoiy va gumanitar fanlar jamiyat hayotining alohida jihatlarini oʻrgansa, tarix fanining tadqiqot obʼyekti&nbsp;&mdash; aholi, jamiyat, mamlakat, davlat hayotining oʻtmishi va hoziri haqidagi faktlarni yigʻish, taxlil qilish, toʻplangan bilimlarni maʼlum bir tizimga solish va nazariy jihatdan umumlashtirishdir. Tarix fani oʻtmishda sodir boʻlgan jarayon va hodisalar orasidagi oʻzaro bogʻliqlik, ularning ildizi, tarixni harakatlantiruvchi sabablar, uning mantigʻi va maʼnosini koʻrish imkonini beradi. Ijtimoiy va gumanitar fanlar tarix tadqiqotlari natijalariga tayanadi. Fanlararo yondashuv jamiyat haqidagi yaxlit tasavvurni shakllantirib, oʻtmishni va hozirni anglash orqali jamiyat rivoji istiqbolini koʻra bilishdek muhim vazifani xal qiladi.</p>\r\n', '<p>Новости</p>\r\n', '<p>News</p>\r\n', 2, '../../frontend/web/img/pages/page_164408066561feae192131c61feae19213121644080665.jpg', '0', 'yangilik1644127034', 4, 5, NULL, NULL, '2022-02-05 10:04:25', '2022-02-06 10:57:11'),
(12, 'Yangilik', 'Новости', 'News', '<p><strong>Tarix</strong>&nbsp;(<a href=\"https://uz.wikipedia.org/wiki/Arab_tili\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Arab tili\">arabcha</a>: التاريخ,&nbsp;<em>oʻtmish; davr, vaqt, era; sana</em>)&nbsp;&mdash;&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=O%CA%BBtmish&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Oʻtmish (sahifa yaratilmagan)\">oʻtmish</a>&nbsp;voqealar haqida&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Axborot\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Axborot\">axborot</a>&nbsp;ochish, yigʻish, tartiblashtirish va namoyish etish bilan shugʻullanuvchi&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fan</a>. Tarix bilan shugʻullanuvchi olimlar tarixchilar, deb ataladi. Tarix fani voqealar ketma-ketligini tahlil etadi va ularning sabab va samaralarini tizimlashtiradi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-2\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[2]</a></sup>&nbsp;Tarixchilar tarix tabiati va foydasi ustida bahs olib borishadi. Bunda ushbu&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fanning</a>&nbsp;oʻzi ham oʻrganiladi va zamonaviy muammolarni uning yordamida hal qilishga uriniladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Tosh1-3\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[3]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-4\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[4]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-5\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[5]</a></sup>&nbsp;Biror madaniyatga oid, biroq tashqi manbalarga asoslanmagan hikoyalar (masalan,&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Alpomish\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Alpomish\">Alpomish</a>&nbsp;haqida asotirlar) tarixiy mavzu emas, balki&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=Madaniy_meros&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Madaniy meros (sahifa yaratilmagan)\">madaniy meros</a>&nbsp;sanaladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-6\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[6]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Low1-7\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[7]</a></sup></p>\r\n\r\n<p>Tarix&nbsp;&mdash; 1) tabiat va jamiyatdagi har qanday rivojlanish jarayoni. Shu maʼnoda olamning yaratilish tarixi, Yer tarixi, barcha fanlar tarixi va boshqa tushuniladi; 2) insoniyat va uning mahsuli boʻlgan tamaddunlar rivoji, jamiyat va davlatlar oʻtmishi taraqqiyoti jarayonini oʻrganuvchi fan.</p>\r\n\r\n<p>Tarix fani&nbsp;&mdash; insoniyatning butun oʻtmishi davomida jamiyat hayotida sodir boʻlgan voqea-hodisalar, jarayonlarni (jamiyat rivojini) yaxlit bir tarzda oʻrganadi. Tarix fani ijtimoiy-gumanitar fanlar (falsafa, sotsiologiya, iqtisod, psixologiya, sanʼatshunoslik va boshqalar) tizimining tarkibiy qismi. Tarix fanining bu guruhdagi oʻrni uning tadqiqot predmeti va usullari bilan belgilanadi. Turli ijtimoiy va gumanitar fanlar jamiyat hayotining alohida jihatlarini oʻrgansa, tarix fanining tadqiqot obʼyekti&nbsp;&mdash; aholi, jamiyat, mamlakat, davlat hayotining oʻtmishi va hoziri haqidagi faktlarni yigʻish, taxlil qilish, toʻplangan bilimlarni maʼlum bir tizimga solish va nazariy jihatdan umumlashtirishdir. Tarix fani oʻtmishda sodir boʻlgan jarayon va hodisalar orasidagi oʻzaro bogʻliqlik, ularning ildizi, tarixni harakatlantiruvchi sabablar, uning mantigʻi va maʼnosini koʻrish imkonini beradi. Ijtimoiy va gumanitar fanlar tarix tadqiqotlari natijalariga tayanadi. Fanlararo yondashuv jamiyat haqidagi yaxlit tasavvurni shakllantirib, oʻtmishni va hozirni anglash orqali jamiyat rivoji istiqbolini koʻra bilishdek muhim vazifani xal qiladi.</p>\r\n', '<p>Новости</p>\r\n', '<p>News</p>\r\n', 2, '../../frontend/web/img/pages/page_164408066561feae192131c61feae19213121644080665.jpg', '11', 'yangilik1644127036', 4, 5, NULL, NULL, '2022-02-05 10:04:25', '2022-02-06 10:57:11'),
(13, 'Yangilik', 'Новости', 'News', '<p><strong>Tarix</strong>&nbsp;(<a href=\"https://uz.wikipedia.org/wiki/Arab_tili\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Arab tili\">arabcha</a>: التاريخ,&nbsp;<em>oʻtmish; davr, vaqt, era; sana</em>)&nbsp;&mdash;&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=O%CA%BBtmish&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Oʻtmish (sahifa yaratilmagan)\">oʻtmish</a>&nbsp;voqealar haqida&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Axborot\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Axborot\">axborot</a>&nbsp;ochish, yigʻish, tartiblashtirish va namoyish etish bilan shugʻullanuvchi&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fan</a>. Tarix bilan shugʻullanuvchi olimlar tarixchilar, deb ataladi. Tarix fani voqealar ketma-ketligini tahlil etadi va ularning sabab va samaralarini tizimlashtiradi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-2\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[2]</a></sup>&nbsp;Tarixchilar tarix tabiati va foydasi ustida bahs olib borishadi. Bunda ushbu&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fanning</a>&nbsp;oʻzi ham oʻrganiladi va zamonaviy muammolarni uning yordamida hal qilishga uriniladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Tosh1-3\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[3]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-4\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[4]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-5\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[5]</a></sup>&nbsp;Biror madaniyatga oid, biroq tashqi manbalarga asoslanmagan hikoyalar (masalan,&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Alpomish\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Alpomish\">Alpomish</a>&nbsp;haqida asotirlar) tarixiy mavzu emas, balki&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=Madaniy_meros&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Madaniy meros (sahifa yaratilmagan)\">madaniy meros</a>&nbsp;sanaladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-6\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[6]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Low1-7\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[7]</a></sup></p>\r\n\r\n<p>Tarix&nbsp;&mdash; 1) tabiat va jamiyatdagi har qanday rivojlanish jarayoni. Shu maʼnoda olamning yaratilish tarixi, Yer tarixi, barcha fanlar tarixi va boshqa tushuniladi; 2) insoniyat va uning mahsuli boʻlgan tamaddunlar rivoji, jamiyat va davlatlar oʻtmishi taraqqiyoti jarayonini oʻrganuvchi fan.</p>\r\n\r\n<p>Tarix fani&nbsp;&mdash; insoniyatning butun oʻtmishi davomida jamiyat hayotida sodir boʻlgan voqea-hodisalar, jarayonlarni (jamiyat rivojini) yaxlit bir tarzda oʻrganadi. Tarix fani ijtimoiy-gumanitar fanlar (falsafa, sotsiologiya, iqtisod, psixologiya, sanʼatshunoslik va boshqalar) tizimining tarkibiy qismi. Tarix fanining bu guruhdagi oʻrni uning tadqiqot predmeti va usullari bilan belgilanadi. Turli ijtimoiy va gumanitar fanlar jamiyat hayotining alohida jihatlarini oʻrgansa, tarix fanining tadqiqot obʼyekti&nbsp;&mdash; aholi, jamiyat, mamlakat, davlat hayotining oʻtmishi va hoziri haqidagi faktlarni yigʻish, taxlil qilish, toʻplangan bilimlarni maʼlum bir tizimga solish va nazariy jihatdan umumlashtirishdir. Tarix fani oʻtmishda sodir boʻlgan jarayon va hodisalar orasidagi oʻzaro bogʻliqlik, ularning ildizi, tarixni harakatlantiruvchi sabablar, uning mantigʻi va maʼnosini koʻrish imkonini beradi. Ijtimoiy va gumanitar fanlar tarix tadqiqotlari natijalariga tayanadi. Fanlararo yondashuv jamiyat haqidagi yaxlit tasavvurni shakllantirib, oʻtmishni va hozirni anglash orqali jamiyat rivoji istiqbolini koʻra bilishdek muhim vazifani xal qiladi.</p>\r\n', '<p>Новости</p>\r\n', '<p>News</p>\r\n', 2, '../../frontend/web/img/pages/page_164408066561feae192131c61feae19213121644080665.jpg', '1', 'yangilik1644127038', 4, 6, NULL, NULL, '2022-02-05 10:04:25', '2022-02-06 10:57:11'),
(14, 'Yangilik', 'Новости', 'News', '<p><strong>Tarix</strong>&nbsp;(<a href=\"https://uz.wikipedia.org/wiki/Arab_tili\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Arab tili\">arabcha</a>: التاريخ,&nbsp;<em>oʻtmish; davr, vaqt, era; sana</em>)&nbsp;&mdash;&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=O%CA%BBtmish&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Oʻtmish (sahifa yaratilmagan)\">oʻtmish</a>&nbsp;voqealar haqida&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Axborot\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Axborot\">axborot</a>&nbsp;ochish, yigʻish, tartiblashtirish va namoyish etish bilan shugʻullanuvchi&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fan</a>. Tarix bilan shugʻullanuvchi olimlar tarixchilar, deb ataladi. Tarix fani voqealar ketma-ketligini tahlil etadi va ularning sabab va samaralarini tizimlashtiradi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-2\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[2]</a></sup>&nbsp;Tarixchilar tarix tabiati va foydasi ustida bahs olib borishadi. Bunda ushbu&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Fan\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Fan\">fanning</a>&nbsp;oʻzi ham oʻrganiladi va zamonaviy muammolarni uning yordamida hal qilishga uriniladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-evans1-1\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[1]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Tosh1-3\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[3]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-4\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[4]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-5\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[5]</a></sup>&nbsp;Biror madaniyatga oid, biroq tashqi manbalarga asoslanmagan hikoyalar (masalan,&nbsp;<a href=\"https://uz.wikipedia.org/wiki/Alpomish\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\" title=\"Alpomish\">Alpomish</a>&nbsp;haqida asotirlar) tarixiy mavzu emas, balki&nbsp;<a class=\"new\" href=\"https://uz.wikipedia.org/w/index.php?title=Madaniy_meros&amp;action=edit&amp;redlink=1\" style=\"text-decoration-line: none; color: rgb(186, 0, 0); background: none;\" title=\"Madaniy meros (sahifa yaratilmagan)\">madaniy meros</a>&nbsp;sanaladi.<sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-6\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[6]</a></sup><sup><a href=\"https://uz.wikipedia.org/wiki/Tarix#cite_note-Low1-7\" style=\"text-decoration-line: none; color: rgb(6, 69, 173); background: none;\">[7]</a></sup></p>\r\n\r\n<p>Tarix&nbsp;&mdash; 1) tabiat va jamiyatdagi har qanday rivojlanish jarayoni. Shu maʼnoda olamning yaratilish tarixi, Yer tarixi, barcha fanlar tarixi va boshqa tushuniladi; 2) insoniyat va uning mahsuli boʻlgan tamaddunlar rivoji, jamiyat va davlatlar oʻtmishi taraqqiyoti jarayonini oʻrganuvchi fan.</p>\r\n\r\n<p>Tarix fani&nbsp;&mdash; insoniyatning butun oʻtmishi davomida jamiyat hayotida sodir boʻlgan voqea-hodisalar, jarayonlarni (jamiyat rivojini) yaxlit bir tarzda oʻrganadi. Tarix fani ijtimoiy-gumanitar fanlar (falsafa, sotsiologiya, iqtisod, psixologiya, sanʼatshunoslik va boshqalar) tizimining tarkibiy qismi. Tarix fanining bu guruhdagi oʻrni uning tadqiqot predmeti va usullari bilan belgilanadi. Turli ijtimoiy va gumanitar fanlar jamiyat hayotining alohida jihatlarini oʻrgansa, tarix fanining tadqiqot obʼyekti&nbsp;&mdash; aholi, jamiyat, mamlakat, davlat hayotining oʻtmishi va hoziri haqidagi faktlarni yigʻish, taxlil qilish, toʻplangan bilimlarni maʼlum bir tizimga solish va nazariy jihatdan umumlashtirishdir. Tarix fani oʻtmishda sodir boʻlgan jarayon va hodisalar orasidagi oʻzaro bogʻliqlik, ularning ildizi, tarixni harakatlantiruvchi sabablar, uning mantigʻi va maʼnosini koʻrish imkonini beradi. Ijtimoiy va gumanitar fanlar tarix tadqiqotlari natijalariga tayanadi. Fanlararo yondashuv jamiyat haqidagi yaxlit tasavvurni shakllantirib, oʻtmishni va hozirni anglash orqali jamiyat rivoji istiqbolini koʻra bilishdek muhim vazifani xal qiladi.</p>\r\n', '<p>Новости</p>\r\n', '<p>News</p>\r\n', 2, '../../frontend/web/img/pages/page_164408066561feae192131c61feae19213121644080665.jpg', '2', 'yangilik1644127039', 4, 6, NULL, NULL, '2022-02-05 10:04:25', '2022-02-06 10:57:11'),
(15, 'Filial rekvizitlari', 'Детали филиала', 'Branch details', '<p><strong>Respublika O&rsquo;rta tibbiyot va farmasevt xodimlar malakasini oshirish va ularni ixtisoslashtirish&nbsp; markazi Samarqand filiali</strong><br />\r\n<strong>Manzili:</strong> Samarqand sh.,M.Ulug&rsquo;bek ko&rsquo;chasi 72 uy<br />\r\n<strong>Tel:</strong> (66) 233-68-42.<br />\r\n<strong>Shx/r:&nbsp;</strong>400121860184017096200054001<br />\r\n<strong>STIR:&nbsp;</strong>202447583. <strong>OKONX:&nbsp;</strong>92200<br />\r\nMoliya vazirligi g&rsquo;aznachiligi Samarqand viloyati.<br />\r\n<strong>Yagona g&rsquo;azna xisob raqami:</strong><br />\r\n23402000300100001010<br />\r\n<strong>STIR:</strong>&nbsp;201122919.&nbsp; <strong>MFO:</strong>&nbsp;00014<br />\r\nMarkaziy bank XKKM Toshkent shaxar Bosh boshqarmasi.</p>\r\n', '', '', 1, NULL, '9', 'filialrekvizitlari1644302377', 6, 13, NULL, NULL, '2022-02-08 11:38:11', '2022-02-08 11:39:37');

-- --------------------------------------------------------

--
-- Структура таблицы `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `name_uz`, `name_ru`, `name_en`, `menu_id`, `type`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Umumiy ma\'lumot', 'Главная информация', 'General information', 2, 1, 'umumiymalumot', '2022-02-03 07:54:25', '2022-02-12 12:58:14'),
(2, 'Rahbariyat', 'Управление', 'Management', 2, 1, 'rahbariyat', '2022-02-03 07:54:59', '2022-02-12 12:58:38'),
(3, 'Filial bo\'limlari', 'Филиалы', 'Branch departments', 2, 1, 'filialbolimlari', '2022-02-03 07:55:37', '2022-02-12 12:58:45'),
(4, 'Huquqiy hujjatlar', 'Законные документы', 'Legal documents', 2, 2, 'huquqiyhujjatlar', '2022-02-03 07:56:09', '2022-02-12 12:58:56'),
(5, 'Yangiliklar', 'Новости', 'News', 4, 1, 'yangiliklar', '2022-02-03 07:57:06', '2022-02-12 12:59:03'),
(6, 'E\'lonlar', 'Объявления', 'Announcement', 4, 1, 'elonlar', '2022-02-03 07:57:54', '2022-02-12 12:59:08'),
(7, 'Fotogaleriya', 'Фотогалерея', 'Photo gallery', 4, 1, 'fotogaleriya', '2022-02-03 07:58:19', '2022-02-12 12:59:16'),
(8, 'Videogaleriya', 'Видео галерея', 'Video gallery', 4, 1, 'videogaleriya', '2022-02-03 07:58:37', '2022-02-12 12:59:26'),
(9, 'Filial seminar va chiqishlari', 'Отраслевые семинары и презентации', 'Branch seminars and presentations', 4, 1, 'filialseminarvachiqishlari', '2022-02-03 07:59:31', '2022-02-12 12:59:32'),
(10, 'Matbuot bilan bog\'lanish', 'Отношения с прессой', 'Press Relationship', 4, 1, 'matbuotbilanboglanish', '2022-02-03 08:00:00', '2022-02-12 12:59:38'),
(11, 'Masofaviy ta\'lim platformasi', 'Платформа дистанционного обучения', 'Distance learning platform', 6, 1, 'masofaviytalimplatformasi', '2022-02-03 08:03:06', '2022-02-12 12:59:44'),
(12, 'Elektron kutubxona', 'Электронная библиотека', 'Electronic library', 6, 1, 'elektronkutubxona', '2022-02-03 08:03:31', '2022-02-12 12:59:48'),
(13, 'Filial rekvizitlari', 'Детали филиала', 'Branch details', 6, 1, 'filialrekvizitlari', '2022-02-03 08:03:51', '2022-02-12 12:59:52'),
(14, 'Kantrakt to\'lov miqdori', 'Сумма платежа по контракту', 'Contract payment amount', 6, 1, 'kantrakttolovmiqdori', '2022-02-03 08:04:13', '2022-02-12 12:59:57'),
(15, 'Yillik qabul rejasi', 'Годовой план приема', 'Annual Admission Plan', 6, 1, 'yillikqabulrejasi', '2022-02-03 08:04:35', '2022-02-12 01:00:02'),
(16, 'Tuzilma', 'Структура', 'Structure', 2, 1, 'tuzilma', '2022-02-05 12:41:38', '2022-02-12 01:00:06');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', '5XbW3RN2hso93MHj0apQ7rwtIPyvx6Wy', '$2y$13$qw92fohVOmjK4xwbP015v.KQeE9d3KGg36e9BlGeoS/Rf7gEMOf6e', NULL, 'admin@info.com', 10, 1643699117, 1643699117, 'QkRPmbfD562W9yGl8f7wiVRHKCk7cQ4N_1643699117');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `name_uz`, `name_ru`, `name_en`, `video`, `created_at`, `updated_at`) VALUES
(2, 'Test video', 'Тест видео', 'Test video', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4VP33dxJu3s\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2022-02-09 10:19:53', '2022-02-09 10:19:53'),
(3, 'Test video 1', 'Тест видео 1', 'Test video 1', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2zl4aAXtegE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2022-02-09 10:20:29', '2022-02-09 10:20:29'),
(4, 'Test video 2', 'Тест видео 2', 'Test video 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5vppJrWii4k\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2022-02-09 10:20:59', '2022-02-09 10:20:59');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filial`
--
ALTER TABLE `filial`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallereya`
--
ALTER TABLE `gallereya`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `multi_menu`
--
ALTER TABLE `multi_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `other_page`
--
ALTER TABLE `other_page`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `filial`
--
ALTER TABLE `filial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `gallereya`
--
ALTER TABLE `gallereya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `multi_menu`
--
ALTER TABLE `multi_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `other_page`
--
ALTER TABLE `other_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
