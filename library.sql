SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `FILES` (
  `id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `author` text NOT NULL,
  `judul` text NOT NULL,
  `file_type_id` text NOT NULL,
  `isi` text NOT NULL,
  `created_at` text DEFAULT NULL,
  `update_at` text DEFAULT NULL
);

CREATE TABLE `File_Type` (
  `id` int(255) NOT NULL PRIMARY KEY,
  `jenis` varchar(10) NOT NULL
);

CREATE TABLE `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `created_at` text DEFAULT NULL,
  `update_at` text DEFAULT NULL
);
