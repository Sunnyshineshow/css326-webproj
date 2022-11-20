-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 12:22 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `bookshelf`
--

CREATE TABLE `bookshelf` (
  `collection_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `bookshelf_serial` text NOT NULL,
  `borrowed_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_book`
--

CREATE TABLE `borrowed_book` (
  `borrow_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `date_borrowed` date NOT NULL,
  `date_expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fine_paid`
--

CREATE TABLE `fine_paid` (
  `book_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action&Adventure'),
(2, 'Comic'),
(3, 'Detective'),
(4, 'Fantasy'),
(5, 'Historical'),
(6, 'Horror '),
(7, 'Romance'),
(8, 'Memor'),
(9, 'Poetry'),
(10, 'Language ');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `emp_id` int(11) NOT NULL,
  `emp_fname` varchar(30) NOT NULL,
  `emp_lname` varchar(30) NOT NULL,
  `emp_gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_num`, `user_id`, `expire_date`) VALUES
(1, 7, '2024-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `returned_book`
--

CREATE TABLE `returned_book` (
  `returned_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_returned` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `tel_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fname`, `lname`, `tel_no`) VALUES
(1, '6322772359', '*1186EE5EFB03BB1F6B03EC94BA8673B3B4595854', 'Napon', '(Sunnyshineshow)', '+6695741822'),
(7, 'alicerayne', '*70DD2137A2F66BB4DDEF695BB013ACF9E823E035', 'Alice', 'Rayne', '+6699547896'),
(20, 'CCC', '*C165DDE46E7436332DA62278FF8A044F0EED8BF1', 'A', 'B', '+6695741822'),
(21, 'AAA', '*5AF9D0EA5F6406FB0EDD0507F81C1D5CEBE8AC9C', 'AA', 'AA', '0008880858');

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
-- Indexes for table `bookshelf`
--
ALTER TABLE `bookshelf`
  ADD PRIMARY KEY (`collection_id`),
  ADD KEY `bookshelf_ibfk_1` (`book_id`);

--
-- Indexes for table `borrowed_book`
--
ALTER TABLE `borrowed_book`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `collection_id` (`collection_id`),
  ADD KEY `borrowed_book_ibfk_3` (`user_id`);

--
-- Indexes for table `fine_paid`
--
ALTER TABLE `fine_paid`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_num`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `returned_book`
--
ALTER TABLE `returned_book`
  ADD PRIMARY KEY (`returned_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `collection_id` (`collection_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `bookshelf`
--
ALTER TABLE `bookshelf`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `borrowed_book`
--
ALTER TABLE `borrowed_book`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `returned_book`
--
ALTER TABLE `returned_book`
  MODIFY `returned_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookshelf`
--
ALTER TABLE `bookshelf`
  ADD CONSTRAINT `bookshelf_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrowed_book`
--
ALTER TABLE `borrowed_book`
  ADD CONSTRAINT `borrowed_book_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrowed_book_ibfk_2` FOREIGN KEY (`collection_id`) REFERENCES `bookshelf` (`collection_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrowed_book_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fine_paid`
--
ALTER TABLE `fine_paid`
  ADD CONSTRAINT `fine_paid_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fine_paid_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `returned_book`
--
ALTER TABLE `returned_book`
  ADD CONSTRAINT `returned_book_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `returned_book_ibfk_2` FOREIGN KEY (`collection_id`) REFERENCES `bookshelf` (`collection_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `returned_book_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
