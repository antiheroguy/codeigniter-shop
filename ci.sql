-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 05:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_password`, `a_status`) VALUES
(1, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 1),
(2, 'Guest', 'guest', 'e40f01afbb1b9ae3dd6747ced5bca532', 1),
(3, 'Test', 'test', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_parent` int(11) NOT NULL,
  `c_view` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_status` tinyint(1) NOT NULL DEFAULT '1',
  `c_position` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_parent`, `c_view`, `c_link`, `c_status`, `c_position`) VALUES
(1, 'Quà tặng đối tượng', 0, 'category', '', 1, 2),
(2, 'Quà tặng sự kiện', 0, 'category', '', 1, 3),
(3, 'Liên hệ', 0, 'menu', 'contact', 1, 3),
(5, 'Thực phẩm', 0, 'category', '', 1, 5),
(6, 'Trang chủ', 0, 'menu', '', 1, 1),
(7, 'Quà tặng thời trang', 0, 'category', '', 1, 6),
(8, 'Đồ chơi', 0, 'category', '', 1, 8),
(9, 'Cây hoa', 0, 'category', '', 1, 9),
(10, 'Đồ dùng tiện ích', 0, 'category', '', 1, 10),
(11, 'Đồ nghệ thuật', 0, 'category', '', 1, 11),
(12, 'Quà sinh nhật', 2, 'category', '', 1, 1),
(13, 'Quà Valentine', 2, 'category', '', 1, 2),
(14, 'Quà tân gia', 2, 'category', '', 1, 3),
(15, 'Quà cưới', 2, 'category', '', 1, 4),
(16, 'Quà 8/3 - 20/10', 2, 'category', '', 1, 5),
(17, 'Quà tết', 2, 'category', '', 1, 6),
(18, 'Quà giáng sinh', 2, 'category', '', 1, 7),
(19, 'Quà trung thu', 2, 'category', '', 1, 8),
(20, 'Quà tặng người yêu', 1, 'category', '', 1, 1),
(21, 'Quà tặng sếp', 1, 'category', '', 1, 2),
(22, 'Quà tặng cha mẹ', 1, 'category', '', 1, 3),
(23, 'Quà tặng bé', 1, 'category', '', 1, 4),
(24, 'Quà tặng bạn bè', 1, 'category', '', 1, 5),
(25, 'Quà tặng đồng nghiệp', 1, 'category', '', 1, 6),
(26, 'Quà tặng thầy cô', 1, 'category', '', 1, 7),
(27, 'Trang sức', 7, 'category', '', 1, 1),
(28, 'Thắt lưng', 7, 'category', '', 1, 2),
(29, 'Túi xách', 7, 'category', '', 1, 3),
(30, 'Ví', 7, 'category', '', 1, 4),
(31, 'Kính mắt', 7, 'category', '', 1, 5),
(32, 'Mũ', 7, 'category', '', 1, 6),
(33, 'Găng tay, tất', 7, 'category', '', 1, 7),
(34, 'Giày', 7, 'category', '', 1, 8),
(35, 'Quần áo', 7, 'category', '', 1, 9),
(36, 'Cà vạt', 7, 'category', '', 1, 10),
(37, 'Mỹ phẩm', 7, 'category', '', 1, 11),
(38, 'Đồ chơi xếp hình', 8, 'category', '', 1, 1),
(39, 'Đồ chơi công nghệ', 8, 'category', '', 1, 2),
(40, 'Đồ chơi sáng tạo', 8, 'category', '', 1, 3),
(41, 'Đồ hàng', 8, 'category', '', 1, 4),
(42, 'Búp bê', 8, 'category', '', 1, 5),
(43, 'Thú nhồi bông', 8, 'category', '', 1, 6),
(44, 'Mặt nạ', 8, 'category', '', 1, 7),
(45, 'Hoa gấu bông', 9, 'category', '', 1, 1),
(46, 'Hoa giấy', 9, 'category', '', 1, 2),
(47, 'Hoa vải', 9, 'category', '', 1, 3),
(48, 'Hoa sáp', 9, 'category', '', 1, 4),
(49, 'Lẵng hoa', 9, 'category', '', 1, 5),
(50, 'Chậu cây cảnh', 9, 'category', '', 1, 6),
(51, 'Đồ công nghệ', 10, 'category', '', 1, 1),
(52, 'Đèn trang trí', 10, 'category', '', 1, 2),
(53, 'Ô, áo mưa', 10, 'category', '', 1, 3),
(54, 'Mô hình', 10, 'category', '', 1, 4),
(55, 'Hộp nhạc', 10, 'category', '', 1, 5),
(56, 'Bật lửa', 10, 'category', '', 1, 6),
(57, 'Móc khóa', 10, 'category', '', 1, 7),
(58, 'Gương', 10, 'category', '', 1, 8),
(59, 'Đồng hồ', 10, 'category', '', 1, 9),
(60, 'Bút', 10, 'category', '', 1, 10),
(61, 'Hộp quà', 5, 'category', '', 1, 1),
(62, 'Bánh trung thu', 5, 'category', '', 1, 2),
(63, 'Hộp trà', 5, 'category', '', 1, 3),
(64, 'Tinh dầu', 5, 'category', '', 1, 4),
(65, 'Sô cô la', 5, 'category', '', 1, 5),
(66, 'Rượu', 5, 'category', '', 1, 6),
(67, 'Khung tranh', 11, 'category', '', 1, 1),
(68, 'Tranh vẽ', 11, 'category', '', 1, 2),
(69, 'Tranh 3D', 11, 'category', '', 1, 3),
(70, 'Tượng', 11, 'category', '', 1, 4),
(71, 'Thiệp', 11, 'category', '', 1, 5),
(72, 'Đồ điêu khắc', 11, 'category', '', 1, 6),
(73, 'Đồ gốm sứ', 11, 'category', '', 1, 7),
(74, 'Đồ thủy tinh', 11, 'category', '', 1, 8),
(4, 'Điều khoản dịch vụ', 0, 'footer', '', 1, 1),
(75, 'Giới thiệu', 0, 'menu', 'about', 1, 2),
(76, 'Chính sách bảo mật', 0, 'footer', '', 1, 3),
(77, 'Hỗ trợ & hỏi đáp', 0, 'footer', '', 1, 2),
(78, 'Liên hệ với chúng tôi', 0, 'footer', '', 1, 4),
(79, 'Sản phẩm mới nhất', 0, 'menu', 'new', 1, 4),
(80, 'Sản phẩm nổi bật', 0, 'menu', 'best', 1, 5),
(81, 'Sản phẩm khuyến mãi', 0, 'menu', 'discount', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `cf_id` int(11) NOT NULL,
  `cf_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cf_advert` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cf_adlink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cf_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cf_hotline` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cf_footer` text COLLATE utf8_unicode_ci NOT NULL,
  `cf_facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cf_twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cf_phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cf_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cf_instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cf_google` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cf_about` text COLLATE utf8_unicode_ci NOT NULL,
  `cf_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cf_payment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`cf_id`, `cf_logo`, `cf_advert`, `cf_adlink`, `cf_title`, `cf_hotline`, `cf_footer`, `cf_facebook`, `cf_twitter`, `cf_phone`, `cf_email`, `cf_instagram`, `cf_google`, `cf_about`, `cf_address`, `cf_payment`) VALUES
(1, 'logo.png', 'pepsi.png', 'http://www.quangcao.com', 'Gift Shop', '0123456789', '<p>&copy;  2016 <a href="">Gift Shop</a></p>', 'https://www.facebook.com/', 'https://twitter.com/', '0123456789', 'about@me.com', 'https://instagramcom/', 'https://google.com/', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non suscipit imperdiet odio id sollicitudin', 'Hà Nội - Việt Nam', 'Lorem ipsum dolor sit amet, mea et eros magna, labitur antiopam aliquando ei mea. Labores tibique duo id. Ne mei debet molestie concludaturque, eu esse alterum persequeris sea, vide habeo accommodare no vix. Accusam iudicabit persequeris ius ei.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ct_id` int(11) NOT NULL,
  `u_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ct_content` text COLLATE utf8_unicode_ci NOT NULL,
  `ct_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ct_id`, `u_name`, `u_email`, `ct_content`, `ct_date`) VALUES
(3, 'Người dùng 1', 'me@gmail.com', 'Có gì hay không?', '20161126200303'),
(4, 'Tôi là tôi', 'no@mail.com', 'Trông có vẻ hay', '20161126200347'),
(5, 'Người dùng 1', 'me@gmail.com', 'Chất lượng', '20161128170454'),
(6, 'Người dùng 1', 'me@gmail.com', 'Có gì không?', '20161128180405'),
(7, 'Liên hệ', 'contact@gmail.com', '123456', '20161128180445');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(255) NOT NULL,
  `t_id` int(255) NOT NULL,
  `p_id` int(11) NOT NULL,
  `o_quantity` int(11) NOT NULL,
  `o_amount` decimal(15,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `t_id`, `p_id`, `o_quantity`, `o_amount`) VALUES
(26, 11, 43, 2, '1710000.00'),
(27, 12, 46, 4, '360000.00'),
(25, 11, 62, 3, '282150.00'),
(19, 10, 3, 1, '41400.00'),
(20, 10, 57, 1, '73000.00'),
(21, 10, 33, 1, '71000.00'),
(22, 10, 48, 1, '157000.00'),
(23, 10, 63, 1, '306000.00'),
(24, 10, 27, 1, '200000.00'),
(28, 13, 11, 1, '159000.00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(255) NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_price` decimal(15,2) NOT NULL,
  `p_discount` tinyint(2) NOT NULL,
  `p_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `p_review` text COLLATE utf8_unicode_ci NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_imagelist` text COLLATE utf8_unicode_ci NOT NULL,
  `p_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_count` int(11) NOT NULL DEFAULT '0',
  `p_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_image`, `p_price`, `p_discount`, `p_detail`, `p_review`, `c_id`, `p_imagelist`, `p_date`, `p_count`, `p_status`) VALUES
(1, 'Hộp Socola', 'sp-2.jpg', '73000.00', 40, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 13, '["sp-2.jpg","sp-2.jpg"]', '20161130165814', 0, 1),
(2, 'Bánh sinh nhật', 'sp-1.jpg', '63000.00', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 12, '["sp-1.jpg","sp-1.jpg"]', '20161130165802', 0, 1),
(3, 'Lọ thủy tinh giáng sinh', 'sp-8.jpg', '46000.00', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 18, '["sp-8.jpg","sp-8.jpg"]', '20161130165903', 1, 1),
(4, 'Thư pháp', 'sp-4.jpg', '345000.00', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 15, '["sp-4.jpg","sp-4.jpg"]', '20161130165831', 0, 1),
(5, 'Bể cá', 'sp-3.jpg', '872000.00', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 14, '["sp-3.jpg","sp-3.jpg"]', '20161130165820', 0, 1),
(6, 'Gói quà tết', 'sp-5.jpg', '70000.00', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 17, '["sp-5.jpg","sp-5.jpg"]', '20161130165838', 0, 1),
(7, 'Hoa hồng bất tử', 'sp-6.jpg', '38000.00', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 16, '["sp-6.jpg","sp-6.jpg"]', '20161130165857', 0, 1),
(8, 'Bánh trung thu', 'sp-7.jpg', '310000.00', 30, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 19, '["sp-7.jpg","sp-7.jpg"]', '20161130183747', 0, 1),
(9, 'Xe chở hoa', 'sp-9.jpg', '92000.00', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.', 20, '["sp-9.jpg","sp-9.jpg"]', '20161130165909', 0, 1),
(16, 'Bộ chặn giấy', 'sp-10.jpg', '533000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 21, '["sp-10.jpg","sp-10.jpg"]', '20161130170321', 0, 1),
(17, 'Tranh chữ mạ vàng', 'sp-11.jpg', '94000.00', 30, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 22, '["sp-11.jpg","sp-11.jpg"]', '20161130170545', 0, 1),
(18, 'Bảng tự xóa', 'sp-12.jpg', '45000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 23, '["sp-12.jpg","sp-12.jpg"]', '20161130170648', 0, 1),
(19, 'Đồ gỗ trang trí', 'sp-13.jpg', '101000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 24, '["sp-13.jpg","sp-13.jpg"]', '20161130170802', 0, 1),
(20, 'Đồng hồ cát', 'sp-14.jpg', '82000.00', 40, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 25, '["sp-14.jpg","sp-14.jpg"]', '20161130170849', 0, 1),
(21, 'USB trang sức', 'sp-15.jpg', '201000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 27, '["sp-15.jpg","sp-15.jpg"]', '20161130170950', 0, 1),
(22, 'Thắt lưng da', 'sp-16.jpg', '72000.00', 40, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 28, '["sp-16.jpg","sp-16.jpg"]', '20161130171028', 0, 1),
(23, 'Balo thời trang', 'sp-17.jpg', '96000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 29, '["sp-17.jpg","sp-17.jpg"]', '20161130171129', 0, 1),
(24, 'Ví da thời trang', 'sp-18.jpg', '57000.00', 30, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 30, '["sp-18.jpg","sp-18.jpg"]', '20161130171202', 0, 1),
(25, 'Kính mắt thời trang', 'sp-19.jpg', '59000.00', 60, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 31, '["sp-19.jpg","sp-19.jpg"]', '20161130171235', 0, 1),
(26, 'Mũ sành điệu', 'sp-20.jpg', '46000.00', 30, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 32, '["sp-20.jpg","sp-20.jpg"]', '20161130171325', 0, 1),
(27, 'Găng tay phượt', 'sp-21.jpg', '200000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu magna sit amet arcu malesuada tincidunt at eget lorem. Maecenas vitae venenatis libero. Mauris fermentum magna a magna laoreet, eget sagittis ipsum feugiat.</span></font>', 33, '["sp-21.jpg","sp-21.jpg"]', '20161130171406', 1, 1),
(28, 'Áo vest công sở', 'sp-23.jpg', '234000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 35, '["sp-23.jpg","sp-23.jpg"]', '20161130171717', 0, 1),
(29, 'Cà vạt thời trang', 'sp-24.jpg', '38000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 36, '["sp-24.jpg","sp-24.jpg"]', '20161130171807', 0, 1),
(30, 'Bộ mỹ phẩm', 'sp-25.jpg', '172000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 37, '["sp-25.jpg","sp-25.jpg"]', '20161130171852', 0, 1),
(31, 'Bộ xếp hình', 'sp-26.jpg', '94000.00', 60, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 38, '["sp-26.jpg","sp-26.jpg"]', '20161130171939', 0, 1),
(32, 'Drone', 'sp-28.jpg', '982000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 39, '["sp-28.jpg","sp-28.jpg"]', '20161130172202', 0, 1),
(33, 'Hộp nhạc cầu thủy tinh', 'sp-29.jpg', '71000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 40, '["sp-29.jpg","sp-29.jpg"]', '20161130172332', 1, 1),
(34, 'Bộ đồ hàng', 'sp-30.jpg', '90000.00', 50, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 41, '["sp-30.jpg","sp-30.jpg"]', '20161130172415', 0, 1),
(35, 'Búp bê', 'sp-31.jpg', '74000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 42, '["sp-31.jpg","sp-31.jpg"]', '20161130173153', 0, 1),
(36, 'Gấu bông', 'sp-32.jpg', '63000.00', 5, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 43, '["sp-32.jpg","sp-32.jpg"]', '20161130173233', 0, 1),
(37, 'Mặt nạ Hacker', 'sp-33.jpg', '77000.00', 10, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 44, '["sp-33.jpg","sp-33.jpg"]', '20161130173304', 0, 1),
(38, 'Hoa gấu bông', 'sp-34.jpg', '93000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 45, '["sp-34.jpg","sp-34.jpg"]', '20161130173339', 0, 1),
(39, 'Rổ hoa giấy', 'sp-35.jpg', '41000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 46, '["sp-35.jpg","sp-35.jpg"]', '20161130173436', 0, 1),
(40, 'Hoa vải', 'sp-36.jpg', '25000.00', 20, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 47, '["sp-36.jpg","sp-36.jpg"]', '20161130173525', 0, 1),
(41, 'Hoa sáp thơm', 'sp-37.jpg', '72000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 48, '["sp-37.jpg","sp-37.jpg"]', '20161130173601', 0, 1),
(42, 'Lẵng hoa', 'sp-38.jpg', '59000.00', 30, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 49, '["sp-38.jpg","sp-38.jpg"]', '20161130173633', 0, 1),
(43, 'Chậu cây cảnh', 'sp-39.jpg', '855000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 50, '["sp-39.jpg","sp-39.jpg"]', '20161130173712', 2, 1),
(44, 'Kính thực tế ảo', 'sp-40.jpg', '796000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 51, '["sp-40.jpg","sp-40.jpg"]', '20161130173753', 0, 1),
(45, 'Đèn gỗ treo tường', 'sp-41.jpg', '362000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 52, '["sp-41.jpg","sp-41.jpg"]', '20161130173824', 0, 1),
(46, 'Áo mưa thời trang', 'sp-42.jpg', '90000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 53, '["sp-42.jpg","sp-42.jpg"]', '20161130173903', 4, 1),
(47, 'Mô hình thuyền', 'sp-44.jpg', '278000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 54, '["sp-44.jpg","sp-44.jpg"]', '20161130173935', 0, 1),
(48, 'Hộp nhạc piano', 'sp-45.jpg', '157000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 55, '["sp-45.jpg","sp-45.jpg"]', '20161130174027', 1, 1),
(49, 'Bật lửa mạ vàng', 'sp-46.jpg', '118000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 56, '["sp-46.jpg","sp-46.jpg"]', '20161130174115', 0, 1),
(50, 'Móc khóa sành điệu', 'sp-47.jpg', '59000.00', 20, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 57, '["sp-47.jpg","sp-47.jpg"]', '20161130174156', 0, 1),
(51, 'Gương để bàn', 'sp-48.jpg', '290000.00', 60, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 58, '["sp-48.jpg","sp-48.jpg"]', '20161130174238', 0, 1),
(52, 'Đồng hồ BigBen', 'sp-49.jpg', '255000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 59, '["sp-49.jpg","sp-49.jpg"]', '20161130174341', 0, 1),
(53, 'Bút cao cấp', 'sp-50.jpg', '50000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet facilisis posuere. In in laoreet odio. Cras lacinia tincidunt nisl sagittis vehicula.</span></font>', 60, '["sp-50.jpg","sp-50.jpg"]', '20161130174423', 0, 1),
(54, 'Hộp quà cao cấp', 'sp-51.jpg', '190000.00', 5, '<div style="text-align: justify;"><font face="Open Sans, Arial, sans-serif"><span style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font></div>', '<div style="text-align: justify;"><font face="Open Sans, Arial, sans-serif"><span style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font></div>', 61, '["sp-51.jpg","sp-51.jpg"]', '20161130182554', 0, 1),
(55, 'Bánh trung thu hảo hạng', 'sp-52.jpg', '248000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 62, '["sp-52.jpg","sp-52.jpg"]', '20161130182635', 0, 1),
(56, 'Hộp trà cao cấp', 'sp-53.jpg', '86000.00', 20, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 63, '["sp-53.jpg","sp-53.jpg"]', '20161130182714', 0, 1),
(57, 'Tinh dầu thơm', 'sp-54.jpg', '73000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 64, '["sp-54.jpg","sp-54.jpg"]', '20161130182810', 1, 1),
(58, 'Bánh Socola hảo hạng', 'sp-55.jpg', '57000.00', 5, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 65, '["sp-55.jpg","sp-55.jpg"]', '20161130182852', 0, 1),
(59, 'Rượu vang nguyên chất', 'sp-56.jpg', '126000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 66, '["sp-56.jpg","sp-56.jpg"]', '20161130182929', 0, 1),
(60, 'Khung tranh thiên nhiên', 'sp-57.jpg', '490000.00', 10, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 67, '["sp-57.jpg","sp-57.jpg"]', '20161130183033', 0, 1),
(61, 'Tranh chân dung', 'sp-58.jpg', '62000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 68, '["sp-58.jpg","sp-58.jpg"]', '20161130183121', 0, 1),
(62, 'Tranh 3D', 'sp-59.jpg', '99000.00', 5, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 69, '["sp-59.jpg","sp-59.jpg"]', '20161130183148', 3, 1),
(63, 'Tượng ngựa đồng', 'sp-60.JPG', '306000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 70, '["sp-60.JPG","sp-60.JPG"]', '20161130183228', 1, 1),
(15, 'Thiệp 3D giáng sinh', 'sp-61.jpg', '44000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 71, '["sp-61.jpg","sp-61.jpg"]', '20161130183310', 0, 1),
(14, 'Đồng hồ gỗ', 'sp-62.jpg', '309000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 72, '["sp-62.jpg","sp-62.jpg"]', '20161130183342', 0, 1),
(13, 'Bộ ấm chén cao cấp', 'sp-63.jpg', '165000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 73, '["sp-63.jpg","sp-63.jpg"]', '20161130183436', 0, 1),
(12, 'Thuyền trong chai', 'sp-64.jpg', '273000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 74, '["sp-64.jpg","sp-64.jpg"]', '20161130183526', 0, 1),
(11, 'Giày thời trang', 'sp-22.jpg', '159000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 34, '["sp-22.jpg","sp-22.jpg"]', '20161130184111', 1, 1),
(10, 'Sổ ghi chép', 'sp-65.jpg', '52000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel velit vitae tellus convallis tempus. Proin nibh turpis, posuere vitae lobortis at, rutrum at eros.</span></font>', 26, '["sp-65.jpg","sp-65.jpg"]', '20161130184646', 0, 1),
(70, 'Máy tạo cầu vồng', 'sp-66.jpg', '279000.00', 0, '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat augue ut tellus pulvinar, sit amet viverra nisl mattis. Aenean ornare, diam consectetur tempus vehicula, lorem augue rhoncus urna, ac aliquet nunc tortor in nisl</span></font>', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat augue ut tellus pulvinar, sit amet viverra nisl mattis. Aenean ornare, diam consectetur tempus vehicula, lorem augue rhoncus urna, ac aliquet nunc tortor in nisl</span></font>', 51, '["sp-66.jpg","sp-66.jpg"]', '20161202200526', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_link` text COLLATE utf8_unicode_ci NOT NULL,
  `s_position` tinyint(2) NOT NULL,
  `s_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`s_id`, `s_name`, `s_title`, `s_link`, `s_position`, `s_status`) VALUES
(1, 'slide1.png', 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum laborum ad fuga amet quos, aut commodi, nam animi ducimus minima!', 1, 1),
(2, 'slide2.png', 'Ipsum', 'Voluptate possimus consequatur iusto aspernatur optio, veritatis aliquam, provident ad dolorem earum animi fuga iste vitae, nobis minima sint inventore.', 2, 1),
(4, 'slide4.png', 'Sit', 'Voluptate maiores possimus, dolor accusamus earum libero nemo impedit, et inventore consequatur dolorem. Animi necessitatibus in cupiditate, dignissimos voluptas ea.', 4, 1),
(3, 'slide3.png', 'Dolor', 'Dolorum iusto dolor consequuntur, earum, harum quasi molestiae velit nam ratione provident quos possimus nisi dicta distinctio nihil accusamus alias?', 3, 1),
(5, 'slide5.png', 'Amet', 'Labore vero consequatur quae ipsa accusamus mollitia explicabo eligendi, dicta nobis facere architecto earum animi perspiciatis voluptatibus sit deserunt impedit!', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `t_id` int(255) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `t_amount` decimal(15,2) NOT NULL,
  `t_message` text COLLATE utf8_unicode_ci NOT NULL,
  `t_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`t_id`, `u_id`, `u_name`, `u_email`, `u_address`, `u_phone`, `t_amount`, `t_message`, `t_date`, `t_status`) VALUES
(11, 108, 'Người dùng 1', 'me@gmail.com', 'Hà Nội - Việt Nam', '0987654321', '1992150.00', '', '20161130190531', 0),
(12, 0, 'Alice', 'alice@gmail.com', 'London', '0369874563', '360000.00', 'Lorem Ipsum', '20161130222117', 0),
(10, 108, 'Người dùng 1', 'me@gmail.com', 'Hà Nội - Việt Nam', '0987654321', '848400.00', '', '20161130190437', 1),
(13, 0, 'abcxyz', 'abc@gmail.com', 'Hanoi', '0123456789', '159000.00', '123', '20170117143413', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `u_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_password`, `u_phone`, `u_address`, `u_date`, `u_status`) VALUES
(108, 'Người dùng 1', 'me@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0987654321', 'Hà Nội - Việt Nam', '20161128123609', 1),
(109, 'User', 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0147258369', 'HCM City', '20161128194012', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_username` (`a_username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`cf_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `cf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `t_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
