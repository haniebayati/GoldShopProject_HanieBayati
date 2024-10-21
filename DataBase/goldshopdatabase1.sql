
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'گردنبند زنانه'),
(2, 'انگشتر زنانه'),
(3, 'دستبند زنانه'),
(4, 'گوشواره زنانه'),
(5, 'اکسسوری زنانه'),
(6, 'نیم ست زنانه'),
(7, 'گردنبند مردانه'),
(8, 'انگشتر مردانه'),
(9, 'دستبند مردانه'),
(10, 'اکسسوری مردانه');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `nameProduct` text COLLATE utf8_persian_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `trackCode` text COLLATE utf8_persian_ci NOT NULL,
  `image` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `nameProduct`, `quantity`, `price`, `total`, `trackCode`, `image`) VALUES
(43, 'نیم ست برگ با سنگ زمرد', 1, 20500000, 20500000, '32003659', 'rubygold-6170-4951-Size.webp'),
(44, 'گوشواره فلاور یاقوت قرمز و سفید رزگلد', 1, 12724000, 12724000, '44009469', 'rubygold-15019-3099-Size.webp');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customer` text COLLATE utf8_persian_ci NOT NULL,
  `tel` text COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `priceCol` bigint(20) NOT NULL,
  `dateOrder` text COLLATE utf8_persian_ci NOT NULL,
  `status` text COLLATE utf8_persian_ci NOT NULL,
  `trackCode` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`customer`, `tel`, `address`, `priceCol`, `dateOrder`, `status`, `trackCode`) VALUES 
('محسن غلامی', '09351660252', 'تهران-تهران پارس-خ فرجام-پ 23', 20500000, '1401/05/30', 'پرداخت شده', '32003659'),
('هانیه بیاتی', '09196972095', 'تهران-بلوار فردوس', 12724000, '1401/04/30', 'پرداخت شده', '44009469');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_persian_ci NOT NULL,
  `image` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `description`, `cat_id`, `price`) VALUES 
(1, 'گردنبند سولیتر آبی ', 'rubygold-31786-4879-Size.webp', 'رنگ طلا : زرد /
کالکشن : دست ساز /
قیمت سنگ : 320000 تومان /
وزن : 2.23 گرم /
اجرت : 20 %
', 1, 5200000),
(2,'نیم ست برگ با سنگ زمرد','rubygold-6170-4951-Size.webp','رنگ طلا : زرد /
کد : GHH0062 /
کالکشن : دست ساز /
قیمت سنگ : 850000  /
وزن : 8.7 گرم /
اجرت : 20 % ',6,20500000),
(3,'انگشتر همرد با سنگ لاجورد','rubygold-23183-2020-Size.webp','رنگ طلا : زرد /
کد : GRH0338 /
کالکشن : دست ساز /
قیمت سنگ : 300,000 /
وزن : 6.91 گرم /
اجرت : 20 %',8,11910000),
(4,'گوشواره فلاور یاقوت قرمز و سفید رزگلد','rubygold-15019-3099-Size.webp','رنگ طلا : رز گلد /
کد : GHS0014 /
کالکشن : اسکای /
وزن : 7.22 گرم /
اجرت : 26 %',4,12724000),
(5,'بنگل میخ کارتیه','rubygold-31584-5734-Size.webp','رنگ طلا : زرد ، رزگلد /
کد : GBC0009 /
کالکشن : کارتیه /
وزن :7.95 /
اجرت : 25 %',3,13892000),
(6,'گردنبند لبخند تیفانی','rubygold-19825-9334-Size.webp','رنگ طلا : زرد /
کد : GNH0421 /
کالکشن : دست ساز /
وزن : 23.45 گرم /
اجرت : 20 %',1,39230000),
(7,'گوشواره زنجیر ورساچه و مروارید باروک طبیعی','rubygold-17086-2078-Size.webp','رنگ طلا : زرد /
بست پشت گوشواره : ژلاتینی طبی /
کد : GEH0334 /
کالکشن : دست ساز /
قیمت سنگ : 240,000 /
وزن : 1.64 /
اجرت : 22 %',4,3072000),
(8,'دستبند چرم و طلا با پلاک تخت','rubygold-30324-5139-Size.webp','رنگ طلا : زرد /
رنگ چرم مردانه : مشکی /
کالکشن : اهورا /
قیمت چرم : 200,000 /
وزن : 3.38 گرم /
اجرت : 20 %',9,5887000),
(9,'گردنبند یورمن با زنجیر 2 رج کارتیه','rubygold-17241-2665-Size.webp','رنگ طلا : زرد /
کد : GNH0356 /
کالکشن : دست ساز /
وزن : 4.35 گرم /
اجرت : 20 %',1,7277000),
(10,'دستبند سنگ اونیکس و استوانه سواروسکی','rubygold-4843-0513-Size.webp','رنگ طلا : زرد /
کد : GBT0084 /
کالکشن : رستا /
قیمت سنگ : 285,000 /
وزن : 0.81 گرم /
اجرت : 20 %',9,1687000),
(11,'چوکر پلاژیو','rubygold-18667-3952-Size.webp','رنگ طلا : زرد /
کالکشن : پلاژیو /
وزن : 14.79 گرم /
اجرت : 26 %',1,26065000),
(12,'انگشتر مردانه ساده','rubygold-32680-3344-Size.webp','رنگ طلا : زرد /
کد : GRD0015 /
کالکشن : دیور /
وزن : 5.9 گرم /
اجرت : 26 %',8,10397000),
(13,'گردنبند زنجیر کارتیه پهن','rubygold-11085-3507-Size.webp','رنگ طلا : زرد /
کالکشن : کارتیه /
وزن : 30.36 گرم /
اجرت : 18 %',7,49886000),
(14,'گردنبند زنجیر کارتیه سایز متوسط','rubygold-11083-8036-Size.webp','رنگ طلا : زرد /
کالکشن : کارتیه /
وزن : 13.69 گرم /
اجرت : 18 %',7,22494000),
(15,'گردنبند زنجیر کارتیه باریک','rubygold-11081-9946-Size.webp','رنگ طلا : زرد /
کالکشن : کارتیه /
وزن : 9.11 گرم /
اجرت : 18 %',7,14969000),
(16,'انگشتر گل دور نگین','rubygold-32085-2618-Size.webp','رنگ طلا : زرد /
کالکشن : دست ساز / 
قیمت سنگ : 90,000 /
وزن : 1.51 گرم /
اجرت : 20 %',2,2650000),
(17,'گوشواره بخیه ای حلقه‌','rubygold-6218-6184-Size.webp','رنگ طلا : زرد /
بست پشت گوشواره : ژلاتینی طبی /
کد : GEY0028 /
کالکشن : سپینود /
وزن : 1.24 گرم /
اجرت : 23 %',4,2129000),
(18,'دکمه سردست با نگین اونیکس','rubygold-31250-3404-Size.webp','رنگ طلا : رز گلد /
کالکشن : راکتوری /
وزن : 12.05 گرم /
اجرت : 20 %',10,20159000),
(19,'گردنبند کرواتی حلقه با زنجیر کارتیه','rubygold-28197-9804-Size.webp','رنگ طلا : زرد /
کالکشن : دست ساز /
وزن : 2.53 گرم /
اجرت : 20 %
',1,4200000),
(20,'انگشتر فنری','rubygold-30246-6691-Size.webp','رنگ طلا : زرد /
کد : GRH0371 / 
کالکشن : دست ساز /
وزن : 3.68 گرم /
اجرت : 20 %',2,6156000),
(21,'نیم ست توپاز لاندن بلو کاشن','rubygold-14524-7091-Size.webp','رنگ طلا : رز گلد /
کد : GHS0021 /
کالکشن : اسکای /
قیمت سنگ : 2,220,000 /
وزن : 13.5 گرم /
اجرت : 26 % ',6,26398000),
(22,'دستبند کارتیه نگین دار','rubygold-5940-1793-Size.webp','رنگ طلا : رز گلد /
کد : GBR0015 /
کالکشن : راکتوری /
وزن : 16.23 گرم /
اجرت : 20 %
',3,27152000),
(23,'دستبند خوشه با سنگ مارکیز یاقوتی','rubygold-32128-5874-Size.webp','رنگ طلا : زرد /
کد : GBY0051 /
کالکشن : سپینود /
وزن : 2.08 گرم /
اجرت : 23 %',3,3572000),
(24,'دستبند چرم و طلا 4 لاین','rubygold-30322-2709-Size.webp','رنگ طلا : زرد /
رنگ چرم مردانه : قهوه ای /
کد : GBT0306 /
کالکشن : اهورا /
قیمت چرم : 295,000 /
وزن : 0.9 گرم /
اجرت : 20 %',9,1849000),
(25,'گردنبند سنگ عقیق و گوی طلا','rubygold-4855-1278-Size.webp','رنگ طلا : زرد /
کد : GNT0002 /
کالکشن : رستا /
قیمت سنگ : 161,000 /
وزن : 0.95 گرم /
اجرت : 20 %',7,1777000),
(26,'آویز ساعت گل','rubygold-6135-8334-Size.webp','رنگ طلا : زرد ، رزگلد /
کد : GWY0003 /
کالکشن : سپینود /
وزن : 2.35 گرم /
اجرت : 23 %',5,2350000),
(27,'زنجیر آرگا مردانه','rubygold-30070-5845-Size.webp','رنگ طلا : زرد /
کالکشن : کارتیه /
وزن : 10.83 گرم /
اجرت : 23 %',7,18602000),
(28,'انگشتر زنجیر کارتیه زنانه پهن','rubygold-11079-7639-Size.webp','رنگ طلا : زرد /
کالکشن : کارتیه /
وزن : 3.13 گرم /
اجرت : 18 %',2,5143000),
(29,'دستبند تیفانی مدل T','rubygold-19083-7645-Size.webp','رنگ طلا : زرد / 
کد : GBU0013 /
کالکشن : یورمن /
وزن : 23.77 گرم /
اجرت : 29 % ',3,43170000),
(30,'زنجیر رولکس مردانه','rubygold-30072-7161-Size.webp','رنگ طلا : ترکیبی /
کالکشن : پلاژیو /
وزن : 15.15 گرم /
اجرت : 29 %',7,27539000),
(31,'گوشواره حلقه و ضربدر میخی','rubygold-20842-0845-Size.webp','رنگ طلا : زرد /
بست پشت گوشواره : ژلاتینی طبی /
کد : GEH0361 /
کالکشن : دست ساز /
وزن :5.68 گرم /
اجرت : 20 %',4,9502000),
(32,'انگشتر رولکس طلا','rubygold-20682-7959-Size.webp','رنگ طلا : زرد /
کد : GRH0311 /
کالکشن : دست ساز /
وزن : 2.73 گرم /
اجرت : 20 %',2,4567000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'hanie', '1111', 'hanie@gmail.com'),
(2, 'eli', '2222', 'eli@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`trackCode`(20));

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

