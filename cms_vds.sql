--
-- Baza danych: `cms_vds`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `telephone_number` text NOT NULL,
  `status` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `contact`
--

INSERT INTO `contact` (`id`, `email`, `telephone_number`, `status`, `data`) VALUES
(1, 'kuba337@interia.eu', '', '1', '2017-04-01'),
(2, '', '987789879', '1', '2017-04-02'),
(3, 'kuba337@interia.eu', '987789879', '1', '2017-04-11'),
(4, 'kuba@interia.eu', '', '1', '2017-04-12'),
(5, 'karolina@interia.pl', '', '1', '2017-04-12'),
(6, 'kuba337@interia.eu', '', '1', '2017-04-14'),
(7, 'stefan@interia.pl', '', '1', '2017-04-07'),
(8, '', '987789879', '1', '2017-04-11'),
(9, 'kuba337@interia.eu', '', '1', '2017-04-11'),
(10, 'test@test.pl', '', '1', '2017-04-12'),
(11, '', '123456789', '1', '2017-04-12'),
(12, 'kuba337@interia.eu', '', '0', '2017-04-14');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `content`
--

CREATE TABLE `content` (
  `id` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `content`
--

INSERT INTO `content` (`id`, `content`) VALUES
('content_header_start_1', 'Projektujemy wszystkoo!'),
('content_header_start_2', 'Od oznakowania po Twoje marzenia!'),
('content_header_thema_1', 'Lorem ipsum dolor sit amet'),
('content_header_1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
('content_header_thema_2', 'Lorem ipsum dolor sit amet'),
('content_header_2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `counter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `counter_v`
--

CREATE TABLE `counter_v` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `counter_v`
--

INSERT INTO `counter_v` (`id`, `count`, `data`) VALUES
(21, 12, '2017-04-01'),
(28, 8, '2017-04-03'),
(30, 18, '2017-04-07'),
(31, 20, '2017-04-08'),
(32, 8, '2017-04-11'),
(33, 30, '2017-04-12'),
(34, 9, '2017-04-13'),
(35, 2, '2017-04-14'),
(36, 9, '2017-04-17'),
(37, 0, '2017-04-18'),
(38, 8, '2017-04-19'),
(39, 50, '2017-04-21'),
(40, 7, '2017-04-28'),
(41, 0, '2017-04-30'),
(42, 0, '2017-05-02'),
(43, 31, '2017-05-11'),
(44, 44, '2017-05-12'),
(45, 0, '2017-05-15'),
(46, 0, '2017-05-16');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `counter_v_real`
--

CREATE TABLE `counter_v_real` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `counter_v_real`
--

INSERT INTO `counter_v_real` (`id`, `count`, `data`) VALUES
(1, 1, '2017-04-01'),
(6, 2, '2017-04-03'),
(7, 4, '2017-04-07'),
(8, 3, '2017-04-08'),
(10, 6, '2017-04-11'),
(13, 5, '2017-04-12'),
(14, 1, '2017-04-13'),
(15, 1, '2017-04-14'),
(16, 0, '2017-04-17'),
(17, 0, '2017-04-18'),
(18, 1, '2017-04-19'),
(19, 1, '2017-04-21'),
(20, 2, '2017-04-28'),
(21, 0, '2017-04-30'),
(22, 0, '2017-05-02'),
(23, 0, '2017-05-11'),
(24, 0, '2017-05-12'),
(25, 0, '2017-05-15'),
(26, 0, '2017-05-16');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `evenement`
--

INSERT INTO `evenement` (`id`, `title`, `start`, `end`) VALUES
(17, 'Urodziny', '2017-05-09 20:00:00', '2017-05-18 00:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `changeName` text NOT NULL,
  `filter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `changeName`, `filter`) VALUES
(21, 'angry-hissing-cat-striped-fluffy-tousled-striped-not-purebred-kitten-kitten-white-background-small-predator-small-35157220.jpg', '2249d68923fc67ad4c98d9305fef3ca4.jpg', 'products'),
(22, 'KotDomowy.jpg', '29a68877d3dac7cf3817dc930ffe44c6.jpg', 'products'),
(24, 'Bras-1-e1492184754812-360x360.jpg', 'f8bc1dfe86711ffb146afd64f5fb9746.jpg', 'marking'),
(25, 'DSC_0078-9a6f647fa2660841be99214b45a522ec.JPG', '389f573e55fb4748a59d76d6bf2d38f2.JPG', 'marking'),
(26, 'DSC_0130-0d00ea4d0db62888b41f7573cc250d32.JPG', '576b88f601cccea0afd8664c227c6a8f.JPG', 'marking'),
(28, 'IMG_6463-e1444468399900-360x360.jpg', '4d49655054bc3b7483075a79da5226d3.jpg', 'identification'),
(29, 'jak-przechowywac-jedzenie-360x360.jpg', '471f3f8da62f2ab52e317a0c004afda9.jpg', 'identification'),
(30, 'jedzenie_w_pracy-360x360.jpg', '2fccba2a53afa753e5a12782b3729bd3.jpg', 'identification'),
(31, '36.jpg', '1f9ffafcc4c0bbc70331f044b842b7fc.jpg', 'products'),
(32, '36.jpg', '1f9ffafcc4c0bbc70331f044b842b7fc.jpg', 'products');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `changeName` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pdf`
--

INSERT INTO `pdf` (`id`, `name`, `changeName`, `data`) VALUES
(17, '9-Diody mikrofalowe.pdf', '006d0d54bb5f9b09273ed9ff612e11a8.pdf', '2017-03-29'),
(21, '7-Tyrystory..pdf', '1f8ad0328452d13d23c369f954d297c2.pdf', '2017-04-05');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `server_ip`
--

CREATE TABLE `server_ip` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '93744ca68ed4345c5295906224560dea');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_v`
--
ALTER TABLE `counter_v`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_v_real`
--
ALTER TABLE `counter_v_real`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server_ip`
--
ALTER TABLE `server_ip`
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
-- AUTO_INCREMENT dla tabeli `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `counter_v`
--
ALTER TABLE `counter_v`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT dla tabeli `counter_v_real`
--
ALTER TABLE `counter_v_real`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT dla tabeli `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT dla tabeli `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT dla tabeli `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT dla tabeli `server_ip`
--
ALTER TABLE `server_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
