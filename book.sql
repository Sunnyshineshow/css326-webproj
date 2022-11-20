-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 12:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarian`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `author` text NOT NULL,
  `genre_id` int(11) NOT NULL,
  `book_img` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `author`, `genre_id`, `book_img`, `date_added`) VALUES
(1, 'Harry Potter and the Philosopher\'s Stone', 'J. K. Rowling', 4, '', '2022-11-20'),
(2, 'Harry Potter and the Chamber of Secrets', 'J. K. Rowling', 4, '', '2022-11-20'),
(3, 'Harry Potter and the Prisoner of Azkaban', 'J. K. Rowling', 4, '', '2022-11-20'),
(4, 'Harry Potter and the Goblet of Fire', 'J. K. Rowling', 4, '', '2022-11-20'),
(5, 'Harry Potter and the Order of the Phoenix', 'J. K. Rowling', 4, '', '2022-11-20'),
(6, 'Harry Potter and the Half-Blood Prince', 'J. K. Rowling', 4, '', '2022-11-20'),
(7, 'Harry Potter and the Deathly Hallows', 'J. K. Rowling', 4, '', '2022-11-20'),
(8, 'Fire & Blood', 'George R. R. Martin', 4, '', '2022-11-20'),
(9, 'A Game of Thrones', 'George R. R. Martin', 4, '', '2022-11-20'),
(10, 'A Clash of Kings', 'George R. R. Martin', 4, '', '2022-11-20'),
(11, 'A Storm of Swords', 'George R. R. Martin', 4, '', '2022-11-20'),
(12, 'A Feast for Crows', 'George R. R. Martin', 4, '', '2022-11-20'),
(13, 'A Dance with Dragons', 'George R. R. Martin', 4, '', '2022-11-20'),
(14, 'The Winds of Winter', 'George R. R. Martin', 4, '', '2022-11-20'),
(15, 'A Dream of Spring', 'George R. R. Martin', 4, '', '2022-11-20'),
(16, 'The Sun and Her Flowers', 'Rupi Kaur', 9, '', '2022-11-20'),
(17, 'Pillow Thoughts', 'Courtney Peppernell', 9, '', '2022-11-20'),
(18, 'Milk honey', 'Rupi Kaur', 9, '', '2022-11-20'),
(19, 'Call Us What We Carry', 'Amanda Gorman', 9, '', '2022-11-20'),
(20, 'Devotions: The Selected Poems of Mary Oliver', 'Mary Oliver', 9, '', '2022-11-20'),
(21, 'Home Body', 'Rupi Kaur', 9, '', '2022-11-20'),
(22, 'Dracula', 'Bram Stoker', 6, '', '2022-11-20'),
(23, 'Frankenstein', 'Mary Shelley', 6, '', '2022-11-20'),
(24, 'The Haunting of Hill House', 'Shirley Jackson', 6, '', '2022-11-20'),
(25, 'The Shining', 'Stephen King', 6, '', '2022-11-20'),
(26, 'It', 'Stephen King', 6, '', '2022-11-20'),
(27, 'Interview with the Vampire', 'Anne Rice', 6, '', '2022-11-20'),
(28, 'House of Leaves', 'Mark Z. Danielewski', 6, '', '2022-11-20'),
(29, 'Something Wicked This Way Comes', 'Ray Bradbury', 6, '', '2022-11-20'),
(30, 'A Light in the Flame: A Flesh and Fire Novel', 'Jennifer L. Armentrout', 7, '', '2022-11-20'),
(31, 'Red, White & Royal Blue', 'Casey McQuiston', 7, '', '2022-11-20'),
(32, 'It Ends with Us', 'Colleen Hoover', 7, '', '2022-11-20'),
(33, 'Guns, Germs, and Steel', 'Jared Diamond', 5, '', '2022-11-20'),
(34, '1776', 'David McCullough', 5, '', '2022-11-20'),
(35, 'Short Stories in German for Beginners', 'Alex Rawlings, Olly Richards', 10, '', '2022-11-20'),
(36, 'The Language Instinct', 'Steven Pinker', 10, '', '2022-11-20'),
(37, 'How to Learn a Foreign Language', 'Rosetta Stone', 10, '', '2022-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
