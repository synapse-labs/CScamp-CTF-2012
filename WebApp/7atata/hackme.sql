-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 23, 2012 at 06:54 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `hackme`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `news`
-- 

CREATE TABLE `news` (
  `id` bigint(30) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `body` varchar(4000) NOT NULL,
  `time` bigint(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `news`
-- 

INSERT INTO `news` VALUES (1, 'Furniture Buying Index Hits 72 ', '“Consumers are now focusing more on their homes going into the fall selling season,” said Britt Beemer , chairman of the research groupResearch Group. “Most consumers are still very cautious, but they are a little more optimistic than they have been the past few months."    Beemer said pent-up demand is high because consumers have delayed furniture purchases. "The fall selling season will release some of that demand," he said.    The Furniture Buying Index is compiled each month by America''s Research Group from interviews with 5,000 to 8,000 consumers across the country. In a typical month, 80 percent of the consumers interviewed can name a specific furniture item they intend to buy. The Index''s mark signifies what percent of the benchmark 80 percent actually have a particular item in mind.', 1347101534);
INSERT INTO `news` VALUES (2, 'The Brick Furniture Chain is Back', 'The Brick is known across Canada for its overstuffed furniture, gleaming appliances and commissioned sales staff.    The home furnishings retailer''s merchandise is neither high-end, nor particularly trendy-and it''s often touted in television ads by a breathless announcer who gushes about limited-time sales. The straightforward formula was pioneered by an unlikely businessman: would-be professional hockey player and Edmontonian Bill Comrie (who is father to not one, but two former NHLers).    And it hasn''t changed much over the past four decades.', 1347101610);
INSERT INTO `news` VALUES (3, 'Leon\\''s Furniture to Repurchase Common Shares', 'Leon''s Furniture Limited said Thursday it has received approval for a common share repurchase programme on The Toronto Stock Exchange....', 1347101670);
INSERT INTO `news` VALUES (4, 'High Point Seminar Series Set', 'Since the launch of her No. 1-rated TV show, “Divine Design,” in 2002, Candice Olson has become one of North America’s most loved and recognized design personalities, offering her unique advice while taking viewers through a behind-the-scenes look at the design process. In 2011, Candice debuted her new series,” Candice Tells All,” on HGTV and W Network. With a new format and a cast of real-life artisans, Candice again sets the bar for design shows. In addition, as the creator of numerous product lines for the home, Candice enjoys sharing her signature style with multitudes of retail shoppers.     Editor in Chief Ann Maine has been directing the evolution of Traditional Home magazine since 2002. With editorial offices in New York and Des Moines, Iowa, Ann and her team create fresh, engaging content that captures the union of timeless deign with modern living, inspiring design lovers to reinterpret classic elegance in a thoroughly modern, personal way. In 2011, Ann directed the successful launch of TRADhommag, a new online magazine, in collaboration with Lonny.     Sponsored by IFDA Carolinas Chapter and IMC. $20 fee includes lunch. Seating will be limited and advance registration is recommended. Reservation is secured upon receipt of payment. E-mail lchastain@imcenters.com to request a credit card authorization.     * Bootstrapping Your Brand in a Challenged Economy, Sunday, Oct. 14, 7:30-9 a.m.', 1347101708);
INSERT INTO `news` VALUES (5, 'Furniture Insights: June a "Mixed Bag"', '"We expect the increases in shipments to level off and catch up with order rates as backlogs continue to fall," Smith said.    Receivables were only up 2 percent over June 2011 even with the higher increase in shipments (up 1 percent last month compared to previous year). Receivables were 1 percent higher than May despite a 3 percent decline in shipments in June compared with May.    "But as we have said before, with a 9 percent increase in shipments, receivable levels continue to be in pretty good shape," Smith noted.    Inventories in June rose 2 percent and were 9 percent above June 2011, compared with an 8 percent increase last month.', 1347101734);
INSERT INTO `news` VALUES (6, 'California Nixes Mattress Recycling Bill', 'The bill--which would have added millions of dollars in costs for mattress manufacturers that sell in California by requiring them to fund the cost of collecting used mattresses from consumers, dismantling them and recycling their components--failed in the final minutes of the 2012 California legislative session. The bill also would have required the industry to prevent consumers from illegally dumping their used mattresses. California is the third state this year to have considered, but failed to enact, a used mattress recycling law.    “For over 20 years, the International Sleep Products Association and its members have supported responsible mattress recycling,” said ISPA President, Ryan Trainer . “However, the approach proposed in California would have been bad for consumers, retailers and manufacturers.  Instead, we believe that a national system for mattress recycling, rather than an inefficient piecemeal, state-based system, is best for this industry. The strong unified voice that California legislators heard from the mattress manufacturing and retail industries demonstrates that this legislation was short-sighted and that a comprehensive national solution is needed.”', 1347101757);
INSERT INTO `news` VALUES (7, 'Linwood Furniture to Liquidate', 'Linwood Furniture is no more as a judge in U.S. Middle District Bankruptcy Court approved converting the company from a Chapter 11 bankruptcy to Chapter 7 after a hearing Wednesday afternoon.    After filing for Chapter 11 bankruptcy in March and attempting to reorganize the company, Linwood executives took the next step and put the company up for public auction Aug. 9. The company noted that it had $6.9 million in debt but only $3.7 million in assets.', 1347101778);
INSERT INTO `news` VALUES (11, 'Vulnerabilities fixed', 'We were notified of several vulnerabilities in the website, these vulnerabilities were fixed: SQL injection, local file inclusion, source disclosure.<br>\r\nWe just hope there is no more vulnerabilities ;)) ', 1353644218);

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `group` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(180) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (1, 'admin', 1, 'admin@foo.bar', '667d5d57a9d335f2e62785370a0fd064');
