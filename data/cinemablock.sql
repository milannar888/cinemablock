-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2021 г., 07:14
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cinemablock`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int NOT NULL,
  `img` varchar(50) NOT NULL,
  `maintext` varchar(2500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `linkfilm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `img`, `maintext`, `linkfilm`) VALUES
(1, 'cruela3.jpg', 'Великобритания, 1960-е годы. Эстелла была необычным ребёнком, и особенно трудно ей было мириться со всякого рода несправедливостью. Вылетев из очередной школы, она с мамой отправляется в Лондон. По дороге они заезжают в особняк известной модельерши по имени Баронесса, где в результате ужасного несчастного случая мама погибает. Добравшись до Лондона, Эстелла знакомится с двумя мальчишками — уличными мошенниками Джаспером и Хорасом. 10 лет спустя та же компания промышляет на улицах британской столицы мелким воровством, но Эстелла никак не может оставить мечту сделать карьеру в мире моды. Хитростью устроившись в фешенебельный универмаг, девушка привлекает внимание Баронессы, и та берёт её к себе в штат дизайнеров.', 'show_cruella.php'),
(2, 'Assasin.jpg', 'В неком фэнтезийном мире правит жестокий Бог, которому нужны лишь смерть и разрушения. Потеряв сестру, но обретя волшебный доспех, молодой воин Кунвэнь отправляется в путешествие, чтобы разыскать и убить Бога. В это время в нашем мире мужчина Гуань Нин уже шесть лет находится на грани отчаяния, разыскивая пропавшую дочку. Он выходит на торговцев детьми, но полиция ошибочно принимает его за преступника и арестовывает. Сбежать Нину помогает ассистентка влиятельного бизнесмена и предлагает ему сделку. Один популярный писатель в данный момент пишет роман в жанре фэнтези, который каким-то образом вредит здоровью её босса, а Нин в обмен на информацию о местонахождении дочери должен этого писателя убить.', 'show_assasin.php'),
(3, 'devitaev2.jpg', 'Лето 1944 года. Советские войска ведут наступление, но враг еще очень силен. Летчик-истребитель Михаил Девятаев попадает в плен. Ему предстоит сделать выбор — вернуться в небо, продолжив войну на стороне врага, или отправиться в концлагерь на остров Узедом. Отчаянный ас Девятаев выбирает третье — побег. Но с засекреченного острова, где идут испытания немецких крылатых ракет, нельзя убежать. Зато можно улететь — на аэродроме стоит новейший вражеский бомбардировщик с «оружием возмездия» Третьего рейха на борту. Улететь — и совершить самый дерзкий побег в военной истории.', 'show_devitaev.php'),
(4, 'palma.jpg', 'Овчарка по кличке Пальма вынужденно расстается с хозяином: тот улетает за границу, а верную собаку не берут на рейс и оставляют прямо на летном поле. Пальма прячется в аэропорту и каждый день встречает самолеты в надежде, что хозяин вернулся. Но время идет… 9-летний Коля — тоже новенький в аэропорту: он потерял маму и переехал к отцу-пилоту, которого почти не знает. Пальма становится для мальчика родственной душой и лучшим другом. А отцу Коли, летчику Лазареву, предстоит заслужить доверие и любовь сына, сделав нелегкий выбор между карьерой и семьей. И найти способ не разлучить друзей, когда за Пальмой однажды возвращается хозяин.', 'show_palma.php');

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE `header` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `linktitle` varchar(100) NOT NULL,
  `page` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`id`, `title`, `linktitle`, `page`) VALUES
(1, 'Главная', 'index.php', 'index'),
(2, 'Фильмы', 'films.php', 'films'),
(3, 'Сериалы', 'series.php', 'series'),
(4, 'Рейтинг фильмов', 'rating.php', 'rating'),
(5, 'Контакты', 'contact.php', 'contact');

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE `main` (
  `id` int NOT NULL,
  `img` varchar(50) NOT NULL,
  `linkpage` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `img`, `linkpage`, `type`) VALUES
(1, 'cruela3.jpg', 'show_cruella.php', 'films'),
(2, 'Assasin.jpg', 'show_assasin.php', 'films'),
(3, 'devitaev2.jpg', 'show_devitaev.php', 'films'),
(4, 'palma.jpg', 'show_palma.php', 'films'),
(5, 'continent.jpg', 'show_continent.php', 'series'),
(6, 'hotel.jpg', 'show_hotel.php', 'series'),
(7, 'polet.jpg', 'show_polet.php', 'series'),
(8, 'obitel.jpg', 'show_obitel.php', 'series');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `textnew` varchar(2500) NOT NULL,
  `linknew` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `textnew`, `linknew`) VALUES
(1, 'Как снимали фильм Пальма', 'Фильм «Пальма» – пожалуй, самое эмоциональное и семейное кино последнего времени, и тот редкий случай, когда постановщики во главе с практически дебютантом Александром Домогаровым-младшим не стесняются выводить на первый план животных и детей, с которыми, как известно, всегда трудно конкурировать профессиональным актерам. За проектом «Пальма» мы следили с самого начала и вместе с его авторами вспоминаем, как проходили съемки этого действительно неординарного для современного российского кино фильма.', 'about_palma.php'),
(2, 'Канны подводят итоги и рассказывают о драмах телевизионного закулисья', 'Канны-2021 готовятся закрыть занавес, идут последние конкурсные картины. Члены жюри их уже отсмотрели и сейчас в наглухо изолированных покоях делятся впечатлениями, распределяют призы между будущими лауреатами. Вердикты главного жюри будут объявлены на торжественной церемонии.', 'news_festival.php');

-- --------------------------------------------------------

--
-- Структура таблицы `rating`
--

CREATE TABLE `rating` (
  `id` int NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `year` int NOT NULL,
  `rating` float NOT NULL,
  `linkrating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rating`
--

INSERT INTO `rating` (`id`, `img`, `name`, `year`, `rating`, `linkrating`) VALUES
(1, 'cruela3.jpg', 'Круэлла', 2021, 7.4, 'show_cruella.php'),
(2, 'palma.jpg', 'Пальма', 2021, 7.3, 'show_palma.php'),
(3, 'Assasin.jpg', 'Ассасин: битва миров', 2021, 6.2, 'show_assasin.php'),
(4, 'devitaev2.jpg', 'Девятаев', 2021, 6.2, 'show_devitaev.php');

-- --------------------------------------------------------

--
-- Структура таблицы `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `username` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` int NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `phone`, `pass`) VALUES
(1, 'Anna', 'riston@mail.ru', 83939566, '12345'),
(2, 'Anna', 'riston@mail.ru', 839394566, '123456');

-- --------------------------------------------------------

--
-- Структура таблицы `series`
--

CREATE TABLE `series` (
  `id` int NOT NULL,
  `img` varchar(50) NOT NULL,
  `maintext` varchar(2500) NOT NULL,
  `linkseries` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `series`
--

INSERT INTO `series` (`id`, `img`, `maintext`, `linkseries`) VALUES
(1, 'continent.jpg', 'Ещё ребёнком Тан Сань потерял мать, и вскоре отец отправил его обучаться боевым искусствам. В шестилетнем возрасте Сань был принят в академию Ношань и там крепко подружился с несколькими ребятами. Через некоторое время, как один из самых способных учеников, парень поступает в академию Тайшань, где преподают пятеро выдающихся мастеров.', 'show_continent.php'),
(2, 'hotel.jpg', '19-летняя Лера Пичугина просыпается в гостиничном номере, залитом кровью. Она видит, как ее безжизненное тело лежит в ванной... что с ней случилось? Убегая от гостиницы, она пытается позвать на помощь, но никто ее не замечает. Через несколько дней все сомнения развеваются. Тело Леры вылавливают из затопленного карьера. Неужели она действительно мертва? Если да, то почему она все еще ходит среди живых? И почему на самом деле ее могут видеть только несколько человек? И почему именно они? Ей придется найти ответы - живой или мертвой.', 'show_hotel.php'),
(3, 'polet.jpg', 'Сотрудники московской строительной компании собираются лететь в Пермь, но в зале вылета они понимают, что перепутали аэропорт. Чуть позже коллеги узнают, что самолет рейса, на который они опоздали, разбился сразу после взлета. Пережитый стресс и близость смерти заставляют героев задуматься о жизни, переосмыслить ее и попытаться понять, кто они и чего хотят на самом деле.', 'show_polet.php'),
(4, 'obitel.jpg', 'Время действия – конец 20-х годов 20 века, место действия – Соловецкий лагерь, печально знаменитые Соловки. Страх и отвага, отчаянное желание выжить, понять главное в себе и жизни – все это становится фоном страстной любовной истории двух героев: заключенного Артема Горяинова и чекистки Галины. Это любовь на краю пропасти, ведь гражданский муж Галины – всесильный начальник лагеря Федор Эйхманис...', 'show_obitel.php');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `series`
--
ALTER TABLE `series`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
