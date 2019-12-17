-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 12:38 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboras`
--

-- --------------------------------------------------------

--
-- Table structure for table `atsiliepimas`
--

CREATE TABLE `atsiliepimas` (
  `slapyvardis` varchar(100) NOT NULL,
  `komentarai` text NOT NULL,
  `data` date NOT NULL,
  `id_Atsiliepimas` int(10) NOT NULL,
  `fk_Klientasid_Klientas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `automechanikas`
--

CREATE TABLE `automechanikas` (
  `id_Automechanikas` int(10) NOT NULL,
  `fk_Paskyraid_Paskyra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `automobilis`
--

CREATE TABLE `automobilis` (
  `marke` varchar(40) NOT NULL,
  `modelis` varchar(40) NOT NULL,
  `pagaminimo_data` date NOT NULL,
  `vietu_skaicius` int(1) NOT NULL,
  `modifikacija` text DEFAULT NULL,
  `pozymis` tinyint(1) NOT NULL,
  `pavaru_deze` int(2) NOT NULL,
  `kuro_tipas` int(2) NOT NULL,
  `kebulas` int(2) NOT NULL,
  `id_Automobilis` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `automobilis`
--

INSERT INTO `automobilis` (`marke`, `modelis`, `pagaminimo_data`, `vietu_skaicius`, `modifikacija`, `pozymis`, `pavaru_deze`, `kuro_tipas`, `kebulas`, `id_Automobilis`, `kaina`) VALUES
('Audi', 'A3', '2010-12-02', 4, NULL, 0, 1, 1, 1, 1, 1000),
('Audi', 'A6', '2016-12-15', 4, '', 0, 2, 1, 1, 2, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `auto_dalis`
--

CREATE TABLE `auto_dalis` (
  `tipas` varchar(30) NOT NULL,
  `kiekis` int(5) NOT NULL,
  `vieneto_kaina` double NOT NULL,
  `id_Auto_dalis` int(10) NOT NULL,
  `fk_Automobilisid_Automobilis` int(11) NOT NULL,
  `fk_Automechanikasid_Automechanikas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `darbo_grafikas`
--

CREATE TABLE `darbo_grafikas` (
  `data` date NOT NULL,
  `laikas_nuo` time NOT NULL,
  `laikas_iki` time NOT NULL,
  `pertrauka_nuo` time NOT NULL,
  `pertrauka_iki` time NOT NULL,
  `id_Darbo_grafikas` int(10) NOT NULL,
  `fk_Vadovasid_Vadovas` int(11) NOT NULL,
  `fk_Darbuotojasid_Darbuotojas` int(11) NOT NULL,
  `fk_Automechanikasid_Automechanikas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `darbuotojas`
--

CREATE TABLE `darbuotojas` (
  `id_Darbuotojas` int(11) NOT NULL,
  `fk_Paskyraid_Paskyra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `darbuotojas`
--

INSERT INTO `darbuotojas` (`id_Darbuotojas`, `fk_Paskyraid_Paskyra`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kebulu_tipai`
--

CREATE TABLE `kebulu_tipai` (
  `id_Kebulu_tipai` int(10) NOT NULL,
  `name` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kebulu_tipai`
--

INSERT INTO `kebulu_tipai` (`id_Kebulu_tipai`, `name`) VALUES
(1, 'sedanas'),
(2, 'hecbekas'),
(3, 'universalas'),
(4, 'visureigis'),
(5, 'pikapas'),
(6, 'coupe'),
(7, 'kabrioletas'),
(8, 'vienaturis');

-- --------------------------------------------------------

--
-- Table structure for table `klientas`
--

CREATE TABLE `klientas` (
  `id_Klientas` int(10) NOT NULL,
  `fk_Paskyraid_Paskyra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klientas`
--

INSERT INTO `klientas` (`id_Klientas`, `fk_Paskyraid_Paskyra`) VALUES
(10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kuro_tipas`
--

CREATE TABLE `kuro_tipas` (
  `id_Kuro_tipas` int(10) NOT NULL,
  `name` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kuro_tipas`
--

INSERT INTO `kuro_tipas` (`id_Kuro_tipas`, `name`) VALUES
(1, 'benzinas'),
(2, 'dyzelinas'),
(3, 'benzinas/elektra'),
(4, 'elektra'),
(5, 'dujos');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000000_create_vartotojai_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pakaitinis_automobilis`
--

CREATE TABLE `pakaitinis_automobilis` (
  `Data` date NOT NULL,
  `id_Pakaitinis_automobilis` int(10) NOT NULL,
  `fk_Klientasid_Klientas` int(11) NOT NULL,
  `fk_Automobilisid_Automobilis` int(11) NOT NULL,
  `fk_Automechanikasid_Automechanikas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pavaru_dezes`
--

CREATE TABLE `pavaru_dezes` (
  `id_Pavaru_dezes` int(10) NOT NULL,
  `name` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pavaru_dezes`
--

INSERT INTO `pavaru_dezes` (`id_Pavaru_dezes`, `name`) VALUES
(1, 'automatinė'),
(2, 'mechaninė');

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

CREATE TABLE `registracija` (
  `data` date NOT NULL,
  `vieta` varchar(50) NOT NULL,
  `priezastis` text NOT NULL,
  `id_Registracija` int(10) NOT NULL,
  `fk_Klientasid_Klientas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`data`, `vieta`, `priezastis`, `id_Registracija`, `fk_Klientasid_Klientas`) VALUES
('2019-12-18', 'Kaunas', 'Šiaip pasitikrint', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `data` date NOT NULL,
  `vieta` varchar(40) NOT NULL,
  `busena` tinyint(1) DEFAULT NULL,
  `id_Rezervacija` int(10) NOT NULL,
  `fk_Klientasid_Klientas` int(11) NOT NULL,
  `fk_Automobilisid_Automobilis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`data`, `vieta`, `busena`, `id_Rezervacija`, `fk_Klientasid_Klientas`, `fk_Automobilisid_Automobilis`) VALUES
('2019-12-19', 'Vilnius', 0, 2, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `skundas`
--

CREATE TABLE `skundas` (
  `priezastis` varchar(100) NOT NULL,
  `informacija` text NOT NULL,
  `data` date NOT NULL,
  `id_Skundas` int(10) NOT NULL,
  `fk_Klientasid_Klientas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sutartis`
--

CREATE TABLE `sutartis` (
  `id_Sutartis` int(10) NOT NULL,
  `fk_Automobilisid_Automobilis` int(11) NOT NULL,
  `fk_Klientasid_Klientas` int(11) NOT NULL,
  `busena` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sutartis`
--

INSERT INTO `sutartis` (`id_Sutartis`, `fk_Automobilisid_Automobilis`, `fk_Klientasid_Klientas`, `busena`) VALUES
(5, 1, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `Data` date NOT NULL,
  `Problema` text NOT NULL,
  `Automobilio_Valst_Nr` varchar(10) NOT NULL,
  `id_TA` int(10) NOT NULL,
  `fk_Klientasid_Klientas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`Data`, `Problema`, `Automobilio_Valst_Nr`, `id_TA`, `fk_Klientasid_Klientas`) VALUES
('2019-12-16', 'Neveikia rankinis stabdis', 'LTE-446', 1, 10),
('2019-12-11', 'Subyrėjęs šarnyras', 'DFG-123', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymas`
--

CREATE TABLE `uzsakymas` (
  `id_Uzsakymas` int(10) NOT NULL,
  `automobilio_komplektacija` text NOT NULL,
  `busena` tinyint(1) DEFAULT NULL,
  `fk_Klientasid_Klientas` int(11) NOT NULL,
  `fk_Automobilisid_Automobilis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uzsakymas`
--

INSERT INTO `uzsakymas` (`id_Uzsakymas`, `automobilio_komplektacija`, `busena`, `fk_Klientasid_Klientas`, `fk_Automobilisid_Automobilis`) VALUES
(1, 'asdasdsad', 0, 10, 1),
(2, 'Noriu, kad patronikai būtų', 0, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vadovas`
--

CREATE TABLE `vadovas` (
  `id_Vadovas` int(10) NOT NULL,
  `fk_Paskyraid_Paskyra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `id` int(10) NOT NULL,
  `vardas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pravarde` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vartotojai`
--

INSERT INTO `vartotojai` (`id`, `vardas`, `pravarde`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rokas', '', '$2y$10$HepXQ0H09rIBB6h6q/o7uOkJyADN4LOkX.Fx0zdmOeXjTzJX4fKg2', 'rokas@rokas.lt', NULL, '2019-12-15 10:20:04', '2019-12-15 10:20:04'),
(2, 'AHAHAH', 'AHHHHHHH', '$2y$10$tomXhK7oRrEoV25xuAc8KutqwQj2vji2G9Ho0eVwEhH8v77lTFx0S', 'AAAAA@AAAAA.lt', NULL, '2019-12-15 23:05:09', '2019-12-15 23:05:09'),
(3, '111111', '11111', '$2y$10$1ploIvw95uLGHQ0RI9yzdeS6hsjI95iRZU5Mm8Mmdn1XDSsyAwhaW', '1111@111.lt', NULL, '2019-12-16 08:55:04', '2019-12-16 08:55:04'),
(4, 'TEST', 'TESTUKAS', '$2y$10$xk7UE2LumTyPWcQIvCtcZOVZWdPNmyvA6UYu886eDQ96y4BtwKulu', 'test@test.lt', NULL, '2019-12-16 11:42:49', '2019-12-16 11:42:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atsiliepimas`
--
ALTER TABLE `atsiliepimas`
  ADD PRIMARY KEY (`id_Atsiliepimas`),
  ADD KEY `mato` (`fk_Klientasid_Klientas`);

--
-- Indexes for table `automechanikas`
--
ALTER TABLE `automechanikas`
  ADD PRIMARY KEY (`id_Automechanikas`),
  ADD UNIQUE KEY `fk_Paskyraid_Paskyra` (`fk_Paskyraid_Paskyra`);

--
-- Indexes for table `automobilis`
--
ALTER TABLE `automobilis`
  ADD PRIMARY KEY (`id_Automobilis`),
  ADD KEY `pavaru_deze` (`pavaru_deze`),
  ADD KEY `kuro_tipas` (`kuro_tipas`),
  ADD KEY `kebulas` (`kebulas`);

--
-- Indexes for table `auto_dalis`
--
ALTER TABLE `auto_dalis`
  ADD PRIMARY KEY (`id_Auto_dalis`),
  ADD KEY `turi4` (`fk_Automobilisid_Automobilis`),
  ADD KEY `uzsako1` (`fk_Automechanikasid_Automechanikas`);

--
-- Indexes for table `darbo_grafikas`
--
ALTER TABLE `darbo_grafikas`
  ADD PRIMARY KEY (`id_Darbo_grafikas`),
  ADD KEY `sudaro` (`fk_Vadovasid_Vadovas`),
  ADD KEY `turi` (`fk_Darbuotojasid_Darbuotojas`);

--
-- Indexes for table `darbuotojas`
--
ALTER TABLE `darbuotojas`
  ADD PRIMARY KEY (`id_Darbuotojas`),
  ADD UNIQUE KEY `id_Darbuotojas` (`id_Darbuotojas`),
  ADD KEY `DarbuotojasPaskyra` (`fk_Paskyraid_Paskyra`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebulu_tipai`
--
ALTER TABLE `kebulu_tipai`
  ADD PRIMARY KEY (`id_Kebulu_tipai`);

--
-- Indexes for table `klientas`
--
ALTER TABLE `klientas`
  ADD PRIMARY KEY (`id_Klientas`),
  ADD UNIQUE KEY `fk_Paskyraid_Paskyra` (`fk_Paskyraid_Paskyra`);

--
-- Indexes for table `kuro_tipas`
--
ALTER TABLE `kuro_tipas`
  ADD PRIMARY KEY (`id_Kuro_tipas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakaitinis_automobilis`
--
ALTER TABLE `pakaitinis_automobilis`
  ADD PRIMARY KEY (`id_Pakaitinis_automobilis`),
  ADD KEY `Gauna` (`fk_Klientasid_Klientas`),
  ADD KEY `Suteikiamas` (`fk_Automobilisid_Automobilis`),
  ADD KEY `Priskiria1` (`fk_Automechanikasid_Automechanikas`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pavaru_dezes`
--
ALTER TABLE `pavaru_dezes`
  ADD PRIMARY KEY (`id_Pavaru_dezes`);

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`id_Registracija`),
  ADD KEY `krepiasi_del` (`fk_Klientasid_Klientas`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`id_Rezervacija`),
  ADD KEY `pateikia1` (`fk_Klientasid_Klientas`),
  ADD KEY `priskirtas1` (`fk_Automobilisid_Automobilis`);

--
-- Indexes for table `skundas`
--
ALTER TABLE `skundas`
  ADD PRIMARY KEY (`id_Skundas`),
  ADD KEY `pateikia` (`fk_Klientasid_Klientas`);

--
-- Indexes for table `sutartis`
--
ALTER TABLE `sutartis`
  ADD PRIMARY KEY (`id_Sutartis`),
  ADD KEY `ieina` (`fk_Automobilisid_Automobilis`),
  ADD KEY `apmoka` (`fk_Klientasid_Klientas`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id_TA`),
  ADD KEY `Turi2` (`fk_Klientasid_Klientas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `uzsakymas`
--
ALTER TABLE `uzsakymas`
  ADD PRIMARY KEY (`id_Uzsakymas`),
  ADD KEY `sukuria5` (`fk_Klientasid_Klientas`),
  ADD KEY `pritaikomas3` (`fk_Automobilisid_Automobilis`);

--
-- Indexes for table `vadovas`
--
ALTER TABLE `vadovas`
  ADD PRIMARY KEY (`id_Vadovas`),
  ADD UNIQUE KEY `fk_Paskyraid_Paskyra` (`fk_Paskyraid_Paskyra`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atsiliepimas`
--
ALTER TABLE `atsiliepimas`
  MODIFY `id_Atsiliepimas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `automechanikas`
--
ALTER TABLE `automechanikas`
  MODIFY `id_Automechanikas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `automobilis`
--
ALTER TABLE `automobilis`
  MODIFY `id_Automobilis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auto_dalis`
--
ALTER TABLE `auto_dalis`
  MODIFY `id_Auto_dalis` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `darbo_grafikas`
--
ALTER TABLE `darbo_grafikas`
  MODIFY `id_Darbo_grafikas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `darbuotojas`
--
ALTER TABLE `darbuotojas`
  MODIFY `id_Darbuotojas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klientas`
--
ALTER TABLE `klientas`
  MODIFY `id_Klientas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pakaitinis_automobilis`
--
ALTER TABLE `pakaitinis_automobilis`
  MODIFY `id_Pakaitinis_automobilis` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registracija`
--
ALTER TABLE `registracija`
  MODIFY `id_Registracija` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `id_Rezervacija` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skundas`
--
ALTER TABLE `skundas`
  MODIFY `id_Skundas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sutartis`
--
ALTER TABLE `sutartis`
  MODIFY `id_Sutartis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `id_TA` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uzsakymas`
--
ALTER TABLE `uzsakymas`
  MODIFY `id_Uzsakymas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vadovas`
--
ALTER TABLE `vadovas`
  MODIFY `id_Vadovas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atsiliepimas`
--
ALTER TABLE `atsiliepimas`
  ADD CONSTRAINT `mato` FOREIGN KEY (`fk_Klientasid_Klientas`) REFERENCES `klientas` (`id_Klientas`);

--
-- Constraints for table `automechanikas`
--
ALTER TABLE `automechanikas`
  ADD CONSTRAINT `AutomechanikasPaskyra` FOREIGN KEY (`fk_Paskyraid_Paskyra`) REFERENCES `vartotojai` (`id`);

--
-- Constraints for table `automobilis`
--
ALTER TABLE `automobilis`
  ADD CONSTRAINT `automobilis_ibfk_1` FOREIGN KEY (`pavaru_deze`) REFERENCES `pavaru_dezes` (`id_Pavaru_dezes`),
  ADD CONSTRAINT `automobilis_ibfk_2` FOREIGN KEY (`kuro_tipas`) REFERENCES `kuro_tipas` (`id_Kuro_tipas`),
  ADD CONSTRAINT `automobilis_ibfk_3` FOREIGN KEY (`kebulas`) REFERENCES `kebulu_tipai` (`id_Kebulu_tipai`);

--
-- Constraints for table `auto_dalis`
--
ALTER TABLE `auto_dalis`
  ADD CONSTRAINT `turi4` FOREIGN KEY (`fk_Automobilisid_Automobilis`) REFERENCES `automobilis` (`id_Automobilis`),
  ADD CONSTRAINT `uzsako1` FOREIGN KEY (`fk_Automechanikasid_Automechanikas`) REFERENCES `automechanikas` (`id_Automechanikas`);

--
-- Constraints for table `darbo_grafikas`
--
ALTER TABLE `darbo_grafikas`
  ADD CONSTRAINT `sudaro` FOREIGN KEY (`fk_Vadovasid_Vadovas`) REFERENCES `vadovas` (`id_Vadovas`),
  ADD CONSTRAINT `turi` FOREIGN KEY (`fk_Darbuotojasid_Darbuotojas`) REFERENCES `darbuotojas` (`id_Darbuotojas`);

--
-- Constraints for table `darbuotojas`
--
ALTER TABLE `darbuotojas`
  ADD CONSTRAINT `DarbuotojasPaskyra` FOREIGN KEY (`fk_Paskyraid_Paskyra`) REFERENCES `vartotojai` (`id`);

--
-- Constraints for table `klientas`
--
ALTER TABLE `klientas`
  ADD CONSTRAINT `KlientasPaskyra` FOREIGN KEY (`fk_Paskyraid_Paskyra`) REFERENCES `vartotojai` (`id`);

--
-- Constraints for table `pakaitinis_automobilis`
--
ALTER TABLE `pakaitinis_automobilis`
  ADD CONSTRAINT `Gauna` FOREIGN KEY (`fk_Klientasid_Klientas`) REFERENCES `klientas` (`id_Klientas`),
  ADD CONSTRAINT `Priskiria1` FOREIGN KEY (`fk_Automechanikasid_Automechanikas`) REFERENCES `automechanikas` (`id_Automechanikas`),
  ADD CONSTRAINT `Suteikiamas` FOREIGN KEY (`fk_Automobilisid_Automobilis`) REFERENCES `automobilis` (`id_Automobilis`);

--
-- Constraints for table `registracija`
--
ALTER TABLE `registracija`
  ADD CONSTRAINT `krepiasi_del` FOREIGN KEY (`fk_Klientasid_Klientas`) REFERENCES `klientas` (`id_Klientas`);

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `pateikia1` FOREIGN KEY (`fk_Klientasid_Klientas`) REFERENCES `klientas` (`id_Klientas`),
  ADD CONSTRAINT `priskirtas1` FOREIGN KEY (`fk_Automobilisid_Automobilis`) REFERENCES `automobilis` (`id_Automobilis`);

--
-- Constraints for table `skundas`
--
ALTER TABLE `skundas`
  ADD CONSTRAINT `pateikia` FOREIGN KEY (`fk_Klientasid_Klientas`) REFERENCES `klientas` (`id_Klientas`);

--
-- Constraints for table `sutartis`
--
ALTER TABLE `sutartis`
  ADD CONSTRAINT `apmoka` FOREIGN KEY (`fk_Klientasid_Klientas`) REFERENCES `klientas` (`id_Klientas`),
  ADD CONSTRAINT `ieina` FOREIGN KEY (`fk_Automobilisid_Automobilis`) REFERENCES `automobilis` (`id_Automobilis`);

--
-- Constraints for table `ta`
--
ALTER TABLE `ta`
  ADD CONSTRAINT `Turi2` FOREIGN KEY (`fk_Klientasid_Klientas`) REFERENCES `klientas` (`id_Klientas`);

--
-- Constraints for table `uzsakymas`
--
ALTER TABLE `uzsakymas`
  ADD CONSTRAINT `pritaikomas3` FOREIGN KEY (`fk_Automobilisid_Automobilis`) REFERENCES `automobilis` (`id_Automobilis`),
  ADD CONSTRAINT `sukuria5` FOREIGN KEY (`fk_Klientasid_Klientas`) REFERENCES `klientas` (`id_Klientas`);

--
-- Constraints for table `vadovas`
--
ALTER TABLE `vadovas`
  ADD CONSTRAINT `VadovasPaskyra` FOREIGN KEY (`fk_Paskyraid_Paskyra`) REFERENCES `vartotojai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
