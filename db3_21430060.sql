-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5


CREATE DATABASE db3_21430060;


CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `bio` varchar(190) NOT NULL,
  `photos` int(11) NOT NULL,
  `topics` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `firstname`, `lastname`, `dob`, `bio`, `photos`, `topics`, `likes`) VALUES
('', '$2y$10$dzCAHWCsh.LSN7K5lnOHA.huH7v3aHzgfnqIRs6CxIPKWEw3cIova', '', 'V', 'SG', '1999-01-01', '', 0, 0, 0),
('root', '$2y$10$GAiHxjXGaww4t5cp1sihS.5nom96Ux4m8hoUxJPjjG8F2.HlQF8fO', '21430060@bucks.ac.uk', 'Vanya', 'Sark-Geissler', '1995-12-12', 'Change', 0, 0, 0),
('Username', '$2y$10$8sINvAWTL/g9kdBPPLW7/OB0nkC.AzSlLgy0NAXeUlW8yk59JtVpC', 'Email@address.com', '', '', '1999-01-01', 'Change', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;
