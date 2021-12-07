-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 08 2021 г., 02:21
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
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(2500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `post_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `name`, `content`, `post_id`) VALUES
(1, 'Егор', 'Отличный фильм, один из лучших, что я смотрел в своей жизни,. И сюжет и графика и монтаж. Коротко- главный герой в поиске своей дочери, которую похитили. У главного героя при броске меткость. И еще Фильм очень крутой! Неужели китайцы научились снимать классную фэнтезийную фантастику? Превосходная графика, фантазийный полёт мысли, классные смелые идеи, восточная изюминка, прекрасные актёры! Гармоничный фильм во итогу и прекрасное послевкусие. он читает фантаст. истории писателя, которые сбываются. Бескомпромиссно и достойно показанная история. Понравилось. Бескомпромиссно и достойно показанная история. Понравилось. Рекомендую', 2),
(2, 'Екатерина', 'Шикарная фантастика. На удивление интересный сюжет, шикарно снят и поставлен. Рекомендую к просмотру. ', 2),
(3, 'Елена', 'Замечательно сыграли душещипательную историю становления злодейки Круэллы… в фильме перевели как Стервеллу. Костюмы просто супер, музыка понравилась.\r\nЭто уже третий фильм - реабилитация злодеев в кино: Малифисента, Джокер и теперь Круэлла. Создатели этих фильмов пытаются вызвать чувство жалости к злодеям и переиначить их историю. ', 1),
(4, 'Алексей', 'Как же Я долго ждал выход фильма \"Круэлла\" - приквел к истории про Стервеллу же Виль, которая хотела сшить манто из далматинцев. Чудная игра двух Эмм, оригинальный сюжет, декорации... Рекомендую к просмотру!', 1),
(5, 'Сергей', 'Отличный фильм, 2 часа пролетели незаметно.', 3),
(6, 'Дмитрий', 'Интересный фильм, сложно оторваться. Захватывающий сюжет. Держит в напряжении все время просмотра.', 3),
(7, 'Владимир', 'Очень ярко талантливо рассказана давняя история хотя может быть немного приукрашено в свете сегодняшних реалий но всё равно очень приятно и эмоционально Уверен что не только женщины плакали во время просмотра но и у многих мужчин в некоторых сценах слезы сами наворачивались на глаза Безусловно это великолепная удача молодого режиссёра  и очень органичны и мальчик и собака и вот почему то я заметил что чем меньше фильм рекламируется хотя бы на ТВ тем приятнее его смотреть Может это связано с тем что  то  о чём больше говорят   без неё смотреть не будут а шедевры в большой рекламе  и не нуждаются', 4),
(8, 'Марина', 'Фильм просто замечательный. Снят отлично,очень трогательно, фильм не однодневка, вызывает какие то противоречивые чувства, с одной стороны очень жаль собаку, что её так предал хозяин, так жестоко с ней поступил, с другой стороны и радость берет за неё, что все же о ней позаботились, и все у неё хорошо сложилось. Актёры все хорошие, и играют достоверно, никто не раздражает. Ну и главная актриса Лили, красавица невероятная, душка такая, обаяшка, и умница, а эти глаза, сколько в них души, печали, отчаинья передано, вот артистка так артистка настоящая) Спасибо всем создателям, за такой замечательный фильм. ', 4),
(9, 'Евгений', 'Есть выражение если книга нравится , читать \"запоем\"- без перерыва на приём пищи и сон, так вот просмотр  сериала \"Боевой континент\" мне очень понравился и  просмотр стал \" запойным\", На Боевом континенте развито большое количество школ боевых искусств, они разные дорогие и не очень. У школы боевых искусств \" Ши Лань Кэ\" было и другое название \"школа Чудаков\", вот в эту школу и поступил Тан Сань со своей названной сестрой Сяо У. В новом наборе оказалось семь чудаков и зритель будет следить как из  неопытных юнцов ученики превратятся в лучшую команду \"духовных мастеров\"  Боевого континента. Жду с нетерпением второго сезона. Рекомендую.', 5),
(10, 'Елена', 'Очень хороший сериал. Замечательный. Легкий и серьезный. Смотрится на одном дыхании. Актеры прекрасны. Я уже давно поняла, энергия группы молодых актеров-это что-то непередаваемое. А Сяо Чжань просто прекрасен.', 5),
(11, 'Милана ', 'Отличный мини сериал. очень порадовал интересным сюжетом, хорошим актёрским составом. Молодую девушку убивает случайный знакомый, она воскресает и становится призраком и сама ищет своего убийцу.  Хотелось бы продолжение...', 6),
(12, 'Алена', 'Сериал очень понравился, закрученный сюжет обожаю такие сериалы где приходится думать кто же убийца, а в итоге совсем неожиданная развязка. Конец конечно не совсем ясен. Но в целом твёрдая 5ка.', 6),
(13, 'Мая ', 'Собака очень милая в фильме', 4),
(14, 'Анфиса', 'Смотрела как завороженная', 3),
(15, 'Михаил', 'Сериал держит в напряжении', 7),
(16, 'Ваня', 'Сериал огонь', 8),
(17, 'Анжела ', 'Уже охота увидеть продолжения сериала', 6),
(18, 'Любовь', 'все понравилось', 3),
(19, 'Марфа', 'Интересный сериал. Я бы сказала, что это психологическая драма. Не буду писать про содержание , его узнаёте посмотрев кино. Артисты великолепны, Добровольская - талантище, Ефремов , как актёр , мне нравится.Все играют очень достоверно. Ну, а концовка, она предсказуема . Сериал понравился.', 7),
(20, 'Иван', 'Кучка офисных планктонов решили поиграть с нехорошим дядей, братком из 90х. Что получилось? А все тоже, что и в 90х. Полет закончился так и не начавшись. Сериал огонь: и сюжет, и смысл, и актеры - все отлично', 7),
(21, 'Дмитрий', 'Ну что тут сказать - чувствуется рука Мастера. Я о Тодоровском. Лично для меня это МАРКА. Можно быть не согласным с какими-то сюжетными линиями спорного автора, но не признать, что фильм хороший - нельзя. Ведь это только 1927, только начали закручивать гайки, еще все впереди, а уже страшно. Сначала так в лагере, а потом так в жизни, а в лагере вообще ад. А у нас все больше людей, тоскующих по Советскому прошлому, да по твердой руке товарища Сталина, вождя всех вождей. Смотреть. Думать.', 8),
(22, 'Анатолий', 'Сильнейший сериал.вроде и тема уже за несколько десятилетий стала не так остра как в конце 80х.но этот сериал один из лучших .описывающий события тех лет.В начале осужденные ехали как на прогулку.шутили острили А дольше уже становилось совсем не смешно.Действительно страшное время было.Оценка сериала 5+', 8),
(23, 'Светлана', 'Сериал интересный, смотрится на одном дыхании.\r\n', 5);

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
  `post_id` int NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `content` varchar(2500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `video` varchar(500) NOT NULL,
  `rating` float NOT NULL,
  `year` year NOT NULL,
  `producer` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`post_id`, `img`, `name`, `content`, `video`, `rating`, `year`, `producer`, `type`) VALUES
(1, 'cruela3.jpg', 'Круэлла', 'Великобритания, 1960-е годы. Эстелла была необычным ребёнком, и особенно трудно ей было мириться со всякого рода несправедливостью. Вылетев из очередной школы, она с мамой отправляется в Лондон. По дороге они заезжают в особняк известной модельерши по имени Баронесса, где в результате ужасного несчастного случая мама погибает. Добравшись до Лондона, Эстелла знакомится с двумя мальчишками — уличными мошенниками Джаспером и Хорасом. 10 лет спустя та же компания промышляет на улицах британской столицы мелким воровством, но Эстелла никак не может оставить мечту сделать карьеру в мире моды. Хитростью устроившись в фешенебельный универмаг, девушка привлекает внимание Баронессы, и та берёт её к себе в штат дизайнеров.', 'https://www.youtube.com/embed/9F2-eR2dfMY', 7.4, 2021, 'Крэйг Гиллеспи', 'films'),
(2, 'Assasin.jpg', 'Ассасин: битва миров', 'В неком фэнтезийном мире правит жестокий Бог, которому нужны лишь смерть и разрушения. Потеряв сестру, но обретя волшебный доспех, молодой воин Кунвэнь отправляется в путешествие, чтобы разыскать и убить Бога. В это время в нашем мире мужчина Гуань Нин уже шесть лет находится на грани отчаяния, разыскивая пропавшую дочку. Он выходит на торговцев детьми, но полиция ошибочно принимает его за преступника и арестовывает. Сбежать Нину помогает ассистентка влиятельного бизнесмена и предлагает ему сделку. Один популярный писатель в данный момент пишет роман в жанре фэнтези, который каким-то образом вредит здоровью её босса, а Нин в обмен на информацию о местонахождении дочери должен этого писателя убить.', 'https://www.youtube.com/embed/zkwiqd8Bp5o', 6.2, 2021, 'Лу Ян', 'films'),
(3, 'devitaev2.jpg', 'Девятаев', 'Лето 1944 года. Советские войска ведут наступление, но враг еще очень силен. Летчик-истребитель Михаил Девятаев попадает в плен. Ему предстоит сделать выбор — вернуться в небо, продолжив войну на стороне врага, или отправиться в концлагерь на остров Узедом. Отчаянный ас Девятаев выбирает третье — побег. Но с засекреченного острова, где идут испытания немецких крылатых ракет, нельзя убежать. Зато можно улететь — на аэродроме стоит новейший вражеский бомбардировщик с «оружием возмездия» Третьего рейха на борту. Улететь — и совершить самый дерзкий побег в военной истории.', 'https://www.youtube.com/embed/risii8g1MzI', 6.2, 2021, 'Тимур Бекмамбетов, Сергей Трофимов', 'films'),
(4, 'palma.jpg', 'Пальма', 'Овчарка по кличке Пальма вынужденно расстается с хозяином: тот улетает за границу, а верную собаку не берут на рейс и оставляют прямо на летном поле. Пальма прячется в аэропорту и каждый день встречает самолеты в надежде, что хозяин вернулся. Но время идет… 9-летний Коля — тоже новенький в аэропорту: он потерял маму и переехал к отцу-пилоту, которого почти не знает. Пальма становится для мальчика родственной душой и лучшим другом. А отцу Коли, летчику Лазареву, предстоит заслужить доверие и любовь сына, сделав нелегкий выбор между карьерой и семьей. И найти способ не разлучить друзей, когда за Пальмой однажды возвращается хозяин.', 'https://www.youtube.com/embed/2t8ckmFuAcc', 7.3, 2021, 'Александр Домогаров мл.', 'films'),
(5, 'continent.jpg', 'Боевой континент', 'Ещё ребёнком Тан Сань потерял мать, и вскоре отец отправил его обучаться боевым искусствам. В шестилетнем возрасте Сань был принят в академию Ношань и там крепко подружился с несколькими ребятами. Через некоторое время, как один из самых способных учеников, парень поступает в академию Тайшань, где преподают пятеро выдающихся мастеров.', 'https://www.youtube.com/embed/8oFoYwuXN0g', 8.9, 2021, 'Ян Чжэньюй', 'series'),
(6, 'hotel.jpg', 'Отель феникс', '19-летняя Лера Пичугина просыпается в гостиничном номере, залитом кровью. Она видит, как ее безжизненное тело лежит в ванной... что с ней случилось? Убегая от гостиницы, она пытается позвать на помощь, но никто ее не замечает. Через несколько дней все сомнения развеваются. Тело Леры вылавливают из затопленного карьера. Неужели она действительно мертва? Если да, то почему она все еще ходит среди живых? И почему на самом деле ее могут видеть только несколько человек? И почему именно они? Ей придется найти ответы - живой или мертвой.', 'https://www.youtube.com/embed/293pKHXabwY', 7.4, 2021, 'Владимир Койфман', 'series'),
(7, 'polet.jpg', 'Полёт', 'Сотрудники московской строительной компании собираются лететь в Пермь, но в зале вылета они понимают, что перепутали аэропорт. Чуть позже коллеги узнают, что самолет рейса, на который они опоздали, разбился сразу после взлета. Пережитый стресс и близость смерти заставляют героев задуматься о жизни, переосмыслить ее и попытаться понять, кто они и чего хотят на самом деле.', 'https://www.youtube.com/embed/NGRxblhRGu8', 6.9, 2021, 'Пётр Тодоровский', 'series'),
(8, 'obitel.jpg', 'Обитель', 'Время действия – конец 20-х годов 20 века, место действия – Соловецкий лагерь, печально знаменитые Соловки. Страх и отвага, отчаянное желание выжить, понять главное в себе и жизни – все это становится фоном страстной любовной истории двух героев: заключенного Артема Горяинова и чекистки Галины. Это любовь на краю пропасти, ведь гражданский муж Галины – всесильный начальник лагеря Федор Эйхманис...', 'https://www.youtube.com/embed/DvHDpm59DpQ', 7, 2021, 'Александр Велединский', 'series');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(2500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `linknew` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `linknew`) VALUES
(1, 'Как снимали фильм Пальма', 'Фильм «Пальма» – пожалуй, самое эмоциональное и семейное кино последнего времени, и тот редкий случай, когда постановщики во главе с практически дебютантом Александром Домогаровым-младшим не стесняются выводить на первый план животных и детей, с которыми, как известно, всегда трудно конкурировать профессиональным актерам. За проектом «Пальма» мы следили с самого начала и вместе с его авторами вспоминаем, как проходили съемки этого действительно неординарного для современного российского кино фильма.', 'about_palma.php'),
(2, 'Канны подводят итоги и рассказывают о драмах телевизионного закулисья', 'Канны-2021 готовятся закрыть занавес, идут последние конкурсные картины. Члены жюри их уже отсмотрели и сейчас в наглухо изолированных покоях делятся впечатлениями, распределяют призы между будущими лауреатами. Вердикты главного жюри будут объявлены на торжественной церемонии.', 'news_festival.php');

-- --------------------------------------------------------

--
-- Структура таблицы `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pass` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `phone`, `pass`) VALUES
(2, 'Makc', 'maks@mail.ru', '89165211314', '2e65f2f2fdaf6c699b223c61b1b5ab89'),
(3, 'Анна', 'riston@mail.ru', '8945612371', 'c6f057b86584942e415435ffb1fa93d4'),
(4, 'Миша', 'window888@mail.ru', '891745562336', '68053af2923e00204c3ca7c6a3150cf7'),
(5, 'Анна', 'riston@mail.ru', '89165211314', '68053af2923e00204c3ca7c6a3150cf7'),
(6, 'Тетрис', 'gfg@mail.ru', '8917456123', '2e65f2f2fdaf6c699b223c61b1b5ab89'),
(7, 'Катя', 'drgftgy@com', '4778589969', '6f2268bd1d3d3ebaabb04d6b5d099425');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`post_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `main` (`post_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
