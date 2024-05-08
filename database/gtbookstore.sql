-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 07:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtbookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `is_active`, `image`) VALUES
(1, 'Meditations by Marcus Aurelius', 'Meditations is a series of personal writings by Marcus Aurelius, Roman Emperor 161–180 CE, setting forth his ideas on Stoic philosophy.Marcus Aurelius wrote the 12 books of the Meditations in Koine Greek as a source for his own guidance and self-improveme', 1, 'book1.jpg'),
(2, 'Old School (Diary of a Wimpy Kid #10)', 'In Old School, Book 10 of the Diary of a Wimpy Kid series from #1 international bestselling author Jeff Kinney, life was better in the old days. Or was it?\r\n\r\nThat’s the question Greg Heffley is asking as his town voluntarily unplugs and goes electronics-', 1, 'book2.jpg'),
(3, 'The Diary of a Wimpy Kid - The Last Straw', 'The third book in the #1 New York Times best-selling series from Jeff Kinney, The Last Straw is sure to please young readers. Greg Heffley makes a New Year\'s resolution to help others improve, but his brand of truthful advice doesn\'t go over well. Plus, G', 1, 'book3.jpg'),
(4, 'Diary of a Wimpy Kid (Enhanced Edition)', 'I\'ll be famous one day, but for now I\'m stuck in middle school with a bunch of morons.\r\n\r\nBeing a kid can really stink. And no one knows this better than Greg Heffley, who finds himself thrust into middle school, where undersized weaklings share the hallw', 1, 'book4.jpg'),
(5, 'Moby Dick: Or The White Whale', 'Moby-Dick; or, The Whale is an 1851 novel by American writer Herman Melville. The book is the sailor Ishmael\'s narrative of the maniacal quest of Ahab, captain of the whaling ship Pequod, for vengeance against Moby Dick, the giant white sperm whale that b', 1, 'book5.jpg'),
(6, 'The Cruel Prince (The Folk of the Air, 1)', 'Of course I want to be like them. They\'re beautiful as blades forged in some divine fire. They will live forever.\r\n\r\nAnd Cardan is even more beautiful than the rest. I hate him more than all the others. I hate him so much that sometimes when I look at him', 1, 'book6.jpg'),
(7, 'The Emperor\'s Handbook: A New Translation of The Meditations', 'A powerful and accessible translation of Marcus Aurelius’s Meditations, an essential book on character, leadership, and how to live a fulfilling life.\r\n\r\nMarcus Aurelius ruled the Roman Empire at its height, yet he remained untainted by the incalculable w', 1, 'book7.jpg'),
(8, 'The Brothers Karamazov: A Novel in Four Parts and an Epilogue (Penguin Classics)', 'Fyodor Dostoyevsky\'s powerful meditation on faith, meaning and morality, The Brothers Karamazov is translated with an introduction and notes by David McDuff in Penguin Classics.\r\n\r\nWhen brutal landowner Fyodor Karamazov is murdered, the lives of his sons ', 1, 'book8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `email`, `message`) VALUES
(1, 'Gilbert', 'Tekli', 'gt@gmail.com', 'I love your website! You deserve an A!'),
(9, 'fn', 'ln', 'email@gmail.com', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`) VALUES
(1, 'user', 'user', 'user@gmail.com', 'john', 'doe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
