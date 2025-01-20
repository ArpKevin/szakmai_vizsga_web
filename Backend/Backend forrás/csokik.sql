
CREATE TABLE `csokik` (
  `id` tinyint(5) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `ara` varchar(255) NOT NULL,
  `raktaron` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

INSERT INTO `csokik` (`id`, `nev`, `ara`, `raktaron`) VALUES
(1, 'Mogyorós csoki', '2500', 1),
(2, 'Fehér csoki', '333', 0),
(3, 'Lyukas csoki', '111', 0),
(4, 'Karamellás csoki', '2000', 1),
(5, 'Édes csoki', '500', 1),
(6, 'Narancsos csoki', '1200', 1),
(7, 'Málnás csoki', '1500', 1),
(8, 'Kókuszos csoki', '1800', 1),
(9, 'Édes-sós csoki', '1600', 1),
(10, 'Kávés csoki', '1900', 1);


ALTER TABLE `csokik`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `csokik`
  MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
