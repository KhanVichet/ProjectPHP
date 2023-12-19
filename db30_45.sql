-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2023 at 07:01 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db30_45`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

DROP TABLE IF EXISTS `tblcategory`;
CREATE TABLE IF NOT EXISTS `tblcategory` (
  `CategoryID` int UNSIGNED NOT NULL,
  `Category` varchar(50) NOT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CategoryID`, `Category`) VALUES
(1, 'Hotel'),
(2, 'Place To Visit'),
(3, 'Bus Ticket'),
(4, 'Tours');

-- --------------------------------------------------------

--
-- Table structure for table `tbldata`
--

DROP TABLE IF EXISTS `tbldata`;
CREATE TABLE IF NOT EXISTS `tbldata` (
  `ID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(250) NOT NULL,
  `CategoryID` int NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `ImgURL` varchar(250) NOT NULL,
  `DesURL` varchar(250) NOT NULL,
  `DateIn` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbldata`
--

INSERT INTO `tbldata` (`ID`, `ProductName`, `CategoryID`, `Description`, `ImgURL`, `DesURL`, `DateIn`) VALUES
(18, 'Koh Kong Conservation Corridor', 2, '                  The Koh Kong Conservation Corridor stretches across an area within Cambodias Cardamom Mountains, south of the border town of Koh Kong in the countrys southwest.\r\n\r\n            The highlands here, home to dense rainforest, winding rivers, and waterfalls, offer plenty of opportunities for hiking and boat tours.          ', 'Image/1881440221cambodia-top-places-to-visit-koh-rong-conservation-corridor.jpg', 'https://www.mustvisitplace.com/places-to-visit-in-koh-kong-conservation-corridor-cambodia-asia/', '2023-11-14 03:11:59'),
(96, 'Angkor Wat', 2, '           Angkor Wat temple, located in northern province of Siem Reap in Cambodia, has defeated Pompeii in Italy to become the eighth Wonder of the World.\r\n\r\nThe unofficial title “Eighth Wonder of the World” is sometimes given to buildings, structures, projects, designs, or even people who are thought to be comparable to the seven Wonders of the World.                                     ', 'Image/1009919130angkorwat.webp', 'https://www.firstpost.com/world/angkor-wat-temple-in-cambodia-becomes-8th-wonder-of-the-world-defeats-italys-pompeii-13444952.html', '2023-12-02 04:07:42'),
(97, 'GiantIbis', 3, '        As Cambodia\'s leading responsible bus company, we offer services above and beyond our competitors, at reasonable prices. These include providing refreshments, breaks at comfortable service stations and reliable restaurants,wifi access and organising travel to and from accommodation, including tuktuk and taxi pickup at our stations.                                        ', 'Image/773373173Poster2.jpg', 'https://www.giantibis.com/', '2023-12-02 04:14:32'),
(11, 'The Royal Palace', 2, '    The highlight of Phnom Penh is the beautiful Royal Palace - the seat and residence of Cambodias royal family since the 1860s.\r\n            The spired-roof pavilions of the complex are an excellent example of classic Khmer architecture.                   \r\n                                             \r\n                                             \r\n                                             \r\n                                            ', 'Image/1689321521royal-palace.jpg', 'https://www.tourismcambodia.com/travelguides/provinces/phnom-penh/what-to-see/18_royal-palace.htm', '2023-11-14 03:11:03'),
(95, 'Angkor Thom', 2, '     An easy mistake made by many visitors to Cambodia, is that Angkor Thom is “another temple”. It’s not, it’s a whole city. “Angkor” means “city” and “Thom” means big – so the clue is in the name: Angkor Thom refers to what once was a great Khmer city and includes a whole host of temples and sites of historical interest.                                           ', 'Image/175368493angkorthorm.webp', 'https://www.siemreap.net/guides/angkor/angkor-thom/', '2023-12-02 04:06:30'),
(13, 'Cambodia National Museum', 2, '              The traditional Khmer building that houses the national collection was built in 1920.\r\n\r\n            Inside, the dazzling array of ancient Khmer artistry, with more than 1,800 objects on display, is a must visit for anyone with an interest in Cambodian history.              ', 'Image/985328857national-museum.jpg', 'https://www.tripadvisor.com/Attraction_Review-g293940-d324624-Reviews-National_Museum-Phnom_Penh.html', '2023-11-14 03:11:03'),
(17, 'Wat Phnom', 2, '           Phnom Penh is decidedly flat. The only rise in the landscape here is the 27-meter-high hillock that is home to the temple of Wat Phnom.\r\n\r\n            The first religious building on this spot is thought to have been constructed in the 14th century and has been rebuilt several times, with the current main temple sanctuary dating from 1926.                 ', 'Image/1727012763wat-phnom.jpg', 'https://www.tripadvisor.com/Attraction_Review-g293940-d469303-Reviews-Wat_Phnom-Phnom_Penh.html', '2023-11-14 03:11:37'),
(22, 'Golden Temple Hotel', 1, '         At only eight kilometres from Angkor Wat, 10 from the airport, and just one kilometre from downtown Siem Reap, the Golden Temple Hotel is conveniently located on busy 7 Makara Street. The Hotel with it\'s colourful décor blended with high quality furnishings and cultural artwork and design are a firm favourite of couples and young families alike. Like the other Golden Temple properties, the Hotel provides relaxing spa, pool, bar and good quality restaurant. The restaurant serves both Western and local gastronomic delights. All rooms are air-conditioned and offer flat-screen TVs with satellite channels and many modern comforts. Each room has en-suite shower room with quality fittings. Recognising the importance of guest service, the team constantly work to improve language skills, proactivity, cultural awareness and interpersonal skills.                   ', 'Image/1504029985hotel-pool-view.jpg', 'https://www.tripadvisor.com/Hotel_Review-g297390-d1909285-Reviews-Golden_Temple_Hotel-Siem_Reap_Siem_Reap_Province.html#/media/1909285/709741546:p/?albumid=101&type=0&category=101', '2023-11-14 09:49:29'),
(23, 'The Peninsula Phnom Penh', 1, '          Located in Phnom Penh, with a short distance from Embassies and Financial district area, The Peninsula Phnom Penh offers accommodations with complimentary Wi-Fi throughout, shared lounge Clubhouse and free private indoor parking on site. Boasting floor-to-ceiling windows overlooking skyscrapers and the Mekong and Tonle Sap Rivers, all rooms are equipped with a complete range of in-room facilities. Each unit is highly secured by a key card access system and the room temperature can be adjusted by guests individually. The flat-screen TV offers cable channels and Video on Demand for guests\' enjoyment. A living room and a fully-fitted kitchen are available in every room types. Extras include an electric kettle, coffee/tea facilities and free bottles of water. The private bathroom comes with either a shower or a bathtub and is equipped with premium organic and made in Cambodia amenities, including dental kits. Our rooftop Infinity Pool has one of the nicest views in Phnom Penh, an', 'Image/1063756221the-peninsula-hotel-and.jpg', 'https://www.tripadvisor.com/Hotel_Review-g293940-d24834646-Reviews-The_Peninsula_Phnom_Penh-Phnom_Penh.html', '2023-11-14 09:50:58'),
(24, 'Khmer Mansion Residence', 1, '            Khmer Mansion Residence is located in the center of Siem Reap, about 10min walking distance from the famous Pub Street. Rooms are designed and fitted with a private balcony and bathtub. Khmer Mansion Residence offers free use of airport shuttle services and the property also features an indoor pool and free high speed WiFi access is available throughout the property. The General Manager; Mr. NEY Vichet is willing to help Cambodian by providing good opportunities and professional training to fresh graduation generation and working hotel; they can earn money to support their                ', 'Image/1070735323khmer-mansion-residence.jpg', 'https://www.tripadvisor.com/Hotel_Review-g12591811-d13131460-Reviews-Khmer_Mansion_Residence-Svay_Dangkum_Siem_Reap_Siem_Reap_Province.html', '2023-11-14 09:51:41'),
(25, 'NagaWorld', 1, '               With the latest expansion, NagaWorld now consists of 1,658 suites and deluxe rooms, over 20 food and beverage outlets and clubs, 2 all-suite luxurious spas, the state-of-the-art 2,000-seater NABA Theatre at Naga2, Cambodia’s first underground shopping gallery operated by China Duty Free Group, extensive entertainment services and premium meeting spaces.             ', 'Image/2049869816nagaworld-hotel-entertainment.jpg', 'https://www.tripadvisor.com/Hotel_Review-g293940-d1214395-Reviews-NagaWorld-Phnom_Penh.html', '2023-11-14 09:52:25'),
(26, 'Central Suite Residence', 1, '          Central Suite Residence boasts 32 luxurious rooms that are perfectly located on Sok San Road in the heart of Siem Reap. While the downtown district is literally but a few minutes walk away, the hotel still offers an oasis of calm, peace, and tranquility. Within a 20 minute drive to the world heritage site of Angkor Archaeological Park and with a myriad of bars, restaurants and shops nearby, you are never far from all Siem Reap has to offer.                  ', 'Image/346336920central-suite-residence.jpg', 'https://www.tripadvisor.com/Hotel_Review-g297390-d9805808-Reviews-Central_Suite_Residence-Siem_Reap_Siem_Reap_Province.html', '2023-11-14 09:53:10'),
(27, 'Jaya House River Park', 1, '               Jaya House River Park is peacefully located alongside the Siem Reap River, surrounded by fully grown trees. A small boutique hotel with only 36 rooms, two swimming pools, a spa, and an all-day-dining restaurant. The hotel is located about a 6-minute tuk-tuk journey from town in the direction of the magnificent temples of Angkor Wat.             ', 'Image/1149727889jaya-house-riverpark.jpg', 'https://www.tripadvisor.com/Hotel_Review-g297390-d11966106-Reviews-Jaya_House_River_Park-Siem_Reap_Siem_Reap_Province.html', '2023-11-14 09:54:11'),
(31, 'Cambodia Intro', 4, '         Start in Phnom Penh and end in Siem Reap! With the Active Adventure tour Cambodia Intro, you have a 10 days tour package taking you through Phnom Penh, Cambodia and 4 other destinations in Cambodia. Cambodia Intro includes accommodation in a hotel as well as an expert guide, meals, transport and more.                   ', 'Image/2121059578125992_5e3cd4eed7ff7.jpg', 'https://www.tourradar.com/t/125992#p=1_', '2023-11-14 10:16:38'),
(28, 'Palace Gate Hotel & Resort', 1, '     Only 11.5km from Phnom Penh International Airport, located adjacent to the splendours of the Royal Palace and within a short walking distance of the bustling Riverside area of Sisowath Quay. Palace Gate Hotel offers you luxurious accommodation in perhaps the city’s most convenient location. How often do you encounter a hotel where your neighbors are Royalty?                       ', 'Image/1257688501palace-gate-hotel-resort.jpg', 'https://www.tripadvisor.com/Hotel_Review-g293940-d12828966-Reviews-Palace_Gate_Hotel_Resort-Phnom_Penh.html', '2023-11-14 09:55:11'),
(29, 'Golden Temple Retreat', 1, '        For guests looking for relaxation and serenity, the Golden Temple Retreat, one of the five Golden Temple Group properties, offers just that. Located near old market area, just only 3 minutes drives to downtown Siem Reap and about 10 kilometres from Angkor and 7km from the airport. Like the other Golden Temple properties,                    ', 'Image/124063095pool-view.jpg', 'https://www.tripadvisor.com/Hotel_Review-g297390-d11947935-Reviews-Golden_Temple_Retreat-Siem_Reap_Siem_Reap_Province.html', '2023-11-14 09:56:07'),
(30, 'Viroth\'s Hotel', 1, '   Located in the center of Siem Reap, in the vibrant Wat Bo area, the hotel boasts 50\'s-inspired design, complemented by large green areas and vertical gardens. Viroth\'s Hotel includes 35 guestrooms, a 20-meter pool, spa, gym, air conditioned dining room / open air restaurant, bar, and 24 hour reception service to satisfy all your needs.                         ', 'Image/270205236viroth-s-hotel.jpg', 'https://www.tripadvisor.com/Hotel_Review-g297390-d9514361-Reviews-Viroth_s_Hotel-Siem_Reap_Siem_Reap_Province.html', '2023-11-14 09:56:52'),
(34, 'Classic Cambodia - 6 days', 4, '      Start in Phnom Penh and end in Siem Reap! With the In-depth Cultural tour Classic Cambodia - 6 days, you have a 6 days tour package taking you through Phnom Penh, Cambodia and 2 other destinations in Cambodia. Classic Cambodia - 6 days includes accommodation in a hotel as well as flights, an expert guide, meals, transport and more.                      ', 'Image/116607678693813_bf0d24.jpg', 'https://www.tourradar.com/t/93813#p=3_', '2023-11-14 10:19:03'),
(33, 'Classic Cambodia', 4, '          Start in Phnom Penh and end in Siem Reap! With the In-depth Cultural tour Classic Cambodia, you have a 6 days tour package taking you through Phnom Penh, Cambodia and 2 other destinations in Cambodia. Classic Cambodia includes accommodation in a hotel as well as an expert guide, meals, transport and more.                  ', 'Image/1527824431761_7b531f.jpg', 'https://www.tourradar.com/t/1761#p=2_', '2023-11-14 10:17:35'),
(35, 'Cambodia Highlights 5-Day Tour', 4, '       Start in Phnom Penh and end in Siem Reap! With the In-depth Cultural tour Cambodia Highlights 5-Day Tour, you have a 5 days tour package taking you through Phnom Penh, Cambodia and 2 other destinations in Cambodia. Cambodia Highlights 5-Day Tour includes accommodation in a hotel as well as flights, an expert guide, meals, transport and more.\r\n                     ', 'Image/147111472395692_d56d7e7a.jpg', 'https://www.tourradar.com/t/95692#p=4_', '2023-11-14 10:19:46'),
(36, 'Best of Cambodia: Phnom Penh to Siem Reap 5-Day Tour', 4, '               Start in Phnom Penh and end in Siem Reap! With the In-depth Cultural tour Best of Cambodia: Phnom Penh to Siem Reap 5-Day Tour, you have a 5 days tour package taking you through Phnom Penh, Cambodia and 2 other destinations in Cambodia. Best of Cambodia: Phnom Penh to Siem Reap 5-Day Tour includes accommodation in a hotel as well as an expert guide, meals, transport and more.             ', 'Image/46780419576142_58801336.jpg', 'https://www.tourradar.com/t/76142#p=6_', '2023-11-14 10:20:30'),
(37, 'Best of Cambodia (including Kampong Thom)', 4, '      Start and end in Phnom Penh! With the Explorer tour Best of Cambodia (including Kampong Thom), you have a 14 days tour package taking you through Phnom Penh, Cambodia and 6 other destinations in Cambodia. Best of Cambodia (including Kampong Thom) includes accommodation in a hotel as well as an expert guide, meals, transport and more.                      ', 'Image/286778287256873_65030c834c25c.jpg', 'https://www.tourradar.com/t/256873#p=7_', '2023-11-14 10:21:09'),
(38, 'Customized Cambodia Vacation with Private Guide and Daily Departure', 4, '          Start in Phnom Penh and end in Siem Reap! With the Explorer tour Customized Cambodia Vacation with Private Guide and Daily Departure, you have a 7 days tour package taking you through Phnom Penh, Cambodia and 2 other destinations in Cambodia. Customized Cambodia Vacation with Private Guide and Daily Departure includes accommodation in a hotel as well as flights, an expert guide, meals and more.\r\n                  ', 'Image/810806607208239_5fb4c97176953.jpg', 'https://www.tourradar.com/t/208239#p=10_', '2023-11-14 10:21:49'),
(39, 'Angkor Bike, Hike, Kayak', 4, '             Start and end in Siem Reap! With the Bicycle tour Angkor Bike, Hike, Kayak, you have a 6 days tour package taking you through Siem Reap, Cambodia and 4 other destinations in Cambodia. Angkor Bike, Hike, Kayak includes accommodation in a hotel as well as an expert guide, meals, transport and more.               ', 'Image/165043198179210_6459efd5cfa0f.jpg', 'https://www.tourradar.com/t/179210#p=14_', '2023-11-14 10:22:51'),
(40, 'Cambodia Expedition: Bike, Hike, Kayak', 4, '         Start in Phnom Penh and end in Siem Reap! With the Bicycle tour Cambodia Expedition: Bike, Hike, Kayak, you have a 10 days tour package taking you through Phnom Penh, Cambodia and 6 other destinations in Cambodia. Cambodia Expedition: Bike, Hike, Kayak includes accommodation in a hotel as well as an expert guide, meals, transport and more.                   ', 'Image/969201336110519_5ff2bcf53917a.jpg', 'https://www.tourradar.com/t/110519#p=4_', '2023-11-14 10:23:53'),
(98, 'Larryta', 3, '     Larryta was established in 2004, to supply quality vehicles and skilled drivers to local and international clients. As our reputation grew, so too did our client base and the scale of operations: Today, we employ over 38 staff at our Phnom Penh office and maintenance center. Larryta is now a market leader in international transportation in Cambodia, supplying a wide range of vehicles to meet the diverse needs of or customers. We only use professionally-trained reliable staff to supply the best executive mini-buses, deluxe air coaches and cars to ensure customer satisfaction. We provide a complete solutions (vehicle, driver, insurance) and a go-anywhere flexible to all areas of the Kingdom of Cambodia and neighboring countries: We offer numerous holiday and tours options, point-to-point custom travel arrangements, escorted group transport, business and conference delegate logistics, and much more.                                           ', 'Image/1442735036Larryta.jpg', 'https://larryta.com/', '2023-12-02 04:15:47'),
(99, 'VirakBuntham', 3, '       Founded in 2004, Virak Buntham Express Tour & Travel (VET Travel) is the fastest-growing passenger transport bus company in Cambodia. We offer a fleet of luxury vehicles - including comfortable sleeping buses, hotel buses, and 2015 VIP Toyota Hiace Series VIP minivans - to the region\'s top destinations.\r\nOur robust daily schedule covers major destinations in Cambodia and also cross border journeys to Vietnam and Thailand. From the very beginning, VET Travel has had a great reputation among international travelers as a company that has high standards levels and rigid maintenance schedules.                                            \r\n                                             \r\n                                            ', 'Image/2046770605Schedule.jpg', 'https://www.vireakbuntham.com/', '2023-12-02 04:16:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
