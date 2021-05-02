-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 02, 2021 at 04:08 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b2b`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_hypotheses`
--

CREATE TABLE `category_hypotheses` (
  `category_id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_hypotheses`
--

INSERT INTO `category_hypotheses` (`category_id`, `category_name`) VALUES
(1, 'Competitor analysis'),
(2, 'Investments'),
(3, 'Niche analysis'),
(4, 'Other'),
(5, 'Product'),
(6, 'Sales'),
(7, 'Team'),
(8, 'Traffic');

-- --------------------------------------------------------

--
-- Table structure for table `hypotheses_library`
--

CREATE TABLE `hypotheses_library` (
  `hypotheses_id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hypotheses_library`
--

INSERT INTO `hypotheses_library` (`hypotheses_id`, `category_id`, `description`) VALUES
(1, 1, 'If you agree with well-known bloggers of the city, restaurants or barbecue delivery, for example, reciprocal advertising-subscribers can increase, and, consequently, requests and sales.'),
(2, 1, 'If you contact the 2Gis manager under the pretext of purchasing a paid package, you can find out data on competitors on this site.'),
(3, 1, 'If you find customer contacts on competitors\' websites, you can contact them and find out information about how competitors work with customers and what they offer.'),
(4, 1, 'If I go to a meeting of Speed leaders, I will find out from other leaders and captains how to find competitors\' contacts.'),
(5, 1, 'If I go to offline stores in different cities of my region, I can see their assortment and the average cost of goods.'),
(6, 2, 'If you make a high-quality presentation and prepare answers to the expected questions of the investor, then the chances for signing an investment contract will increase by 50%.'),
(7, 2, 'If I correctly calculate the financial model, then I will see the profitability / unprofitability of my business and determine the need to attract investments.'),
(8, 2, 'If I invest in a Speed participant, I will see how to act when attracting investments from the inside.'),
(9, 2, 'If I go to a meeting of an investment club today, I can get to know each other and take phone numbers from 10 investors.'),
(10, 2, 'If I ask my friends who cannot invest in my project to recommend me to their friends, then I will attract 250,000 within a week.'),
(20, 3, 'If I travel to all the districts where I plan to open a school, I can evaluate the advantages of each district and make a choice.'),
(19, 3, 'If I fill in the UNIT economy formula, then I can see the most subtle points that affect profits.'),
(18, 3, 'If I go to my direct competitor for a procedure, I will find out its main advantages.'),
(17, 3, 'If I post a story with my product and attach a survey about how interesting this product is to subscribers, I will get the first 10 leads and estimate the demand.'),
(11, 3, 'If I find an expert in a niche that I am launching, then I can not test at least 7 hypotheses, since he has already tested it.'),
(21, 4, 'If I identify my main point of growth and direct my full attention to it, then revenue will grow by 30%.'),
(22, 4, 'If I set plans for employees, then the company\'s bottom line will increase by 15%.'),
(23, 4, 'If I clearly plan the tasks, and set a deadline for each one during the day, then the percentage of completing daily tasks will increase.'),
(24, 4, 'If I ask the landlord to reduce the rental price by 50% due to the pandemic, he will agree to cut it by 30%.'),
(25, 4, 'If I fill in the data about myself and my company in the \"Settings\" section, I can receive more accurate feedback.'),
(26, 5, 'If I replace a physically useless gift with a useful PDF, I can add value to the gift and reduce variable costs.'),
(27, 5, 'If we introduce online classes in the Zoom program, then it will be possible to save 25% of clients during the quarantine period.'),
(28, 5, 'If I offer my clients an installment plan and credit system, I can raise the average check.'),
(29, 5, 'If I offer my warehouse to a supplier partner, I can receive the goods for sale on storage conditions.'),
(30, 5, 'If I collect feedback from my competitors\' clients, I will define the key criteria for choosing a product and refine my product.'),
(31, 6, 'If I offer three competitors\' clients to try my product on more favorable terms, then at least one will agree.'),
(32, 6, 'If you invite to a free marathon for 3 days, then the conversion for sale will increase by 20%.'),
(33, 6, 'If I welcome all new subscribers and give bonuses, this will increase the number of applications by 10%.'),
(34, 6, 'If I call the requests that did not respond or were turned off, then I can make sales of conversions by 10%.'),
(35, 6, 'If I offer to take a subscription not for 8, but for 12 lessons and give 2 lessons to the subscription as a gift, then I can increase the average check.'),
(36, 7, 'If I start to collect the satisfaction rate of each department within the organization, I can find at least 5 points to adjust.'),
(37, 7, 'If I make a telegram bot that will ask employees about the work done every day, the efficiency of employees will increase by 50%.'),
(38, 7, 'If you come to the university, you can find students for work in a week for free.'),
(39, 7, 'If I hire a remote assistant, it works just as well but costs less.'),
(40, 7, 'If I compose a vacancy like the competitors, I can increase the number of applications for the vacancy by 30%.'),
(41, 8, 'If I put a target on the subscribers of competitors, then at least 20% will be able to entice myself.'),
(42, 8, 'If I launch a newsletter in What\'s Up, I can increase the conversion from those who saw the newsletter to potential customers by 50%.'),
(43, 8, 'If I make an Instagram story about a 50% discount on internet promotion for those who move their business online, I will get at least 1 lead.'),
(44, 8, 'If I open an online appointment, then 2 times more clients will sign up for the next week.'),
(45, 8, 'If I place an ad in 50 entrances, then I can get at least 20 clients per week.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `nickname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwordd` varchar(32) NOT NULL,
  `phonenumb` int(11) DEFAULT NULL,
  `bday` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_hypotheses`
--
ALTER TABLE `category_hypotheses`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `hypotheses_library`
--
ALTER TABLE `hypotheses_library`
  ADD UNIQUE KEY `hypotheses_id` (`hypotheses_id`),
  ADD KEY `fk_foreign_key_name` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_hypotheses`
--
ALTER TABLE `category_hypotheses`
  MODIFY `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hypotheses_library`
--
ALTER TABLE `hypotheses_library`
  MODIFY `hypotheses_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
