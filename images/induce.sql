-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 10:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `induce`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `sno` int(70) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `art_desc` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`sno`, `date`, `time`, `title`, `image`, `art_desc`) VALUES
(6, '2020-07-25', '07:31:38', 'Facebook', './images/facebook.svg', 'This is facebook icon <a href=\"https://www.facebook.com\"> Facebook </a>'),
(7, '2020-07-25', '07:44:21', 'Instagram', './images/instagram.svg', 'This is instagram icon <a href=\"https://www.instagram.com\"> Instagram </a>'),
(8, '2020-07-26', '11:38:22', 'Demo3', './images/ny.jpg', 'This is a big test'),
(9, '2020-07-26', '12:45:44', 'Twitter', './images/twitter.svg', 'This is twitter logo'),
(10, '2020-07-26', '12:49:56', 'Grand Theft Auto V', './images/gtav.jpg', 'Los Santos: a sprawling sun-soaked metropolis full of self-help gurus, starlets, and fading celebrities, once the envy of the Western world, now struggling to stay afloat in an era of economic uncertainty and cheap reality TV.\r\n\r\nAmidst the turmoil, three very different criminals plot their own chances of survival and success: Franklin, a street hustler looking for real opportunities and serious money; Michael, a professional ex-con whose retirement is a lot less rosy than he hoped it would be; and Trevor, a violent maniac driven by the chance of a cheap high and the next big score. Running out of options, the crew risks everything in a series of daring and dangerous heists that could set them up for life.\r\n\r\nThe biggest, most dynamic and most diverse open world ever created, Grand Theft Auto V blends storytelling and gameplay in new ways as players repeatedly jump in and out of the lives of the gameâ€™s three lead characters, playing all sides of the gameâ€™s interwoven story.\r\n\r\nAll the classic hallmarks of the groundbreaking series return, including incredible attention to detail and Grand Theft Autoâ€™s darkly humorous take on modern culture, alongside a brand new and ambitious approach to open-world multiplayer.\r\n\r\nDeveloped by series creators Rockstar North, Grand Theft Auto V is available worldwide for PC, PlayStationÂ®4, PlayStationÂ®3, Xbox OneÂ® and Xbox 360Â®.');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `password`) VALUES
('sushanth@induce.co.in', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `sno` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
