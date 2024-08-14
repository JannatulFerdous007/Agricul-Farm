-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 01:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agricul_farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `cv` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`appid`, `userid`, `jobid`, `cv`, `date`) VALUES
(1, 2, 2, 'HTML5 & CSS3 The Complete Manual 2014.pdf', '2004-07-21'),
(2, 2, 3, 'Windows Forms App.pdf', '2004-07-21'),
(3, 8, 1, 'Project Proposal By_200103020003,200103020049,200103020054.pdf', '2013-01-23'),
(4, 8, 4, '', '2013-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(2, 'orange', 33, 'Screenshot (4).png', 1),
(3, 'Banana', 170, 'fruit6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `name`) VALUES
(1, 'Front End'),
(2, 'Back End'),
(3, 'Android Development');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` int(250) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `user`, `email`, `mobile`, `comment`) VALUES
(34, 'j', 'jfjannah007@gmail.com', 1309669473, 'jj'),
(35, 'j', 'jfjannah007@gmail.com', 1309669473, 'j'),
(36, 'g', 'jfjannah007@gmail.com', 1312456620, 'jj'),
(37, 'f', 'j@gmail.com', 13, 'f'),
(38, 'trg', 'j@gmail.com', 13, 'dfgf'),
(39, 'd', 'jannah@gmail.com', 4, 'h');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `amount` int(250) NOT NULL,
  `payment_mode` varchar(111) NOT NULL,
  `payment_id` varchar(111) DEFAULT NULL,
  `message` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `email`, `amount`, `payment_mode`, `payment_id`, `message`, `created_at`) VALUES
(1, '', 'mm@gmail.com', 33, '0', '', '', '2022-12-04 04:51:37'),
(2, 'JMS', 'jms@gmail.com', 333, '0', '', 'keep up', '2022-12-04 04:55:07'),
(5, 'JMS', 'jms@gmail.com', 1, 'Paid by Paypal', '4DU1901673897190E', 'JMS', '2022-12-05 08:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `empid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`empid`, `name`, `email`, `password`, `type`) VALUES
(2, 'approxsol', 'ali@gmail.com', '123', 1),
(3, 'LG', 'lg123@gmail.com', '123', 1),
(4, 'Jannatul Ferdous', 'jannatulferdous3853@gmail.com', 'jj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE `instruction` (
  `id` int(11) NOT NULL,
  `title` varchar(1155) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instruction`
--

INSERT INTO `instruction` (`id`, `title`, `content`) VALUES
(17, 'Revitalising Bangladesh’s agriculture sector', 'Agriculture has consistently been the largest sector in Bangladesh, as in several other developing economies. About 50 percent of the population are employed in this sector and about 70 percent people overall depend on agriculture for their livelihood. A significant proportion of the poor relies on agriculture as the key source of income and employment. Indirect dependence on agriculture is reflected through employment in agro-based services and rural enterprises. However, for the past three decades the average growth of the agriculture sector has hovered around 3.2 percent—as compared to manufacturing 7.5 percent and the services sector 6.2 percent. For the past two decades, overall average employment in agriculture remained at around 70 percent—as compared to manufacturing 12.4 percent and services 23.5 percent. The average share of agriculture as a proportion of GDP growth for the past decade ranged from 17.5 percent (2009) to 12.68 percent (2019). In comparison, the share of the manufacturing sector steadily rose from 25.3 percent (2009) to 29.65 percent (2019), while the share of the services sector remained almost constant—53.2 percent in 2009 and 58.8 percent in 2019.\r\n\r\n60 percent of overall agricultural output comes from the crops sub-sector, followed by fisheries and livestock. A similar trend is evidenced as regards to the contribution of the agriculture sector to GDP in most developing countries during the transition from less developed or developing to upper middle-income status. This scenario also indicates that despite slow or steady pace of growth of agriculture sector per se, and lower share of agriculture in GDP, this sector has the potential to significantly impact the rural income, employment and overall reduction of poverty.'),
(19, 'Prospect of Agribusiness in Bangladesh', 'Agri-business in Bangladesh still remains a largely untapped area for diversification of economic activities. It has not developed properly, considering the country’s prospects in this particular field. The economy is largely dependent on agriculture, though the sector’s share in the country’s gross domestic product (GDP) has steadily been on the decline. This is, however, not entirely unexpected for a developing nation. Yet then, over three-fourths of the total population in Bangladesh live in rural areas. Most of such rural people are directly or indirectly engaged in a wide range of agricultural activities. Agriculture contributes significantly to the country’s GDP. About 57 percent of the country’s labor force is absorbed in the crop sector alone.\r\n\r\nThe number of large, medium, and small agro-based firms is quite limited in this country to about 150 million. Out of such firms, only a few ones could make headway in agri-business. Two or three such firms are exporting the country’s agro-products to the overseas market. On its part, the government has offered some incentives, direct and indirect ones, to grow agri-business in the country. But no significant amount of investment has so far been named either by the public or the private sector here.\r\nThe areas of agri-business have already been identified. These are cold storage facilities serving the supply chain, especially the production of fresh produce for both home and export markets, reduction of the use of chemical fertilizers, cultivation of seeds, eco-friendly jute production that is supported by jute technology development institutes, shrimp farming, ‘Halal’ foods, milk and dairy products, high value-added foods for export, including herbs, spices, nuts, and pulses. In this context, the United States befittingly came up with a model for agri-business in Bangladesh the other day. It has teamed up with the BRAC Bank in replicating or adapting the model in Bangladesh.\r\n\r\nThe government of Bangladesh has been proactive about encouraging the development of the agricultural sector by increasing productivity in the crop sector and raising the output of non-crop agriculture. To achieve this, it provides increased credit and facilitates greater access to inputs and modern technology.\r\n\r\nThe government has come up with the following incentives:\r\nThe liquefy Entrepreneurship Fund for the development of the agri-business industry.\r\nSpecial loan facilities available to set up an agri-business venture,\r\nAgri-business industry enjoys tax holidays,\r\nAny investment in this sector will enjoy similar tax amnesty as available in other sectors.\r\nThe imposition of supplementary duty on mangoes, oranges, grapes, apples, dates, and others encourages high quality and cheaper local resources.\r\nCash incentives have been given to the exporters in various sub-sectors.\r\nStrengthening producer organizations can significantly help the farmers, and a variety of other institutions can provide alternative fora for dispute resolution Associations formed around\r\n'),
(21, 'Risks/Problems/Challenges Agribusiness in Bangladesh', '->Lack of quality control mechanisms and standardization of products. \r\n->Inadequate port facility. \r\n->Inadequate air freight space for export of perishables.\r\n->Irregular power supply.\r\n->Inadequate market information. \r\n->Insufficient supply of good quality seeds/fingerlings/DOC/breed.\r\n->Indiscriminate use of chemical fertilizer reducing soil fertility.\r\n->High level of post-harvest loss (10-38%).\r\n->Inadequate cold storage facility for vegetables.\r\n->Lack of packaging facility to meet up the international standard. \r\n->Lack of knowledge of industry about EurepGap, HACCP. \r\n->The reluctance of financial institutions to finance agribusiness. \r\n->Inadequate air space for fresh product export. \r\n->The limited capacity of the Bangladesh Standard Testing Institute for standard-setting and monitoring. \r\n->A Major challenge for the agribusiness sector of Bangladesh, especially for the export market, would comply with the SPS requirements. \r\n->The threat to small farmers due to the irregular supply of raw materials.');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `catid` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `empid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `title`, `catid`, `description`, `salary`, `timing`, `location`, `empid`) VALUES
(1, 'Front end Designer', 1, 'front designing, ui/ux etc', '20000', '11 to 1', 'Karachi, Pakistan', 2),
(2, 'Android developer', 3, 'java, xml, ui/ux, kotlin would be plus ', '25000', '3 to 5 ', 'Karachi, Pakistan', 2),
(3, 'Asp.net developer', 2, 'asp.net mvc, rest api, angular would be plus', '35000', '9 to 5 ', 'Karachi, Pakistan', 2),
(4, 'Jannatul Ferdous', 0, 'j', '8', '4', 'sylhet', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news` varchar(5000) NOT NULL,
  `image` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `image`, `date`) VALUES
(4, 'Bangladesh sees 22pc jump in fruit production in 12 years: Agriculture minister:\r\nBangladesh has become a ‘global example of success’ in fruit production over the past few years, but needs to grow the industry more to meet local demand, said Agriculture Minister Abdur Razzak.\r\nCurrently, Bangladesh has the fastest increase in fruit production according to the UN Food and Agriculture Organisation (FAO), the minister said at a media briefing on Monday to mark the upcoming National Fruit Fair on Jun 16.\r\nBangladesh has seen an 11.5 per cent annual rise in fruit production, he said, reports bdnews24.com. \r\n\r\nGlobally, Bangladesh stands in second position in jackfruit production, seventh in mango production, eighth in guava and fourteenth in papaya production. It has made it into the list of top ten countries producing seasonal fruit. \r\n\r\n\r\nThe country has had success in farming a variety of fruits, Abdur Razzak said.\r\n\r\nMango and jackfruit were the only major fruit produced in the country 20 years ago and only about 56 types of fruit were produced. Now at least 72 types of fruit are being farmed.\r\n\r\nThe minister, however, said the increased production is still not enough to meet local demand. Bangladesh has a daily demand of 200 grams of fruit per capita while the available supply is 85 grams.', '1655110870.jpg', '2022-10-28 08:00:59'),
(6, 'Bangladesh sees highest growth rate in fruit production:\r\nBangladesh has marked the highest rate of increase in fruit production among the world’s fruit producing countries, bringing a revolution in the country.\r\nThe country is the 10th largest tropical fruit producer across the world, according to the Food and Agriculture Organization (FAO) of the United Nations.\r\nFruit production in Bangladesh has been growing at a rate of 12.5 percent for the last 20 years, according to the FAO.\r\nOver the years, more and more fruit trees are being planted along roads, fallow land and in yards while commercial cultivation has increased over the last 10 years.\r\nThe government introduced support of Year-Round Fruit Production for Nutrition Improvement project in 2014 to increase supply of fruit round the year to close nutrition gap.\r\nConsumers are now getting different kind of fruits at fruit shops as farmers are producing local and foreign varieties of fruits across the country.\r\nProject director of Year-Round Fruit Production for Nutrition Improvement under Department of Agriculture Extension (DAE) Mehedi Masood told the Daily Sun that different government initiatives to produce fruits round the year have increased fruit production in the country in the last 10 years.\r\nDifferent indigenous fruits along with different foreign fruits are also being produced in the country, he said, adding that import of fruit has also declined due to huge fruit production in the country.\r\nA total of 70 different types of fruits are being produced in the country with mango remaining at the top of fruit production followed by banana. A total of 56 varieties of fruits were cultivated in Bangladesh about a decade ago, according to the Ministry of Agriculture.\r\nIn 2006-07, 4.74 lakh hectares of land was under fruit cultivation while the production was 8.79 million metric tons, according to DAE.', '4-rkd-0171-01-1560700295971.jpg', '2022-10-28 08:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `coption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_number`, `is_correct`, `coption`) VALUES
(47, 14, 1, 'Latin word'),
(48, 14, 0, 'German word'),
(49, 14, 0, 'Spanish'),
(50, 15, 1, 'Land, air and water'),
(51, 15, 0, 'Seed, Fertilizer and Pesticide'),
(52, 15, 0, 'Seed, air and water'),
(53, 15, 0, 'Land, Fertilizer and water'),
(54, 1, 0, 'Greek word'),
(55, 1, 1, 'Latin word'),
(56, 1, 0, 'German word'),
(57, 1, 0, 'Spanish'),
(58, 2, 1, 'Land, air and water'),
(59, 2, 0, 'Seed, Fertilizer and Pesticide'),
(60, 2, 0, 'Seed, air and water'),
(61, 2, 0, 'Land, Fertilizer and water'),
(62, 3, 0, 'Pulses'),
(63, 3, 0, 'Rice'),
(64, 3, 0, 'Wheat'),
(65, 3, 1, 'None of these'),
(66, 4, 0, 'Brazil'),
(67, 4, 0, 'USA'),
(68, 4, 0, 'Brazil'),
(69, 4, 1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(9) NOT NULL,
  `price` varchar(20) NOT NULL,
  `item` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `price`, `item`) VALUES
(30, '12', 'Canceled'),
(31, '13', 'COMPLETED'),
(32, '2', 'pending'),
(33, '30', 'pending'),
(34, '3', 'JMS'),
(35, '20', 'JMS2'),
(41, '23', 'saw'),
(78, '9000', 'jj'),
(79, '55', 'jj'),
(80, '66', 'j'),
(81, '88', 'jj'),
(82, '200', 'Jannah'),
(83, '34735', 'jjj'),
(84, '6', 'j'),
(85, '8', 'jjj');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(31, 'd', '4', 'Screenshot (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profileid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `qulification` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question_text`) VALUES
(1, 'Agriculture is a'),
(2, 'Primary resorce for agriculture'),
(3, 'Biological fixation of nitrogen occurs most commonly in which of the following crops?'),
(4, 'The largest groundnut producing country in the world is');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(11, 'JMS', 4, 'Good Work', 1664863312),
(13, 'J', 3, 'jj', 1672413909),
(14, 'JMS', 4, 'Good', 1672739073);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(111) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(7, 'HP power weeder farm tool', 'g.jpg', 299.00),
(8, 'Balwaan BE-52 Earth Auger', 'h.jpg', 125.00),
(5, 'Venturi Fertilization System', 'e.jpg', 299.00),
(6, 'novo3ds.in Petrol intercultivator', 'f.jpg', 125.00),
(4, 'Double Barrel Hand Operated Seeding', 'd.jpg', 100.00),
(3, 'Balwaan BP-700 Power Weeder', 'c.jpg', 125.00),
(2, 'TrustBasket Garden Tool kit ', 'b.jpg', 299.00),
(1, 'OMADA 12V Cordless Grass Cutting', 'a.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `password`, `type`) VALUES
(2, 'usman', 'usman@gmail.com', '123', 2),
(4, 'zeeshan', 'zeeshan@gmail.com', '123', 2),
(5, 'arzoo', 'arzoo@gmail.com', '000', 2),
(6, 'akbar', 'akbar@gmail.com', '123', 2),
(7, 'demo', 'demo', '', 2),
(8, 'demo', 'demo@gmail.com', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `birthday`, `address`, `gender`, `password`, `image`) VALUES
(5, 'Jannatul Ferdous', 'jfjannah007@gmail.com', '2022-11-16', 'Chhatak', 'Female', 'bf2bc2545a4a5f5683d9ef3ed0d977e0', ''),
(6, 'Janna', 'jannah@gmail.com', '2022-11-13', 'j', 'Female', '5b54c0a045f179bcbbbc9abcb8b5cd4c', 'green-mango-1.jpeg'),
(7, 'jfjannah', 'j@gmail.com', '2022-11-16', 'j', 'Female', 'bf2bc2545a4a5f5683d9ef3ed0d977e0', '4-rkd-0171-01-1560700295971.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appid`),
  ADD KEY `FK_application` (`userid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `instruction`
--
ALTER TABLE `instruction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `FK_jobs` (`empid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profileid`),
  ADD KEY `FK_profile` (`userid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `appid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instruction`
--
ALTER TABLE `instruction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
