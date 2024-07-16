-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jun-2023 às 03:48
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `banner_guid` varchar(255) NOT NULL,
  `banner_name` varchar(255) NOT NULL,
  `banner_url` varchar(255) NOT NULL,
  `banner_headline` varchar(255) NOT NULL,
  `banner_thumb` varchar(255) NOT NULL,
  `banner_type` int(11) NOT NULL,
  `banner_initial` datetime NOT NULL,
  `banner_final` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_guid`, `banner_name`, `banner_url`, `banner_headline`, `banner_thumb`, `banner_type`, `banner_initial`, `banner_final`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '123', 'Banner Maior', '', 'Banner Maior', 'banner-medium.png', 1, '2023-03-07 00:00:00', '2023-03-09 00:00:00', 1, '2023-03-10 03:08:48', '2023-03-10 03:35:53', NULL),
(2, '345', 'Banner Menor 1', '', 'Banner Menor', 'banner-small1.png', 2, '2023-03-09 03:09:05', '2023-03-12 03:09:03', 1, '2023-03-10 03:08:48', '2023-03-10 03:31:33', NULL),
(3, '456', 'Banner Menor 2', '', 'Banner Menor 2', 'banner-small2.png', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2023-03-10 03:08:48', '2023-03-10 03:31:45', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_guid` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`category_id`, `category_guid`, `category_name`, `category_url`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '123', 'Promoções', 'offers', 1, '2023-03-10 02:31:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '345', 'Calçados', 'shoes', 1, '2023-03-10 02:31:03', '2023-06-12 00:46:15', '0000-00-00 00:00:00'),
(3, '456', 'Roupas', 'clothing', 1, '2023-03-10 02:31:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `color_guid` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `size_id` varchar(255) NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `color_style` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `colors`
--

INSERT INTO `colors` (`color_id`, `color_guid`, `product_id`, `size_id`, `color_name`, `color_style`, `status`) VALUES
(1, 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9', '123', '1', 'Vermelho', 'red', 1),
(2, 'AE41881F-2443-4BB6-A7CC-8DBAB761E283', '123', '1', 'Verde', 'green', 1),
(3, 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9', '123', '1', 'Branco', 'white', 1),
(4, 'CE41881F-2443-4BB6-A7CC-8DBAB761E283', '123', '1', 'Azul', 'blue', 1),
(5, 'A209AEEB7-194C-4D71-BE9C-34D1DF626BA93', '123', '2', 'Vermelho', 'red', 1),
(6, 'AE41881F-2443-4BB6-A7CC-8DBAB761E283V', '123', '2', 'Verde', 'green', 1),
(7, 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA94', '123', '2', 'Branco', 'white', 1),
(8, 'CE41881F-2443-4BB6-A7CC-8DBAB761E2835', '123', '2', 'Azul', 'blue', 1),
(9, 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA96', '123', '3', 'Vermelho', 'red', 1),
(10, 'AE41881F-2443-4BB6-A7CC-8DBAB761E2837', '123', '3', 'Verde', 'green', 1),
(11, 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA98', '123', '3', 'Branco', 'white', 1),
(12, 'CE41881F-2443-4BB6-A7CC-8DBAB761E283A', '123', '3', 'Azul', 'blue', 1),
(13, 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9B', '123', '4', 'Vermelho', 'red', 1),
(14, 'AE41881F-2443-4BB6-A7CC-8DBAB761E283N', '123', '4', 'Verde', 'green', 1),
(15, 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9M', '123', '4', 'Branco', 'white', 1),
(16, 'CE41881F-2443-4BB6-A7CC-8DBAB761E283O', '123', '4', 'Azul', 'blue', 1),
(17, 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9P', '124', '1', 'Vermelho', 'red', 1),
(18, 'AE41881F-2443-4BB6-A7CC-8DBAB761E283D', '124', '1', 'Verde', 'green', 1),
(19, 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9E', '124', '1', 'Branco', 'white', 1),
(20, 'CE41881F-2443-4BB6-A7CC-8DBAB761E283F', '124', '1', 'Azul', 'blue', 1),
(21, 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9GH', '124', '2', 'Vermelho', 'red', 1),
(22, 'AE41881F-2443-4BB6-A7CC-8DBAB761E283I', '124', '2', 'Verde', 'green', 1),
(23, 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9J', '124', '2', 'Branco', 'white', 1),
(24, 'CE41881F-2443-4BB6-A7CC-8DBAB761E283KL', '124', '2', 'Azul', 'blue', 1),
(25, 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9LK', '124', '3', 'Vermelho', 'red', 1),
(26, 'AE41881F-2443-4BB6-A7CC-8DBAB761E283MN', '124', '3', 'Verde', 'green', 1),
(27, 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA923', '124', '3', 'Branco', 'white', 1),
(28, 'CE41881F-2443-4BB6-A7CC-8DBAB761E28356', '124', '3', 'Azul', 'blue', 1),
(29, 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA987', '124', '4', 'Vermelho', 'red', 1),
(30, 'AE41881F-2443-4BB6-A7CC-8DBAB761E28344', '124', '4', 'Verde', 'green', 1),
(31, 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA988', '124', '4', 'Branco', 'white', 1),
(32, 'CE41881F-2443-4BB6-A7CC-8DBAB761E28390', '124', '4', 'Azul', 'blue', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `miniatures`
--

CREATE TABLE `miniatures` (
  `miniature_id` int(11) NOT NULL,
  `miniature_guid` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `miniature_url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `miniatures`
--

INSERT INTO `miniatures` (`miniature_id`, `miniature_guid`, `user_id`, `product_id`, `miniature_url`, `status`) VALUES
(1, '123455', '123', '123', 'product-detail1.png', 1),
(2, '1234553', '123', '123', 'product-detail2.png', 1),
(3, '634553', '123', '123', 'product-detail3.png', 1),
(4, '564645', '123', '123', 'product-detail4.png', 1),
(5, '66786768', '123', '123', 'product-detail5.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_guid` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_headline` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_url` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_price_old` decimal(10,2) NOT NULL,
  `product_offers` int(11) NOT NULL,
  `product_thumb` varchar(255) NOT NULL,
  `product_tags` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`product_id`, `product_guid`, `user_id`, `category_id`, `product_name`, `product_headline`, `product_description`, `product_url`, `product_price`, `product_price_old`, `product_offers`, `product_thumb`, `product_tags`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '123', '1', '345', 'Tênis Adidas Sporting', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam viverra metus vel erat pulvinar vehicula. Nulla leo risus, aliquet at viverra in, interdum cursus leo. Phasellus leo enim, viverra sed iaculis rhoncus, fringilla in felis. Mauris ut quam neque. Integer quis nunc vel ligula euismod malesuada a vitae eros. Nunc consequat nisi nulla, quis venenatis risus venenatis et. Mauris vulputate nulla urna, ut rutrum leo viverra lobortis. Integer placerat orci eu magna blandit, sit amet gravida sapien ultrices. Integer vitae ultrices ipsum, vulputate eleifend lorem. Maecenas efficitur diam at cursus tristique.\r\n\r\nNullam quis imperdiet nunc, eu dictum sem. Etiam vulputate mollis eros, ut feugiat ante consequat eget. Cras id nibh a est malesuada volutpat. Curabitur non feugiat nibh. In gravida, turpis efficitur iaculis lobortis, lectus lorem porta elit, eget ultricies tellus risus eu enim. Aliquam efficitur lobortis lacus, ac mattis nunc mattis id. Nam sollicitudin velit lectus, at vestibulum est bibendum ac. Praesent lobortis iaculis dignissim. Aliquam non ipsum quis elit rhoncus hendrerit. Integer vehicula magna et purus placerat, at tempus ante eleifend. Proin aliquam lacus dictum velit dapibus consectetur. Vestibulum viverra venenatis enim euismod hendrerit.\r\n\r\nDuis at purus nibh. Proin volutpat, erat non ornare pharetra, mauris dui tempor mauris, a accumsan mi sem vel libero. Maecenas maximus, risus sed dictum venenatis, massa justo sagittis dolor, quis imperdiet justo augue et quam. Curabitur faucibus vulputate pretium. Nulla facilisi. Sed et felis vel metus accumsan sollicitudin feugiat sit amet leo. Vestibulum vitae felis vel velit elementum suscipit et eget dui. Ut tristique vel tellus vel egestas. Morbi at porta tellus. Nunc metus justo, placerat sit amet rutrum in, pellentesque malesuada nisl. In dictum enim in efficitur semper. Fusce nisi leo, pharetra eget pretium quis, consectetur at urna. Aenean ultricies tortor nec nisl hendrerit, quis porta erat aliquam. Nam lobortis elit urna, sit amet suscipit neque viverra eu.\r\n\r\nVestibulum in arcu nec libero pulvinar mollis. Quisque vulputate dui porttitor congue bibendum. Etiam lobortis consequat turpis at consectetur. Phasellus aliquet ligula eu risus mattis porttitor. Maecenas viverra ullamcorper erat a gravida. Integer quis mauris eget elit malesuada consectetur. Integer tellus odio, viverra in sapien sed, hendrerit vulputate enim. Sed erat magna, fermentum eu finibus ac, euismod in sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis suscipit commodo neque, id faucibus libero malesuada vel. Nullam gravida magna neque, sed tincidunt augue posuere ac.\r\n\r\nNunc mauris sem, cursus id laoreet sit amet, scelerisque nec quam. Curabitur purus mauris, sodales quis consectetur ac, tristique in quam. Duis finibus tellus vitae sodales fringilla. Sed dictum molestie posuere. Sed in velit viverra elit varius eleifend a sit amet tellus. Nunc lobortis nisl nunc, sed venenatis justo porttitor et. Aliquam mauris dolor, fringilla dignissim dui eu, ultrices tempor tellus. ', 'tenis-adidas-sporting', '320.00', '450.00', 10, 'product.png', 'Calçados, Tênis Adidas, Tênis Sporting, Adidas Sporting', 1, '2023-03-10 02:48:23', '2023-04-01 22:42:34', NULL),
(2, '124', '1', '345', 'Tênis Nike 36', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam viverra metus vel erat pulvinar vehicula. Nulla leo risus, aliquet at viverra in, interdum cursus leo. Phasellus leo enim, viverra sed iaculis rhoncus, fringilla in felis. Mauris ut quam neque. Integer quis nunc vel ligula euismod malesuada a vitae eros. Nunc consequat nisi nulla, quis venenatis risus venenatis et. Mauris vulputate nulla urna, ut rutrum leo viverra lobortis. Integer placerat orci eu magna blandit, sit amet gravida sapien ultrices. Integer vitae ultrices ipsum, vulputate eleifend lorem. Maecenas efficitur diam at cursus tristique.  Nullam quis imperdiet nunc, eu dictum sem. Etiam vulputate mollis eros, ut feugiat ante consequat eget. Cras id nibh a est malesuada volutpat. Curabitur non feugiat nibh. In gravida, turpis efficitur iaculis lobortis, lectus lorem porta elit, eget ultricies tellus risus eu enim. Aliquam efficitur lobortis lacus, ac mattis nunc mattis id. Nam sollicitudin velit lectus, at vestibulum est bibendum ac. Praesent lobortis iaculis dignissim. Aliquam non ipsum quis elit rhoncus hendrerit. Integer vehicula magna et purus placerat, at tempus ante eleifend. Proin aliquam lacus dictum velit dapibus consectetur. Vestibulum viverra venenatis enim euismod hendrerit.  Duis at purus nibh. Proin volutpat, erat non ornare pharetra, mauris dui tempor mauris, a accumsan mi sem vel libero. Maecenas maximus, risus sed dictum venenatis, massa justo sagittis dolor, quis imperdiet justo augue et quam. Curabitur faucibus vulputate pretium. Nulla facilisi. Sed et felis vel metus accumsan sollicitudin feugiat sit amet leo. Vestibulum vitae felis vel velit elementum suscipit et eget dui. Ut tristique vel tellus vel egestas. Morbi at porta tellus. Nunc metus justo, placerat sit amet rutrum in, pellentesque malesuada nisl. In dictum enim in efficitur semper. Fusce nisi leo, pharetra eget pretium quis, consectetur at urna. Aenean ultricies tortor nec nisl hendrerit, quis porta erat aliquam. Nam lobortis elit urna, sit amet suscipit neque viverra eu.  Vestibulum in arcu nec libero pulvinar mollis. Quisque vulputate dui porttitor congue bibendum. Etiam lobortis consequat turpis at consectetur. Phasellus aliquet ligula eu risus mattis porttitor. Maecenas viverra ullamcorper erat a gravida. Integer quis mauris eget elit malesuada consectetur. Integer tellus odio, viverra in sapien sed, hendrerit vulputate enim. Sed erat magna, fermentum eu finibus ac, euismod in sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis suscipit commodo neque, id faucibus libero malesuada vel. Nullam gravida magna neque, sed tincidunt augue posuere ac.  Nunc mauris sem, cursus id laoreet sit amet, scelerisque nec quam. Curabitur purus mauris, sodales quis consectetur ac, tristique in quam. Duis finibus tellus vitae sodales fringilla. Sed dictum molestie posuere. Sed in velit viverra elit varius eleifend a sit amet tellus. Nunc lobortis nisl nunc, sed venenatis justo porttitor et. Aliquam mauris dolor, fringilla dignissim dui eu, ultrices tempor tellus. ', 'tenis-nike-36', '310.00', '430.00', 9, 'product.png', 'Calçados, Tênis Nike, Tênis Sporting, Nike Sporting', 1, '2023-03-10 02:48:23', '2023-04-01 22:59:16', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `size_guid` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `color_id` varchar(255) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sizes`
--

INSERT INTO `sizes` (`size_id`, `size_guid`, `product_id`, `color_id`, `size_name`, `status`) VALUES
(1, '1', '123', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9', '30', 1),
(2, '2', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283', '30', 1),
(3, '3', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9', '30', 1),
(4, '4', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E283', '30', 1),
(5, '5', '123', 'A209AEEB7-194C-4D71-BE9C-34D1DF626BA93', '31', 1),
(6, '6', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283V', '31', 1),
(7, '7', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA94', '31', 1),
(8, '8', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E2835', '31', 1),
(9, '9', '123', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA96', '32', 1),
(10, '10', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E2837', '32', 1),
(11, '11', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA98', '32', 1),
(12, '12', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E283A', '32', 1),
(13, '13', '123', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9B', '33', 1),
(14, '14', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283N', '33', 1),
(15, '15', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9M', '33', 1),
(16, '16', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E283O', '33', 1),
(17, '17', '124', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9P', '30', 1),
(18, '18', '124', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283D', '30', 1),
(19, '19', '124', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9E', '30', 1),
(20, '20', '124', 'CE41881F-2443-4BB6-A7CC-8DBAB761E283F', '30', 1),
(21, '21', '124', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9GH', '31', 1),
(22, '22', '124', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283I', '31', 1),
(23, '23', '124', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9J', '31', 1),
(24, '24', '124', 'CE41881F-2443-4BB6-A7CC-8DBAB761E283KL', '31', 1),
(25, '25', '124', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9LK', '32', 1),
(26, '26', '124', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283MN', '32', 1),
(27, '27', '124', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA923', '32', 1),
(28, '28', '124', 'CE41881F-2443-4BB6-A7CC-8DBAB761E28356', '32', 1),
(29, '29', '124', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA987', '33', 1),
(30, '30', '124', 'AE41881F-2443-4BB6-A7CC-8DBAB761E28344', '33', 1),
(31, '31', '124', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA988', '33', 1),
(32, '32', '124', 'CE41881F-2443-4BB6-A7CC-8DBAB761E28390', '33', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `stock_guid` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `color_id` varchar(255) NOT NULL,
  `size_id` varchar(255) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `stock`
--

INSERT INTO `stock` (`stock_id`, `stock_guid`, `product_id`, `user_id`, `color_id`, `size_id`, `stock_quantity`, `status`) VALUES
(1, '1', '123', '123', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9', '1', 100, 1),
(2, '2', '123', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283', '2', 100, 1),
(3, '3', '123', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9', '3', 100, 1),
(4, '4', '123', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E283', '4', 100, 1),
(5, '5', '123', '123', 'A209AEEB7-194C-4D71-BE9C-34D1DF626BA93', '5', 100, 1),
(6, '6', '123', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283V', '6', 100, 1),
(7, '7', '123', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA94', '7', 100, 1),
(8, '8', '123', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E2835', '8', 100, 1),
(9, '9', '123', '123', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA96', '9', 100, 1),
(10, '10', '123', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E2837', '10', 100, 1),
(11, '11', '123', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA98', '11', 100, 1),
(12, '12', '123', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E283A', '12', 100, 1),
(13, '13', '123', '123', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9B', '13', 100, 1),
(14, '14', '123', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283N', '14', 100, 1),
(15, '15', '123', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9M', '15', 100, 1),
(16, '16', '123', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E283O', '16', 100, 1),
(17, '17', '124', '123', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9P', '17', 100, 1),
(18, '18', '124', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283D', '18', 100, 1),
(19, '19', '124', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9E', '19', 100, 1),
(20, '20', '124', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E283F', '20', 100, 1),
(21, '21', '124', '123', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9GH', '21', 100, 1),
(22, '22', '124', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283I', '22', 100, 1),
(23, '23', '124', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA9J', '23', 100, 1),
(24, '24', '124', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E283KL', '24', 100, 1),
(25, '25', '124', '123', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA9LK', '25', 100, 1),
(26, '26', '124', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E283MN', '26', 100, 1),
(27, '27', '124', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA923', '27', 100, 1),
(28, '28', '124', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E28356', '28', 100, 1),
(29, '29', '124', '123', 'A09AEEB7-194C-4D71-BE9C-34D1DF626BA987', '29', 100, 1),
(30, '30', '124', '123', 'AE41881F-2443-4BB6-A7CC-8DBAB761E28344', '30', 100, 1),
(31, '31', '124', '123', 'B09AEEB7-194C-4D71-BE9C-34D1DF626BA988', '31', 100, 1),
(32, '32', '124', '123', 'CE41881F-2443-4BB6-A7CC-8DBAB761E28390', '32', 100, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_guid` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `user_guid`, `user_name`, `user_email`, `user_password`, `user_level`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '123', 'Jeferson ', 'contato@mestresdophp.com.br', '123', 10, 1, '2023-03-10 01:50:51', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `miniatures`
--
ALTER TABLE `miniatures`
  ADD PRIMARY KEY (`miniature_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `miniatures`
--
ALTER TABLE `miniatures`
  MODIFY `miniature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
