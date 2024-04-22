-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 22, 2024 at 02:45 PM
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
  `ActorGender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Actor`
--

INSERT INTO `Actor` (`ActorFirstName`, `ActorLastName`, `ActorMovieID`, `ActorAge`, `ActorGender`) VALUES
('Timothée', 'Chalamet', 1, 28, 'M'),
('Zendaya', 'Coleman ', 1, 27, 'F'),
('Jack', 'Black ', 2, 54, 'M'),
('Viola', 'Davis', 2, 58, 'F'),
('Kaylee', 'Hottle', 3, 16, 'F'),
('Rebecca ', 'Hall', 3, 41, 'F'),
('Matthew ', 'McConaughey', 4, 54, 'M'),
('Jessica', 'Chastain', 4, 47, 'F'),
('Wagner', 'Moura', 5, 47, 'M'),
('Kirsten', 'Dunst', 5, 41, 'F'),
('Dev', 'Patel', 6, 33, 'M'),
('Sobhita', 'Dhulipala', 6, 31, 'F'),
('Felix Gary', 'Gary ', 7, 54, 'M'),
('Ice', 'Cube', 7, 54, 'M'),
('Chris', 'Tucker', 7, 52, 'M'),
('Nia', 'Long', 7, 53, 'F'),
('Ryan', 'Gosling', 8, 43, 'M'),
('Rachel', 'McAdams', 8, 45, 'F'),
('James', 'Garner', 8, 86, 'M'),
('Gena', 'Rowlands', 8, 93, 'F'),
('Vera', 'Farmiga', 9, 50, 'F'),
('Patrick', 'Wilson', 9, 50, 'M'),
('Sterling', 'Jerins', 9, 19, 'F'),
('Joey', 'King', 9, 24, 'F'),
('Mandy', 'Moore', 10, 40, 'F'),
('Shane', 'West', 10, 45, 'M'),
('Lauren', 'German', 10, 45, 'F'),
('James', 'McAvoy', 11, 45, 'M'),
('M. Night', 'Shyamalan', 11, 53, 'M'),
('Anya', 'Taylor-Joy', 11, 28, 'F'),
('Al', 'Pacino', 12, 83, 'M'),
('Marlon', 'Brando', 12, 80, 'M'),
('James', 'Caan', 12, 82, 'M'),
('Diane', 'Keaton', 12, 78, 'F'),
('Talia', 'Shire', 12, 77, 'F'),
('Brendan', 'Fraser', 13, 55, 'M'),
('Rachel', 'Weisz', 13, 54, 'F'),
('Kenneth', 'Branagh', 14, 63, 'M'),
('Judi', 'Dench', 14, 89, 'F'),
('Johnny', 'Depp', 14, 60, 'M'),
('Denzel', 'Washington', 15, 69, 'M'),
('Ryan', 'Gosling', 15, 43, 'M'),
('Ryan', 'Hurst', 15, 47, 'M'),
('Halle', 'Berry', 16, 57, 'F'),
('Sharon', 'Stone', 16, 66, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `Director`
--

CREATE TABLE `Director` (
  `DirectorFirstName` varchar(255) DEFAULT NULL,
  `DirectorLastName` varchar(255) DEFAULT NULL,
  `DirectorID` int(11) DEFAULT NULL,
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
  `GenreID` int(11) DEFAULT NULL
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
  `MovieID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`MovieDuration`, `MovieName`, `MovieGenre`, `MovieRating`, `MovieReleaseDate`, `MovieID`) VALUES
('2h 46m', 'Dune: Part Two', 'Science Fiction', '4.6', '2024-03-01', 1),
('1h 34m', 'Kung Fu Panda 4', 'Action', '3.5', '2024-03-08', 2),
('1h 55m', 'Godzilla x Kong: The New Empire', 'Action', '4.6', '2024-03-29', 3),
('2h 49m', 'Interstellar', 'Science Fiction', '4.9', '2014-10-26', 4),
('1h 49m', 'Civil War', 'Science Fiction', '2.7', '2024-04-12', 5),
('2h 1m', 'Monkey Man ', 'Action ', '4.0', '2024-04-05', 6),
('1h 30m', 'Friday', 'Comedy', '4.7', '1995-04-26', 7),
('2h 1m', 'The Notebook', 'Romance', '4.7', '2004-06-25', 8),
('1h 52m', 'The Conjuring', 'Horror', '4.7', '2013-07-19', 9),
('1h 42m', 'A Walk to Remember', 'Romance', '4.7', '2002-01-25', 10),
('1h 57m', 'Split', 'Thriller', '4.3', '2016-09-26', 11),
('2h 55m', 'The Godfather', 'Drama', '4.7', '1972-03-24', 12),
('2h 4m', 'The Mummy', 'Adventure', '4.7', '1999-05-04', 13),
('1h 54m', 'Murder on the Orient Express', 'Mystery', '4.2', '2017-11-10', 14),
('2h', 'Remember the Titans', 'Sports', '4.7', '2000-09-23', 15),
('1h 44m', 'Catwoman', 'Action', '3.4', '2004-07-19', 16);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
