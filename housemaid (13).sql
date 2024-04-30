-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 08:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housemaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(200) DEFAULT NULL,
  `name` varchar(220) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`) VALUES
('12', 'enock', 'enockmahoro@gmail.com'),
('10', 'jackson', 'jackson@gmail.com'),
('19', 'Ede', 'ede@gmail.com'),
('15', 'asasfrtyk', 'kat@gmail.com'),
('40', 'eric', 'eric@gmail.com'),
('21', 'zxcvb', 'eric@gmail.com'),
('65', 'rukundo', 'rukundo@gmail.com'),
('65', 'rukundo', 'rukundo@gmail.com'),
('65', 'rukundo', 'rukundo@gmail.com'),
('65', 'rukundo', 'rukundo@gmail.com'),
('43', 'eria', 'eria@gmail.com'),
('32', 'fd', 'fd@gmail.com'),
('32', 'fd', 'fd@gmail.com'),
('32', 'fd', 'fd@gmail.com'),
('19', 'Edeni', 'edeni@gmail.com'),
('21', 'lea', 'lea@gmail.com'),
('71', 'wet', 'wet@gmail.com'),
('71', 'wet', 'wet@gmail.com'),
('71', 'wet', 'wet@gmail.com'),
('71', 'wet', 'wet@gmail.com'),
('71', 'wet', 'wet@gmail.com'),
('71', 'wet', 'wet@gmail.com'),
('71', 'wet', 'wet@gmail.com'),
('71', 'wet', 'wet@gmail.com'),
('71', 'wet', 'wet@gmail.com'),
('6', 'papa', 'papa@gmail.com'),
('71', 'foste', 'foste@gmail.com'),
('71', 'foste', 'foste@gmail.com'),
('74', 'tojour', 'tojour@gmail.com'),
('25', 'ew', 'ew@gmail.com'),
('25', 'ew', 'ew@gmail.com'),
('75', 'kg', 'kg@gmail.com'),
('37', 'pt', 'pt@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE `government` (
  `id` varchar(200) DEFAULT NULL,
  `name` varchar(220) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`id`, `name`, `email`) VALUES
('2', 'Mitabu', 'mitabu@gmail.com'),
('1', 'Diane', 'diane@gmail.com'),
('5', 'Intwari', 'intwari@gmail.com'),
('40', 'RDB', 'rdb@gmail.com'),
('89', 'Deborah', 'debora@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` varchar(200) DEFAULT NULL,
  `name` varchar(220) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `email`) VALUES
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
('17', 'titi', 'titi@gmail.com'),
('6', 'papa', 'papa@gmail.com'),
('19', 'sdfgh', 'zxc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL,
  `contact` varchar(300) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `contact`, `password`) VALUES
('Kwizera', 'kwizera@gmail.com', '0788884444', NULL),
('Enock Mahoro', 'enockmahoro04@gmail.com', '0785433761', NULL),
('enock', 'enock04@gmail.com', '0785433762', NULL),
('enock', 'enockmahoro04@gmail.com', '0785433762', '$2y$10$IgpzBDpjQb3GgEDwNPk54.1k5QAxhszNr6liI03W.9HPDd1NS7.XC'),
('ritha', 'ritha@gmail.com', '0723828461', 'ritha12345'),
('Enock Mahoro', 'enockmahoro04@gmail.com', '0785433763', '$2y$10$J0i5zm24u6jSZOrYAKzEmuuLlBQdMGYsQuuvXYXRBWREc8uaaKV..'),
('emmy', 'emmy@gmail.com', '0788888333', '$2y$10$RLb8XjHYR0IeST8ap/LJje0miK3XZ9/SOIi.iRxrHcU1sHYAFiRky'),
('kyc', 'enockmahoro04@gmail.com', '0783333333', '$2y$10$yhQt7WdZoxqjiuefLhDHyuzymIu0DFXKcW/W9gBDgN.tS8bFDpsqe'),
('kaka', 'enockmahoro04@gmail.com', '0732222222', '$2y$10$D3QGLAEQINK8snYWGEbNLOF6xCKCb0Q5GvkqdNN6Q2l1NlIuMmKc2'),
('loui', 'louikmahoro04@gmail.com', '0789999999', '$2y$10$V9BPAGDhDX1wDBLF7yAbu.Q5YJHsizEf4L0BHGJNW7VjeP607mUOO'),
('loui', 'louikmahoro04@gmail.com', '0789999999', '$2y$10$h3gsuxwlu8pqKcoQJhA6buky.quUNvwdcgAA0dYau.xwxFobNP5xq'),
('annet', 'annet@gmail.com', '0780000000', '$2y$10$Q3bMBAPLuOlDuYwEABTMHusw2nDNp/JYy0YMbrHficfUHpmM98FmS'),
('tf', 'enockmahoro04@gmail.com', '45678', '$2y$10$n6k58hXNZt70LDrdJ3qeB..iAM1rZe9HB56Wyfb0nRxyegfE2n2kW'),
('es', 'es@gmail.com', '5432167', '$2y$10$1zCR4Mr0ta2YDPNDwejDo.KWvQ3bruEef4Smr/S7.Fk4sq4XYA6W6'),
('ty', 'ty@gmail.com', '8765432', '$2y$10$TiXSxLeaywmP118YAJjp4eFUEgn5KpjYhUMFHDVyLCm/9EHkua.nW');

-- --------------------------------------------------------

--
-- Table structure for table `sinup`
--

CREATE TABLE `sinup` (
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(230) NOT NULL,
  `telephone number` varchar(300) NOT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sinup`
--

INSERT INTO `sinup` (`name`, `email`, `telephone number`, `password`) VALUES
(NULL, '', '', NULL),
('Enock', 'mitabu@gmail.com', '0784533761', NULL),
('eria', 'er@gmail.com', '0781673345', '654321');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(200) DEFAULT NULL,
  `name` varchar(220) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL,
  `password` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
('4', 'Bonheur', 'bonheur@gmail.com', NULL),
('3', 'Christian', 'rugemana@gmail.com', NULL),
('21', 'zxcv', 'asdf@gmail.com', NULL),
('56', 'niyo', 'niyo@gmail.com', 'niyo12345'),
(NULL, 'Kwizera', 'kwizera@gmail.com', '$2y$10$eBevZqaAegFnfMcSPk.29.yaM3/QNrvr8JdNUWLMzFbNJykaFjq3K'),
(NULL, 'Kwizera', 'kwizera@gmail.com', '$2y$10$.BLhT1vjGsz277HcAB4crO73OHGmV6uDxauj3c5Ed4P13BvoY7MRm'),
(NULL, 'nana', 'kwizera@gmail.com', '$2y$10$k5Zk/YqDJtYuSYTNL/iRGeOS36rzcoDJRnXwVapRORJ4i6iORVGRS'),
(NULL, 'Kwizera', 'oma@gmail.com', '$2y$10$bc4lTTt9t2URxYEI.EDLKeTb03U6spkQD5mm2.hxrVHanqlJO2Rai'),
(NULL, 'Kwizera', 'oma@gmail.com', '$2y$10$APwsx28H1qTUdBdlJ4sWtOzlKqA0ucTgAghXplYD1SblMWKuah.qq'),
(NULL, 'Kwizera', 'kwizera@gmail.com', '$2y$10$ROuEbyepwAv.98v5BeRnEuCXFhVJM9oPsMQEHxNPPbVjjOXUb5U.m'),
(NULL, 'nana', 'kwizera@gmail.com', '$2y$10$n2Vbpsejf7qrPO6otVCpk.RoBPrQoo6UoOHOLmT7BVtD3d7SV8tFq'),
(NULL, 'nana', 'kwizera@gmail.com', '$2y$10$L9jckg5hLsrK9JrdGh0pmOmANin15FrzBbczzT9vdbLDfIFFSxVgK'),
(NULL, 'nana', 'kwizera@gmail.com', '$2y$10$cC.UVLv5QjDIrUiEt/PxTumDxdNivvD2eREzSMR2gbtn3gS1FlUwS'),
(NULL, 'nana', 'kwizera@gmail.com', '$2y$10$g7hAvYnzFB/Fben8zDzrtuCMrmJIK516EJZFsCcI8YKAOdol/T8by'),
(NULL, 'nana', 'kwizera@gmail.com', '$2y$10$SR.Na87R8WIPHYzUKsRn0e8s/pPNzeb9sVtjZw0K09uSamVLnSeW.'),
(NULL, 'nana', 'kwizera@gmail.com', '$2y$10$tp.T9BJ9Z43nWZdYNm7jaO1sDdZruNFZTtxfLcAh45k4W6n4iguby'),
(NULL, 'Enock Mahoro', 'enockmahoro04@gmail.com', '$2y$10$lY9bq4QQ79Qn2wLLKRJjwuzyrQcBg2gMSuQHdqzEGwXDTLBiVLwy6'),
(NULL, 'Enock Mahoro', 'enockmahoro04@gmail.com', '$2y$10$laoY4548ix3HvO0.efUL4u3FtUpFCnKg0OPdrEBNt7lrUFlq7IoBe'),
(NULL, 'kibwa', 'kibwa@gmail.com', '$2y$10$HyBnL8tOVbP/KwUTT.mxYuijwV5bw9snDVGtKm8BpLvlxBez6DcFS');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id` varchar(200) DEFAULT NULL,
  `name` varchar(220) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id`, `name`, `email`) VALUES
('20', 'Nyiraneza', 'nyiraneza@gmail.com'),
('11', 'Nyabunyana', 'nyabunyana@gmail.com'),
('8', 'Nyangoma', 'nyangoma@gmail.com'),
('34', 'Mugisha', 'mugisha@gmail.com'),
('70', 'asdfgh', 'asdf@gmail.com'),
('27', 'sdfgh', 'zxc@gmail.com'),
('27', 'sdfgh', 'zxc@gmail.com'),
('23', 'zxcv', 'asdf@gmail.com'),
('', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
