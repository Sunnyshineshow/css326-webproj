-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 20, 2022 at 01:17 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

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
(1, 'Harry Potter and the Philosopher\'s Stone', 'J. K. Rowling', 4, 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRkWXbfQrO5oTm1I5izjeRTbQD-vKPnybT24S2kFw2eH8LyyCo5', '2022-11-20'),
(2, 'Harry Potter and the Chamber of Secrets', 'J. K. Rowling', 4, 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSyDaN5FijaQ_3OuhFtfYLkXDkAfv07RnKNiNwUzbvOjAE2V9EQ', '2022-11-20'),
(3, 'Harry Potter and the Prisoner of Azkaban', 'J. K. Rowling', 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh1m68UISOwEUsmJVsXRqkQRxDDikdklLlJJL8P00ReMgJU65o', '2022-11-20'),
(4, 'Harry Potter and the Goblet of Fire', 'J. K. Rowling', 4, 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSQ1bZhaGKFZeAQjDSG-l3u10L6cEVo0V5aq0UaPlp_JInnCuoR', '2022-11-20'),
(5, 'Harry Potter and the Order of the Phoenix', 'J. K. Rowling', 4, 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQCPNZndZABecOc65sVX1iBUpRMyNpniSEpGldvnsvrquvfPe_h', '2022-11-20'),
(6, 'Harry Potter and the Half-Blood Prince', 'J. K. Rowling', 4, 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTQ41rowJmF7TfF6fxlrCe-4Ilb4PgjLTvlesW-Y_Eeg7OGn7Ll', '2022-11-20'),
(7, 'Harry Potter and the Deathly Hallows', 'J. K. Rowling', 4, 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR1Ict-zH_yrWT1_Zwcnqe691gPLEClqphfG64AJD2FKPtRD1Cw', '2022-11-20'),
(8, 'Fire & Blood', 'George R. R. Martin', 4, 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1532828095i/39943621._UY630_SR1200,630_.jpg', '2022-11-20'),
(9, 'A Game of Thrones', 'George R. R. Martin', 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIc-H9My9FtjycLDSrkfK_rv3vS-tGklB8XFQ4a1yc1WobpJeN', '2022-11-20'),
(10, 'A Clash of Kings', 'George R. R. Martin', 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAgg5mNygDIwPAGeSmT9s67RUf1_GQZ7DeMj5OMr9EXntqPjY7', '2022-11-20'),
(11, 'A Storm of Swords', 'George R. R. Martin', 4, 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRQERt9t5EtEVj8wI8s8wV7Vk8VRvBqJhkwYmyOYi9aqGW_FJfG', '2022-11-20'),
(12, 'A Feast for Crows', 'George R. R. Martin', 4, 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQgN2dROBqP5NylqM96-62oQnyR6wGTlGpkyDYdF07Rp7yJ_9-1', '2022-11-20'),
(13, 'A Dance with Dragons', 'George R. R. Martin', 4, 'data:image/jpeg;base64,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', '2022-11-20'),
(14, 'The Winds of Winter', 'George R. R. Martin', 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToXUbnj20ATgb3HH0QhFX0uu7fseQZ2zwHNtH-KsFA&usqp=CAE&s', '2022-11-20'),
(15, 'A Dream of Spring', 'George R. R. Martin', 4, 'https://cdn.thestorygraph.com/imt5msiqlo7ft291yrfopd3i8i0l', '2022-11-20'),
(16, 'The Sun and Her Flowers', 'Rupi Kaur', 9, 'https://m.media-amazon.com/images/I/412HlyX42zL.jpg', '2022-11-20'),
(17, 'Pillow Thoughts', 'Courtney Peppernell', 9, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRVPLwUugpQEISTbB3PzPqWZcx1Kly_rnrNQGnkVa7bNf-qkiMKrJ1yZD1QrEMdDcMlyeXYmcI&usqp=CAc', '2022-11-20'),
(18, 'Milk honey', 'Rupi Kaur', 9, 'https://www.b2s.co.th/media/catalog/product/cache/31c1e2dc995f93131e503292bcd47775/5/3/5378958.jpg', '2022-11-20'),
(19, 'Call Us What We Carry', 'Amanda Gorman', 9, 'https://www.asiabooks.com/media/catalog/product/cache/a5ac216be58c0cbce1cb04612ece96dc/9/7/9781449474256c_5.jpg', '2022-11-20'),
(20, 'Devotions: The Selected Poems of Mary Oliver', 'Mary Oliver', 9, 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT9mYti0MzuFWFd2BP1vUU1YduVUNX_Sl2fn_fquhFZbVgjkW5T', '2022-11-20'),
(21, 'Home Body', 'Rupi Kaur', 9, 'https://cf.shopee.co.th/file/e2a6f466c8874276d240d056145371e0', '2022-11-20'),
(22, 'Dracula', 'Bram Stoker', 6, 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Dracula_1st_ed_cover_reproduction.jpg/440px-Dracula_1st_ed_cover_reproduction.jpg', '2022-11-20'),
(23, 'Frankenstein', 'Mary Shelley', 6, 'data:image/jpeg;base64,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', '2022-11-20'),
(24, 'The Haunting of Hill House', 'Shirley Jackson', 6, 'https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_.jpg', '2022-11-20'),
(25, 'The Shining', 'Stephen King', 6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1uTHLLpBhlXQEVDzar5kTUuDxo99jueJWXgVeTaQN1N6N58Tq', '2022-11-20'),
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
