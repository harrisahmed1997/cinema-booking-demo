-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 10:13 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nueplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `cinemaId` int(11) NOT NULL,
  `cinemaType` varchar(40) DEFAULT NULL,
  `maxseats` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`cinemaId`, `cinemaType`, `maxseats`, `price`) VALUES
(1, 'Silver', 70, 1000),
(2, 'Gold', 100, 1500),
(3, 'Platinum', 100, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movieId` int(11) NOT NULL,
  `movieName` varchar(40) DEFAULT NULL,
  `movieCat` varchar(40) DEFAULT NULL,
  `movieRuntime` bigint(20) DEFAULT NULL,
  `movieImage` varchar(255) DEFAULT NULL,
  `movieDescription` longtext DEFAULT NULL,
  `movieStatus` varchar(100) DEFAULT NULL,
  `movieRating` int(11) DEFAULT NULL,
  `movieTrailer` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movieId`, `movieName`, `movieCat`, `movieRuntime`, `movieImage`, `movieDescription`, `movieStatus`, `movieRating`, `movieTrailer`) VALUES
(3, 'Oblivion', 'Action/Adventure', 7440, '1966691347mv1.jpg', 'A court martial sends a veteran soldier to a distant planet, where he has to ... Everything New on Hulu in November. There&#39;s a whole lot to love about Hulu&#39;s ', 'Showing', NULL, 'https://www.youtube.com/embed/XmIIgE7eSak'),
(4, 'Black Adam', 'Action/Adventure', 7440, '868194380blackadam.jpg', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', 'Showing', NULL, 'https://www.youtube.com/embed/EXeTwQWrcwY'),
(5, 'The Dark Knight', 'Action/Adventure', 9120, '2142151293darknight.jpg', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', 'Showing', NULL, 'https://www.youtube.com/watch?v=TQfATDZY5Y4'),
(6, 'Man Of Steel', 'Action/Adventure', 9120, '333395070mos.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis quos tempore voluptatibus.', 'Showing', NULL, 'https://www.youtube.com/watch?v=T6DJcgm3wNY'),
(7, 'Avengers Endgame', 'Action/Adventure', 10800, '585074086avenger.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis quos tempore voluptatibus.', 'Showing', NULL, 'https://www.youtube.com/watch?v=TcMBFSGVi1c'),
(8, 'Interstellar', 'SciFi', 10800, '1778344385interstellar.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis quos tempore voluptatibus.', 'Showing', NULL, 'https://www.youtube.com/watch?v=zSWdZVtXT7E'),
(9, 'John Wick 2', 'Action/Adventure', 7200, '1021955603john wick.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis quos tempore voluptatibus.', 'Showing', NULL, 'https://www.youtube.com/watch?v=XGk2EfbD_Ps'),
(10, 'Black Panther: Wakanda Forever', 'Action/Adventure', 7200, '1228562629wakandaforever.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis quos tempore voluptatibus.', 'Upcoming', NULL, 'https://www.youtube.com/embed/_Z3QKkl1WyM');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `showId` int(11) DEFAULT NULL,
  `seatsBooked` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservedseats`
--

CREATE TABLE `reservedseats` (
  `orderId` int(11) DEFAULT NULL,
  `seatnumber` varchar(40) DEFAULT NULL,
  `priceEach` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `showtimes`
--

CREATE TABLE `showtimes` (
  `showId` int(11) NOT NULL,
  `movieId` int(11) DEFAULT NULL,
  `cinemaId` int(11) DEFAULT NULL,
  `showtimings` varchar(100) DEFAULT NULL,
  `showDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showtimes`
--

INSERT INTO `showtimes` (`showId`, `movieId`, `cinemaId`, `showtimings`, `showDate`) VALUES
(2, 4, 1, '22:29', '2022-11-05'),
(3, 5, 3, '15:29', '2022-11-05'),
(4, 6, 3, '17:40', '2022-11-16'),
(5, 7, 2, '22:40', '2022-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(40) DEFAULT NULL,
  `userEmail` varchar(40) DEFAULT NULL,
  `userPw` varchar(40) DEFAULT NULL,
  `userRole` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPw`, `userRole`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`cinemaId`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movieId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `showId` (`showId`);

--
-- Indexes for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD PRIMARY KEY (`showId`),
  ADD KEY `movieId` (`movieId`),
  ADD KEY `cinemaId` (`cinemaId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `cinemaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `showtimes`
--
ALTER TABLE `showtimes`
  MODIFY `showId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`showId`) REFERENCES `showtimes` (`showId`);

--
-- Constraints for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD CONSTRAINT `showtimes_ibfk_1` FOREIGN KEY (`movieId`) REFERENCES `movies` (`movieId`),
  ADD CONSTRAINT `showtimes_ibfk_2` FOREIGN KEY (`cinemaId`) REFERENCES `cinemas` (`cinemaId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
