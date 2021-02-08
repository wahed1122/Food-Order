-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 01:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(4, 'mesba', 'mesba@gmail.com', '12345', 'extra-04163434.jpg', 'Bangladesh ', '   This is for Wahed', '312-009-323', 'marketar '),
(5, 'Wahed', 'wahed@gmail.com', '12345', 'Capture.jpg', 'Bangladesh ', '  This is for Wahed', '01733577800', 'Developer'),
(6, 'Wahed', 'mdabdulwahed7@gmail.com', '12345', 'batter-fried-chicken-recipe-fp-400x300-c.jpg', 'Bangladesh', 'I am Md Abdul Wahed', '01733577800', 'web developer');

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(10) NOT NULL,
  `box_title` text NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_title`, `box_desc`) VALUES
(2, ' New Title Box Best Offers ', 'New Lorem  dolor sit amet consectetur adipisicing elit. Laborum nam voluptate ipsum, quasi, soluta voluptatem eligendi voluptatum officia sed, molestiae tempore corrupti similique? Deserunt odio fugit facere voluptate consequuntur doloremque?'),
(3, '  New Title Box 100% Satisfy   ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nam voluptate ipsum, quasi, soluta voluptatem eligendi voluptatum officia sed, molestiae tempore corrupti similique? Deserunt odio fugit facere voluptate consequuntur doloremque?'),
(4, 'New Title Box New Box Title 4 ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, aliquid veritatis amet ad saepe nesciunt eos? Quas ipsum laboriosam hic sunt fugit cumque maiores! Ducimus officiis commodi consequuntur rerum minima.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(12, 'Fast Food', 'yes', ''),
(13, 'Pure Musterd Oil', 'yes', ''),
(14, 'Grocery', 'yes', ''),
(15, 'Meat and Fish', 'yes', ''),
(16, 'Beverages', 'yes', ''),
(17, 'Medicine', 'yes', ''),
(18, 'LPG Gas', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(2, 34, '4 burger', '100', 'kupon28183774', 7, 3),
(4, 27, 'Coupon Forn Diamond Heart Ring', '225', '82828288', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(6, 'James Bono', 'jamesbono@gmail.com', 'james1123', 'England', 'London', '555-2255-222', 'Hyde Park', 'member2.jpg', '::1'),
(7, 'md abdul wahed', 'mdabdulwahed7@gmail.com', '123456', 'Bangladesh', 'Rajshahi', '01733577800', 'Rajshahi, puthia kanthal baria puthia rajshahi ', 'Capture.jpg', '::1'),
(8, 'wahed', 'abwahed@gmail.com', '12345', 'bangladesh', 'dhaka', '01733577800', 'puthia khanthal baria puthia', 'batter-fried-chicken-recipe-fp-400x300-c.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `payment_name` text NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `order_date` date NOT NULL,
  `details_address` text NOT NULL,
  `post_office` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `payment_name`, `invoice_no`, `qty`, `product_id`, `order_date`, `details_address`, `post_office`, `order_status`) VALUES
(27, 8, 500, 'Online Payment', 1826590169, 10, '35', '2020-10-06', 'puthia', 'puthia', 'complete'),
(30, 7, 20, 'Cash On delivery', 0, 1, '37', '2020-10-06', 'puthia', 'puthia', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(1, 'Name_2', 'yes', 'man_2.jpg'),
(2, 'Jenny Artha', 'yes', 'man_3.jpg'),
(3, 'Hendra', 'no', 'man_4.jpg'),
(4, 'Name_5', 'no', 'man_5.jpg'),
(5, 'Manufacturer 2', 'no', 'new-jacket-women-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` text NOT NULL,
  `payment_date` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`, `status`) VALUES
(8, 999160820, 150, 'Bikash', 1733577800, '497976', '2020-10-07', 'complete'),
(9, 1018065576, 50, 'Bikash', 1733577800, '497976', '2020-10-07', 'complete'),
(10, 1733939980, 70, 'Select Payment Mode', 1733577800, '321321', '2020-10-13', 'complete'),
(11, 552279852, 500, 'Bikash', 1733577800, '497976', '2020-10-07', 'complete'),
(12, 1719789717, 100, 'Bikash', 1733577800, '1233635', '2020-10-07', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `product_id` int(11) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_label` text NOT NULL,
  `product_sale` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) DEFAULT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_label` text NOT NULL,
  `product_sale` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`, `product_label`, `product_sale`) VALUES
(34, 15, 12, 0, '2020-10-03 11:07:33', 'Burger', 'download.jpg', 'download.jpg', 'download.jpg', 50, '1', '<p>Best Burger</p>', 'Burger', 50),
(35, 16, 12, 0, '2020-10-03 11:09:10', 'Fried Chicken', 'batter-fried-chicken-recipe-fp-400x300-c.jpg', 'batter-fried-chicken-recipe-fp-400x300-c.jpg', 'batter-fried-chicken-recipe-fp-400x300-c.jpg', 50, '2', '<p>Best Chicken&nbsp;</p>', 'Fried Chicken', 50),
(36, 29, 12, 0, '2020-10-06 15:24:56', 'Pasta ', 'masala-pasta.jpg', 'masala-pasta.jpg', 'masala-pasta.jpg', 100, '5', '<p>Best Pasta</p>', 'Pasta', 100),
(37, 30, 17, 0, '2020-10-03 11:15:14', 'Medicine', 'medicine.jpg', 'medicine.jpg', 'medicine.jpg', 20, '7', '<p>Best Medicine</p>', 'Medicine', 20),
(38, 21, 14, 0, '2020-10-03 11:42:38', 'Masoor Dal', 'lentil-masoor-250x250-250x250-1.jpeg', 'lentil-masoor-250x250-250x250-1.jpeg', 'lentil-masoor-250x250-250x250-1.jpeg', 70, '10', '<p>70 taka per Kg</p>', 'Dal', 70),
(39, 26, 15, 0, '2020-10-03 13:29:18', 'Meat 1 Kg', 'U3sAfgxPZjnmpUzpD6dnw6-1200-80.jpg', 'U3sAfgxPZjnmpUzpD6dnw6-1200-80.jpg', 'U3sAfgxPZjnmpUzpD6dnw6-1200-80.jpg', 580, '12', '<p>Meat per Kg 580 Taka</p>', 'Meat', 580),
(40, 27, 15, 0, '2020-10-03 13:30:55', 'Fish 1 Kg ', 'Salmon-fish.jpg', 'Salmon-fish.jpg', 'Salmon-fish.jpg', 500, '13', '<p>Best Fish per Kg 500 taka&nbsp;</p>', 'Fish ', 500),
(41, 31, 18, 0, '2020-10-03 13:33:19', 'LPG Gas 22Kg', 'main-tech-slider-4.jpg', 'main-tech-slider-4.jpg', 'main-tech-slider-4.jpg', 1400, '14', '<p>LPG Gas&nbsp;</p>', 'LPG Gas', 1400),
(42, 32, 16, 0, '2020-10-03 13:35:26', 'Beverages', 'beverages.jpg', 'beverages.jpg', 'beverages.jpg', 100, '15', '<p>Beverages</p>', 'Beverages', 100),
(43, 33, 13, 0, '2020-10-03 13:38:28', 'Pure Mustard oil 5Kg', 'extra-04163434.jpg', 'extra-04163434.jpg', 'extra-04163434.jpg', 500, '20', '<p>Pured musterd Oil</p>', 'Pure Mustard oil', 500),
(44, 16, 12, 0, '2020-10-03 19:06:10', 'Chicken fry', 'air-fryer-fried-chicken-on-white-plate-A.jpg', 'air-fryer-fried-chicken-on-white-plate-A.jpg', 'air-fryer-fried-chicken-on-white-plate-A.jpg', 50, 'Chicken fry', '<p>Best Product</p>', 'Fried Chicken', 50),
(45, 33, 13, 0, '2020-10-04 10:17:43', 'Pure Mustard oil 1Kg', 'images.jpg', 'images.jpg', 'images.jpg', 100, 'pure musterd oil', '<p>Best product</p>', 'Pure Mustard oil', 100),
(46, 26, 15, 0, '2020-10-05 19:03:02', 'Meat', 'meat.jpg', 'meat.jpg', 'meat.jpg', 580, 'meat', '<p>best price</p>', 'sale', 570),
(50, 18, 12, 0, '2020-10-06 00:10:16', 'Chow Main', 'chow-mein-1200.jpg', 'chow-mein-1200.jpg', 'chow-mein-1200.jpg', 70, 'chow main', '<p>Best Product</p>', 'Offer', 40),
(51, 26, 15, 0, '2020-10-06 00:31:40', 'Meat', 'mm.jpg', 'mm.jpg', 'mm.jpg', 600, 'meat', '<p>best meat</p>', 'Offer', 550),
(52, 20, 14, 0, '2020-10-06 02:45:06', 'Rice ', 'rice-agencies.jpg', 'rice-agencies.jpg', 'rice-agencies.jpg', 35, 'Rice ', '<p>Best rice</p>', 'Offer', 28),
(53, 33, 13, 0, '2020-10-06 11:06:54', 'pure musterd oil', 'extra-04163434.jpg', 'extra-04163434.jpg', 'extra-04163434.jpg', 498, 'pure musterd oil', '<p>Best oil</p>', 'Offer', 450),
(54, 30, 17, 0, '2020-10-06 11:14:03', 'medicine', 'medicine.jpg', 'medicine.jpg', 'medicine.jpg', 50, 'medicine', '<p>medicine</p>', 'Offer', 20),
(55, 31, 18, 0, '2020-10-06 11:16:09', 'LPG Gas', 'main-tech-slider-4.jpg', 'main-tech-slider-4.jpg', 'main-tech-slider-4.jpg', 1200, 'lpg gash', '<p>LPG</p>', 'Offer', 1100),
(56, 32, 16, 0, '2020-10-06 11:17:37', 'beverge', 'beverages.jpg', 'beverages.jpg', 'beverages.jpg', 70, 'bbb', '<p>bbbb</p>', 'Offer', 50),
(57, 26, 15, 0, '2020-10-06 15:23:26', 'Got Meat', 'goat meat.jpg', 'goat meat.jpg', 'goat meat.jpg', 780, 'got', '<p>best&nbsp;</p>', 'Offer', 700);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_top`, `p_cat_image`) VALUES
(15, 'Burger', 'yes', ''),
(16, 'Fried Chiken', 'yes', ''),
(17, 'Pizza', 'yes', ''),
(18, 'Chow Mein', 'yes', ''),
(19, 'Frence Frics', 'yes', ''),
(20, 'Rice', 'yes', ''),
(21, 'Dal', 'yes', ''),
(22, 'Ready mix', 'yes', ''),
(23, 'Salt and Suger', 'yes', ''),
(24, 'Spices', 'yes', ''),
(25, 'Special Ingredient', 'yes', ''),
(26, 'Meat', 'yes', ''),
(27, 'Fish', 'yes', ''),
(28, 'Dried Fish', 'yes', ''),
(29, 'Pasta', 'yes', ''),
(30, 'Medicine', 'yes', ''),
(31, 'LPG Gas', 'yes', ''),
(32, 'Beverages', 'yes', ''),
(33, 'Pure musterd Oil', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_url`) VALUES
(16, 'sandwish', 'Rainbow-Vegetable-Sandwich-850x630.jpg', 'http://localhost/store/details.php?pro_id=20'),
(18, 'Bargar', 'download.jpg', 'http://localhost/wahed/store/details?pro_id=34'),
(19, 'Pizza', 'WhatsApp Image 2020-09-01 at 1.46.16 PM.jpeg', 'http://localhost/store/details.php?pro_id=24'),
(20, 'Hilsa Fish', 'Hilsa.jpg', 'http://localhost/store/details.php?pro_id=27'),
(21, 'Chicken fry', 'batter-fried-chicken-recipe-fp-400x300-c.jpg', 'http://localhost/wahed/store/details?pro_id=35'),
(22, 'Meat', 'U3sAfgxPZjnmpUzpD6dnw6-1200-80.jpg', 'http://localhost/store/details.php?pro_id=31'),
(23, 'pasta', 'Vegan-Vodka-Pasta-Square.jpg', 'https://localhost/wahed/store/details?pro_id=36'),
(24, 'got meat', 'goat meat.jpg', 'http://localhost/wahed/store/details?pro_id=57');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(9, 'Rules & Regulations', 'link_1', '<div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ut itaque quibusdam dolores modi natus. Enim earum laboriosam, quos error voluptatem fugiat eos? In maiores quia eligendi, ea aperiam voluptate.</div>'),
(10, 'Promo & Regulations', 'link_2', '<div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ut itaque quibusdam dolores modi natus. Enim earum laboriosam, quos error voluptatem fugiat eos? In maiores quia eligendi, ea aperiam voluptate.</div>'),
(11, 'Refund Condition Policy', 'link_3', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ut itaque quibusdam dolores modi natus. Enim earum laboriosam, quos error voluptatem fugiat eos? In maiores quia eligendi, ea aperiam voluptate.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
