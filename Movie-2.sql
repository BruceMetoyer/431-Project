-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2024 at 10:30 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `Actor`
--

CREATE TABLE `Actor` (
  `ActorFirstName` varchar(255) DEFAULT NULL,
  `ActorLastName` varchar(255) DEFAULT NULL,
  `ActorMovieID` int(11) DEFAULT NULL,
  `ActorAge` int(11) DEFAULT NULL,
  `ActorGender` varchar(255) DEFAULT NULL,
  `ActorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Actor`
--

INSERT INTO `Actor` (`ActorFirstName`, `ActorLastName`, `ActorMovieID`, `ActorAge`, `ActorGender`, `ActorID`) VALUES
('Timothée', 'Chalamet', 1, 28, 'M', 1),
('Zendaya', 'Coleman ', 1, 27, 'F', 2),
('Jack', 'Black ', 2, 54, 'M', 3),
('Viola', 'Davis', 2, 58, 'F', 4),
('Kaylee', 'Hottle', 3, 16, 'F', 5),
('Rebecca ', 'Hall', 3, 41, 'F', 6),
('Matthew ', 'McConaughey', 4, 54, 'M', 7),
('Jessica', 'Chastain', 4, 47, 'F', 8),
('Wagner', 'Moura', 5, 47, 'M', 9),
('Kirsten', 'Dunst', 5, 41, 'F', 10),
('Dev', 'Patel', 6, 33, 'M', 11),
('Sobhita', 'Dhulipala', 6, 31, 'F', 12),
('Felix Gary', 'Gary ', 7, 54, 'M', 13),
('Ice', 'Cube', 7, 54, 'M', 14),
('Chris', 'Tucker', 7, 52, 'M', 15),
('Nia', 'Long', 7, 53, 'F', 16),
('Ryan', 'Gosling', 8, 43, 'M', 17),
('Rachel', 'McAdams', 8, 45, 'F', 18),
('James', 'Garner', 8, 86, 'M', 19),
('Gena', 'Rowlands', 8, 93, 'F', 20),
('Vera', 'Farmiga', 9, 50, 'F', 21),
('Patrick', 'Wilson', 9, 50, 'M', 22),
('Sterling', 'Jerins', 9, 19, 'F', 23),
('Joey', 'King', 9, 24, 'F', 24),
('Mandy', 'Moore', 10, 40, 'F', 25),
('Shane', 'West', 10, 45, 'M', 26),
('Lauren', 'German', 10, 45, 'F', 27),
('James', 'McAvoy', 11, 45, 'M', 28),
('M. Night', 'Shyamalan', 11, 53, 'M', 29),
('Anya', 'Taylor-Joy', 11, 28, 'F', 30),
('Al', 'Pacino', 12, 83, 'M', 31),
('Marlon', 'Brando', 12, 80, 'M', 32),
('James', 'Caan', 12, 82, 'M', 33),
('Diane', 'Keaton', 12, 78, 'F', 34),
('Talia', 'Shire', 12, 77, 'F', 35),
('Brendan', 'Fraser', 13, 55, 'M', 36),
('Rachel', 'Weisz', 13, 54, 'F', 37),
('Kenneth', 'Branagh', 14, 63, 'M', 38),
('Judi', 'Dench', 14, 89, 'F', 39),
('Johnny', 'Depp', 14, 60, 'M', 40),
('Denzel', 'Washington', 15, 69, 'M', 41),
('Ryan', 'Hurst', 15, 47, 'M', 43),
('Halle', 'Berry', 16, 57, 'F', 44),
('Sharon', 'Stone', 16, 66, 'F', 45);

-- --------------------------------------------------------

--
-- Table structure for table `Director`
--

CREATE TABLE `Director` (
  `DirectorFirstName` varchar(255) DEFAULT NULL,
  `DirectorLastName` varchar(255) DEFAULT NULL,
  `DirectorID` int(11) NOT NULL,
  `DirectorAge` int(11) DEFAULT NULL,
  `DirectorGender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Director`
--

INSERT INTO `Director` (`DirectorFirstName`, `DirectorLastName`, `DirectorID`, `DirectorAge`, `DirectorGender`) VALUES
('Denis', 'Villeneuve', 1, 56, 'M'),
('Mike', 'Mitchell', 2, 53, 'M'),
('Adam', 'Wingard', 3, 41, 'M'),
('Christopher', 'Nolan', 4, 53, 'M'),
('Alex', 'Garland', 5, 53, 'M'),
('Dev', 'Patel', 6, 33, 'M'),
('Felix Gary', 'Gary', 7, 54, 'M'),
('Nick', 'Cassavetes', 8, 64, 'M'),
('James', 'Wan', 9, 47, 'M'),
('Adam', 'Shankman', 10, 59, 'M'),
('M. Night', 'Shyamalan', 11, 53, 'M'),
('Francis Ford', 'Coppola', 12, 85, 'M'),
('Stephen', 'Sommers', 13, 62, 'M'),
('Kenneth', 'Branagh', 14, 63, 'M'),
('Boaz', 'Yakin', 15, 57, 'M'),
('Pitof', 'Comar', 16, 66, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `Genre`
--

CREATE TABLE `Genre` (
  `GenreName` varchar(255) DEFAULT NULL,
  `GenreID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Genre`
--

INSERT INTO `Genre` (`GenreName`, `GenreID`) VALUES
('Action', 1),
('Comedy', 2),
('Science Fiction', 3),
('Romance', 4),
('Horror', 5),
('Thriller', 6),
('Drama', 7),
('Adventure ', 8),
('Mystery', 9),
('Sports', 10);

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

CREATE TABLE `Movie` (
  `MovieDuration` varchar(255) DEFAULT NULL,
  `MovieName` varchar(255) DEFAULT NULL,
  `MovieGenre` varchar(255) DEFAULT NULL,
  `MovieRating` varchar(5) DEFAULT NULL,
  `MovieReleaseDate` date DEFAULT NULL,
  `MovieID` int(11) NOT NULL,
  `DirectorMovieID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`MovieDuration`, `MovieName`, `MovieGenre`, `MovieRating`, `MovieReleaseDate`, `MovieID`, `DirectorMovieID`) VALUES
('2h 46m', 'Dune: Part Two', 'Science Fiction', '8.7', '2024-03-01', 1, 1),
('1h 34m', 'Kung Fu Panda 4', 'Action', '6.3', '2024-03-08', 2, 2),
('1h 55m', 'Godzilla x Kong: The New Empire', 'Action', '6.5', '2024-03-29', 3, 3),
('2h 49m', 'Interstellar', 'Science Fiction', '8.7', '2014-10-26', 4, 4),
('1h 49m', 'Civil War', 'Science Fiction', '7.6', '2024-04-12', 5, 5),
('2h 1m', 'Monkey Man ', 'Action ', '7.1', '2024-04-05', 6, 6),
('1h 30m', 'Friday', 'Comedy', '7.2', '1995-04-26', 7, 7),
('2h 1m', 'The Notebook', 'Romance', '7.8', '2004-06-25', 8, 8),
('1h 52m', 'The Conjuring', 'Horror', '7.5', '2013-07-19', 9, 9),
('1h 42m', 'A Walk to Remember', 'Romance', '7.3', '2002-01-25', 10, 10),
('1h 57m', 'Split', 'Thriller', '7.3', '2016-09-26', 11, 11),
('2h 55m', 'The Godfather', 'Drama', '9.2', '1972-03-24', 12, 12),
('2h 4m', 'The Mummy', 'Adventure', '7.1', '1999-05-04', 13, 13),
('1h 54m', 'Murder on the Orient Express', 'Mystery', '6.5', '2017-11-10', 14, 14),
('2h', 'Remember the Titans', 'Sports', '7.8', '2000-09-23', 15, 15),
('1h 44m', 'Catwoman', 'Action', '3.4', '2004-07-19', 16, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Actor`
--
ALTER TABLE `Actor`
  ADD PRIMARY KEY (`ActorID`);

--
-- Indexes for table `Director`
--
ALTER TABLE `Director`
  ADD PRIMARY KEY (`DirectorID`);

--
-- Indexes for table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`GenreID`);

--
-- Indexes for table `Movie`
--
ALTER TABLE `Movie`
  ADD PRIMARY KEY (`MovieID`),
  ADD KEY `FK_directormid` (`DirectorMovieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Actor`
--
ALTER TABLE `Actor`
  MODIFY `ActorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `Director`
--
ALTER TABLE `Director`
  MODIFY `DirectorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `GenreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Movie`
--
ALTER TABLE `Movie`
  ADD CONSTRAINT `FK_directormid` FOREIGN KEY (`DirectorMovieID`) REFERENCES `Director` (`DirectorID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

