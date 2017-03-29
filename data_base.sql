-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 08:01 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `spacedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `abbrev` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `name`, `abbrev`) VALUES
(1, 'Belarus Space Agency', 'BSA'),
(2, 'Aeronautics and Space Research and Diffusion Center', 'CIDA-E'),
(3, 'Mexican Space Agency', 'AEM'),
(4, 'Algerian Space Agency', 'ASAL'),
(5, 'Asia-Pacific Regional Space Agency Forum', 'APRSAF'),
(6, 'Asia-Pacific Space Cooperation Organization', 'APSCO'),
(7, 'Austrian Space Agency', 'ALR'),
(8, 'Azerbaijan National Aerospace Agency', 'AMAKA'),
(9, 'Belgian Institute for Space Aeronomy', 'BIRA'),
(10, 'Bolivarian Agency for Space Activities', 'ABAE'),
(11, 'Brazilian Space Agency', 'AEB'),
(12, 'UK Space Agency', 'UKSA'),
(13, 'Bolivian Space Agency', 'ABAE'),
(14, 'Bulgarian Space Agency', 'SRI-BAS'),
(15, 'Canadian Space Agency', 'CSA'),
(16, 'China National Space Administration', 'CNSA'),
(17, 'Colombian Space Commission', 'CCE'),
(18, 'Centre for Remote Imaging, Sensing and Processing', 'CRISP'),
(19, 'Commonwealth Scientific and Industrial Research Organisation', 'CSIRO'),
(20, 'Consultative Committee for Space Data Systems', 'CCSDS'),
(21, 'Committee on Space Research', 'COSPAR'),
(22, 'Croatian Space Agency', 'HSA'),
(23, 'Danish National Space Center', 'DRC'),
(24, 'Technical University of Denmark - National Space Institute', 'DTU'),
(25, 'European Space Agency', 'ESA'),
(26, 'Geo-Informatics and Space Technology Development Agency', 'GISTDA'),
(27, 'German Aerospace Center', 'DLR'),
(28, 'Hungarian Space Office', 'HSO'),
(29, 'Russian Aerospace Defence Forces', 'VKO'),
(70, 'United States Air Force', 'USAF'),
(72, 'Russian Federal Space Agency (ROSCOSMOS)', 'FKA'),
(76, 'National Aeronautics and Space Administration', 'NASA'),
(162, 'Japan Aerospace Exploration Agency', 'JAXA'),
(160, 'Iranian Space Agency', 'ISA'),
(161, 'Italian Space Agency', 'ASI'),
(172, 'US Army', 'USA'),
(171, 'United Launch Alliance', 'ULA'),
(157, 'Indian Space Research Organization', 'ISRO'),
(153, 'Arianespace', 'ASA'),
(144, 'Rocket Lab Ltd', 'Rocket Lab'),
(179, 'SpaceX', 'SpX'),
(178, 'National Center of Space Research', 'CNES'),
(173, 'International Launch Services', 'ILS'),
(143, 'Orbital Sciences Corporation', 'OSC'),
(186, 'Soviet space program', 'CCCP'),
(140, 'China Academy of Space Technology', 'CASC'),
(131, 'Royal Australian Air Force', 'RAAF'),
(189, 'Eurockot Launch Services', 'ELS'),
(135, 'Peoples Liberation Army Air Force', 'PLAAF');

-- --------------------------------------------------------

--
-- Table structure for table `launches`
--

CREATE TABLE `launches` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `time_start` varchar(100) NOT NULL,
  `time_end` varchar(100) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_agency` int(11) NOT NULL,
  `id_pad` int(11) NOT NULL,
  `id_rocket` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `launches`
--

INSERT INTO `launches` (`id`, `name`, `time_start`, `time_end`, `id_status`, `id_agency`, `id_pad`, `id_rocket`) VALUES
(1, 'Vostok-K | Vostok 1', '19610412T060700Z', '19610412T060700Z', 3, 29, 29, 31),
(2, 'Vostok-K | Vostok 2', '19610806T060000Z', '19610806T060000Z', 3, 29, 29, 31),
(3, 'Atlas LV-3B | Mercury-Atlas 6', '19620220T144739Z', '19620220T144739Z', 3, 76, 70, 33),
(4, 'Atlas LV-3B | Mercury-Atlas 7', '19620524T124516Z', '19620524T124516Z', 3, 76, 70, 33),
(5, 'Vostok-K | Vostok 3', '19620811T082400Z', '19620811T082400Z', 3, 29, 29, 31),
(6, 'Vostok-K | Vostok 4', '19620812T080233Z', '19620812T080233Z', 3, 29, 29, 31),
(7, 'Atlas LV-3B | Mercury-Atlas 8', '19621003T121512Z', '19621003T121512Z', 3, 76, 70, 33),
(8, 'Atlas LV-3B | Mercury-Atlas 9', '19630515T130413Z', '19630515T130413Z', 3, 76, 70, 33),
(9, 'Vostok-K | Vostok 5', '19630614T115858Z', '19630614T115858Z', 3, 29, 29, 31),
(10, 'Vostok-K | Vostok 6', '19630616T092952Z', '19630616T092952Z', 3, 163, 29, 31);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `abbrev` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `abbrev`) VALUES
(1, 'Jiuquan, People s Republic of China', 'CHN'),
(2, 'Taiyuan, People s Republic of China', 'CHN'),
(3, 'Kourou, French Guiana', 'GUF'),
(4, 'Hammaguir, Algeria', 'DZA'),
(5, 'Sriharikota, Republic of India', 'IND'),
(6, 'Islamic Republic of Iran', 'IRN'),
(7, 'Kenya', 'KEN'),
(8, 'Kagoshima, Japan', 'JPN'),
(9, 'Tanegashima, Japan', 'JPN'),
(10, 'Baikonur Cosmodrome, Republic of Kazakhstan', 'KAZ'),
(11, 'Plesetsk Cosmodrome, Russian Federation', 'RUS'),
(12, 'Kapustin Yar, Russian Federation', 'RUS'),
(13, 'Svobodney Cosmodrome, Russian Federation', 'RUS'),
(14, 'Dombarovskiy, Russian Federation', 'RUS'),
(15, 'Sea Launch', 'UNK'),
(16, 'Cape Canaveral, FL, USA', 'USA'),
(17, 'Kennedy Space Center, FL, USA', 'USA'),
(18, 'Vandenberg AFB, CA, USA', 'USA'),
(19, 'Wallops Island, Virginia, USA', 'USA'),
(20, 'Woomera, Australia', 'AUS'),
(21, 'Unkown Location', 'UNK'),
(22, 'Kiatorete Spit, New Zealand', 'NZL'),
(23, 'Xichang Satellite Launch Center, People s Republic of China', 'CHN'),
(24, 'Negev, State of Israel', 'ISR'),
(25, 'Palmachim Airbase, State of Israel', 'ISR'),
(26, 'Kauai, USA', 'USA'),
(27, 'Naro Space Center, South Korea', 'KOR'),
(28, 'Kodiak Launch Complex, Alaska, USA', 'USA'),
(29, 'Wenchang Satellite Launch Center, People s Republic of China', 'CHN');

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` varchar(500) NOT NULL,
  `id_agency` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `name`, `description`, `id_agency`) VALUES
(1, 'Nuclear Spectroscopic Telescope Array (NuSTAR)', 'Designed to image high-energy X-ray radiation, the Nuclear Spectroscopic Telescope Array (NuSTAR) is tasked with surveying regions surrounding the center of own Milky Way Galaxy and performing deep observations of the extragalactic sky, studying black holes and supernovas.', 76),
(2, 'WGS-4 (USA-233)', 'The United Launch Alliance Delta 4 rocket launched the fourth Wideband Global SATCOM spacecraft, formerly known as the Wideband Gapfiller Satellite. Built by Boeing, this geostationary communications spacecraft serves U.S. military forces.', 171),
(3, 'SES-4', 'An International Launch Services Proton rocket with a Breeze M upper stage will deploy the SES 4 satellite to provide telecommunications services over the Americas, Africa, Europe and the Middle East. ', 173),
(4, 'Dragon C2', 'SpaceX COTS Demo Flight 2', 0),
(5, 'SpX CRS-1', 'This was the third flight for the uncrewed Dragon cargo spacecaft and the first SpaceX mission under their Commercial Resupply Services contract with NASA. Dragon delivered various cargo to the staion, and returned after being berthed to the station for 17 days. The spacecraft landed in the Pacific Ocean and was recovered by SpaceX.', 76),
(6, 'TDRS-K', 'TDRS-11, known before launch as TDRS-K, is an American communications satellite which is operated by NASA as part of the Tracking and Data Relay Satellite System, which provides a multitude of communications services to a wide variety of missions.', 76),
(7, '6 x Globalstar-2', 'The Globalstar second-generation constellation consists of 24 Low Earth Orbiting satellites for satellite phone and data communications.', 0),
(8, 'SARAL', 'SARAL or Satellite with ARgos and ALtiKa is a cooperative altimetry technology mission of Indian Space Research Organisation (ISRO) and CNES (Space Agency of France). SARAL is tasked to perform altimetric measurements designed to study ocean circulation and sea surface elevation.', 157),
(9, 'Orbital Sciences Antares Rocket', 'Simulated Cynus Spacecraft Launch', 0),
(10, 'Landsat Data Continuity Mission', 'US Geological Survey', 0),
(11, 'Eutelsat 115 West B & ABS-3A', 'These are both geostationary communication satellites, with Eutelsat 155 West B providing coverage in the Americas, and ABS-3A providing coverage in the Americas, the Middle East, and Africa.', 179),
(12, 'Anik-G1', 'Anik-G1 is a communications satellite, operated by Telesat Canada to provide direct-to-home TV services in Canada.', 0),
(13, 'Resurs-P No.1', 'Resurs-P No.1 is a Russian commercial earth observation satellite capable of acquiring high-resolution imagery (resolution up to 1.0 m).', 72),
(14, 'CBERS-3', 'This remote sensing satellite was intended for China-Brazil program on Environment, Agriculture, and Urban Planning.', 16),
(15, 'SBIRS GEO-2 (USA-241) (SBIRS GEO Flight 2)', 'This geostationary satellite is tasked with providing capabilities for early missile warning and missile defense.', 70),
(16, 'Vostok 1', 'The first crewed space launch & the first orbital launch. It carried the Soviet cosmonaut Yuri Gagarin who completed 1 orbit before safely re-entering the atmosphere, he ejected from his capsule at an altitude of 7 km in order to parachute safely to the ground. The mission lasted 108 minutes.', 5),
(17, 'GSAT-14', 'GSAT-14 is an Indian communications satellite, which replaced the GSAT-3 satellite. With a mass of 1982 kg, GSAT-14 is expected to operate in orbit for 12 years.', 157),
(18, 'Swarm A, B, C', 'European Space Agency s mission Swarm consists of 3 satellites tasked with studying Earth s magnetic field.', 189),
(19, 'Proba-V and VNREDSat 1A', 'Proba-V maps land cover and monitors vegetation growth across the globe. Launched along with Proba-V are the first Earth observation satellite for Vietnam, VNREDSat 1A, and the first Estonian satellite ESTCube-1. ESTCube-1 is also the first satellite in the world to attempt the use of an electric solar wind sail.', 25),
(20, 'Arianespace ATV - ISS Cargo Supply Vehicle', 'ESA Spacecraft named Albert Einstein', 0),
(21, 'Progress M-19M (51P)', 'The Progress resupply vehicle is an automated, unpiloted version of the Soyuz spacecraft that is used to bring supplies and fuel to the International Space Station.', 72),
(22, 'Resourcesat-2A', 'Resourcesat-2A is a remote sensing satellite, third in the program of the same name. It is intended to provide data continuity for users as a follow on mission to Resourcesat-2.', 157),
(23, 'CASSIOPE', 'CASSIOPE (Cascade SmallSat and Ionospheric Polar Explorer) is a small satellite mission for Canadian Space Agency to feature the first in a new generation of multi-purpose satellite platforms. It is tasked with a dual mission on scientific research and telecommunications.', 15),
(24, 'Interface Region Imaging Spectrograph (IRIS)', 'The Interface Region Imaging Spectrograph (IRIS) is a NASA Small Explorer Mission to observe how solar material moves, gathers energy, and heats up as it travels through a little-understood region in the sun s lower atmosphere.', 76),
(25, 'O3b FM1, FM2, FM4, FM5', 'The O3b Satellite Constellation is a satellite constellation designed for telecommunications and data backhaul from remote locations.', 153),
(26, 'WGS-6 (USA-244)', 'The United Launch Alliance Delta 4 rocket will launch the sixth Wideband Global SATCOM spacecraft, formerly known as the Wideband Gapfiller Satellite. Built by Boeing, this geostationary communications spacecraft will serve U.S. military forces.', 124),
(27, 'ORS 3 and STPSat 3', 'ORS 3 tracks rockets from orbit and can terminate, STPSat3 will host military experiments', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pads`
--

CREATE TABLE `pads` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `latitude` char(22) NOT NULL,
  `longitude` char(22) NOT NULL,
  `id_agency` int(11) NOT NULL,
  `id_location` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pads`
--

INSERT INTO `pads` (`id`, `name`, `latitude`, `longitude`, `id_agency`, `id_location`) VALUES
(1, 'Launch Area 5B, Woomera', '-30.971993000000000', '136.475005000000000', 131, 20),
(2, 'Launch Area 6A, Woomera', '-31.074000000000000', '136.439400000000000', 131, 20),
(3, 'Launch Area 6B, Woomera', '-31.079200000000000', '136.445000000000000', 131, 20),
(4, 'Launch Area 8, Woomera', '-31.034000000000000', '136.463000000000000', 131, 20),
(5, 'Launch Area 2A, Jiuquan', '41.306000000000000', '100.314000000000000', 135, 1),
(6, 'Launch Area 2B, Jiuquan', '41.309000000000000', '100.317000000000000', 135, 1),
(7, 'Launch Area 4 (SLS-2 / 603), Jiuquan', '40.960556000000000', '100.298333000000000', 16, 1),
(8, 'Launch Area 4 (SLS-1 / 921), Jiuquan', '40.958093000000000', '100.291188000000000', 16, 1),
(9, 'Edwards Air Force Base', '34.905556000000000', '-117.883611000000000', 143, 39),
(10, 'Rocket Lab Launch Site', '-39.262833000000000', '177.864469000000000', 144, 40),
(11, 'Launch Area 3(Launch Area 2 Rebuilt 2006), Jiuquan', '0.000000000000000', '0.000000000000000', 135, 1),
(12, 'Launch Area 4?, Jiuquan', '28.249500000000000', '102.023200000000000', 135, 1),
(13, 'Launch Area 1, Taiyuan', '38.849000000000000', '111.608000000000000', 135, 2),
(14, 'Launch Area 2, Taiyuan', '38.863428000000000', '111.589004000000000', 135, 2),
(15, 'Ariane Launch Area 3, Kourou', '5.239000000000000', '-52.768000000000000', 153, 3),
(16, 'Yoshinobu Launch Complex, Tanegashima, Japan', '30.399000000000000', '130.970000000000000', 162, 9),
(17, 'Ariane Launch Area, Kourou', '5.207642000000000', '-52.772384000000000', 153, 3),
(18, 'Ariane Launch Area 1, Kourou', '5.236000000000000', '-52.775000000000000', 153, 3),
(19, 'Brigitte Pad, Hammaguir', '30.871000000000000', '-3.008000000000000', 0, 4),
(20, 'PSLV Pad (PSLV, GSLV), Sriharikota', '13.733000000000000', '80.235000000000000', 157, 5),
(21, 'SLP, Sriharikota', '13.720000000000000', '80.230000000000000', 157, 5),
(22, 'Safir Pad, Iran', '35.234000000000000', '53.921000000000000', 160, 6),
(23, 'Unknown New Larger Pad, Iran', '35.238000000000000', '53.951000000000000', 160, 6),
(24, 'San Marco Platform, Kenya', '', '', 161, 7),
(25, 'M5 Pad, Kagoshima', '31.251000000000000', '131.082000000000000', 162, 8),
(26, 'Mu Pad, Kagoshima', '31.252000000000000', '131.079000000000000', 162, 8),
(27, 'Osaki Y LP1, Tanegashima, Japan', '30.401000000000000', '130.977000000000000', 162, 9),
(28, 'Osaki Y LP2, Tanegashima, Japan', '30.401000000000000', '130.975000000000000', 162, 9),
(29, '1/5, Baikonur Cosmodrome, Kazakhstan', '45.920000000000000', '63.342000000000000', 29, 10),
(30, '31/6, Baikonur Cosmodrome, Kazakhstan', '45.996034000000000', '63.564003000000000', 29, 10);

-- --------------------------------------------------------

--
-- Table structure for table `rockets`
--

CREATE TABLE `rockets` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `image_url` varchar(100) NOT NULL DEFAULT '""'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rockets`
--

INSERT INTO `rockets` (`id`, `name`, `image_url`) VALUES
(1, 'Falcon 9 v1.1', 'https://s3.amazonaws.com/launchlibrary/RocketImages/Falcon+9+v1.1_800.jpg'),
(2, 'New Shepard', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(3, 'Atlas V 541', 'https://s3.amazonaws.com/launchlibrary/RocketImages/Atlas+V+541_1920.jpg'),
(4, 'Soyuz-2.1b', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(5, 'Proton-M Briz-M', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(6, 'Delta IV', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(7, 'Pegasus XL', 'https://s3.amazonaws.com/launchlibrary/RocketImages/Pegasus+XL_1280.jpg'),
(8, 'Ariane 5 ES', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(9, 'Atlas V 531', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(10, 'H-IIB', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(11, 'Zenit 3SL', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(12, 'PSLV ', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(13, 'Rokot', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(14, 'Long March 4B', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(15, 'GSLV', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(16, 'Vega', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(17, 'Minotaur I', 'https://s3.amazonaws.com/launchlibrary/RocketImages/Minotaur+I_1920.jpg'),
(18, 'Minotaur V', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(19, 'Delta IV Heavy', 'https://s3.amazonaws.com/launchlibrary/RocketImages/Delta+IV+Heavy_1920.jpg'),
(20, 'Long March 3B', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(21, 'H-IIA', 'https://s3.amazonaws.com/launchlibrary/RocketImages/H-IIA_2560.jpg'),
(22, 'Naro-1', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(23, 'Long March 2F', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(24, 'Atlas V 401', 'https://s3.amazonaws.com/launchlibrary/RocketImages/Atlas+V+401_2560.jpg'),
(25, 'Ariane 5 ECA', 'https://s3.amazonaws.com/launchlibrary/RocketImages/Ariane+5+ECA_1920.jpg'),
(26, 'Delta II', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(27, 'Atlas V 501', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(28, 'Soyuz-U', 'https://s3.amazonaws.com/launchlibrary/RocketImages/Soyuz-U_1280.jpg'),
(29, 'Soyuz-FG', 'https://s3.amazonaws.com/launchlibrary/RocketImages/Soyuz-FG_2560.jpg'),
(30, 'Atlas V 551', 'https://s3.amazonaws.com/launchlibrary/RocketImages/Atlas+V+551_1920.jpg'),
(31, 'Vostok-K', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png'),
(33, 'Atlas LV-3B', 'https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `description`) VALUES
(1, 'GREEN', 'Launch is GO'),
(2, 'RED', 'Launch is NO-GO'),
(3, 'SUCCESS', 'Launch was a success'),
(4, 'FAIL', 'Launch failed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `launches`
--
ALTER TABLE `launches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pads`
--
ALTER TABLE `pads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rockets`
--
ALTER TABLE `rockets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
--
-- AUTO_INCREMENT for table `launches`
--
ALTER TABLE `launches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `pads`
--
ALTER TABLE `pads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `rockets`
--
ALTER TABLE `rockets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;