-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 03:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kids`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `bill_details` varchar(255) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `total_cart` decimal(10,0) NOT NULL,
  `coupon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Creative Toys'),
(2, 'Dolls'),
(3, 'Educational Toys'),
(4, 'Electronic Toys');

-- --------------------------------------------------------

--
-- Table structure for table `commend`
--

CREATE TABLE `commend` (
  `comm_id` int(11) NOT NULL,
  `comm_text` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` int(255) NOT NULL,
  `img` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `description`, `price`, `status`, `category_id`, `img`) VALUES
(2, 'Rainbow Coloured Beads', 'Grimm’s coloured wooden beads. Wooden beads are one of the most basic play materials for children. Sorting and threading develops hand-eye coordination and fine motor skills and is just simple fun. This bag of beads contains 480 12mm wooden beads in 12 ra', '15.50 $', 0, 1, ''),
(3, 'Building Set Houses', 'This Grimm’s wooden house set provides cute little buildings for the creation of townscapes and villages with barns and churches. It can also be used in conjunction with every wooden rail and road set. Because of the simple shape of each piece it is easy ', '18.20 $', 0, 1, ''),
(4, 'Marbling Paint Art', 'Unleash & spark your creativity: Instead of painting on paper or canvas, try painting on... water! Our special painting process lets you create dazzling artwork in a completely new way.', '10.00 $', 0, 1, ''),
(5, 'Flower Garden Preschool Toys', 'PLAY AND PRETEND - Create your own pretend play flower garden in an ultimate sensory play experience! Engage the senses with a unique play space bin filled with easy to mold sensory sand in 2 colors, faux flowers and critters, shovel, tongs and more!', '12.00 $', 1, 1, ''),
(6, 'Brain Flakes 500 Piece', 'The original Brain Flakes ; Includes over 500 interconnecting discs and a durable plastic jar for easy storage ; Every set comes with an idea booklet with instructions to build a Brain Flakes ball ; Discs easily click together for ages 5+ with some childr', '18.00 $', 1, 1, ''),
(7, 'Think Fun Gravity Maze Marble Run Brain Game', 'Trusted by Families Worldwide - With over 50 million sold, ThinkFun is the world\'s leading manufacturer of brain games and mind challenging puzzles', '29.99 $', 1, 1, ''),
(8, 'Blippi My First Science Kit: Kitchen Science Lab', 'Join Blippi Science: Execute 4 different kitchen science experiments: milk movement patterns, gooey oobleck, a lava lamp and real ice cream', '17.99 $', 0, 1, ''),
(9, 'Bu-buildup BBU.01.002 Flower Building Toys', 'Great for kids to play - The 98 PCS flower toys are about real flower size, color of each piece is bright and saturate, edge of each part is thick and smooth. Pieces are easy to fit together and easy to take apart but nicely combined.', '22.99 $', 0, 1, ''),
(10, 'DIY 3D Puzzle Series, Educational Toy 3D', ' Set contains 6 types of aircraft & helicopter puzzles select high quality natural 3mm boards, environmentally friendly, safe and non-toxic', '28.98 $', 1, 1, ''),
(11, 'Makeblock mBot Ultimate 10-in-1 Coding Robot Kit\r\n', 'Perfect choice to begin or expand your robotic adventures - Ultimate has more than 550 mechanical parts and electronic modules which can be used in multiple configurations to build your robots.\r\n', '99.9 $', 1, 4, ''),
(12, 'Coplus 5 in 1 STEM Robot Building Kit\r\n', '5-in-1 RC Building Kit STEM Robot building toy can be built into 5 models: Robot /Racing Tank/Tracked Cars.This toys have a flexible rotating head & arm,interesting and novel transforming.It allows kids explore more imaginations and creativity and exercis', '49.99\r\n', 1, 4, ''),
(13, 'Cool City Police Toy for Kids', 'THRILLING STORYLINE: Two robbers were spotted by the police when they were robbing the self-service ATM. Then robbers drove fleeing on a motorbike, the police drove a police car and a prison car chasing the robbers on the highway, they launched a series o', '21.99 $', 1, 4, ''),
(14, 'Ingenious Machines DIY RC Construction Vehicle Building Kit', '240 PIECES: This Construction Crew Vehicle Building Kit includes a massive 240 pieces that can be used to build 4 different construction vehicles. These include a crane, Forklift Truck, Bulldozer and Dump Truck. One of the best toys for boys aged 6, 7, 8,', '37.95 $', 0, 4, ''),
(15, '884 PCS Army Military City Police Station Building Kit\r\n', 'Realistic Detail for Role-playing Fun, Endless Imagination & Creativity, Clear & Easy To Follow Instructions, pecial Gift Ideas.\r\n', '29.99 $', 1, 4, ''),
(16, 'Robot spinner\r\n', 'BUILD WORKING GIZMOS AND GADGETS with the Action Circuitry Electronic Experiment Mini Set from Discovery #MINDBLOWN! All you need is this kit and 2 AA batteries (not included) to experience pure electric fun.', '16.50 $', 1, 4, ''),
(17, 'Snap Circuits Snaptricity, Electronics Exploration Kit.\r\n', 'With snaptricity, young engineers can build over 75 projects, These building sets are a great introduction in how electricity and magnets work.\r\n', '30.99 $', 1, 4, ''),
(18, 'VANLINNY Smart Robot Arm Kit,2-in 1 Science Kits.\r\n', 'High-Tech & 2-in-1: The combination of smart robotic cars and robotic arms, to achieve the design concept of learning in the game, Multiple Functions: This science kits for kids age 8-12 can move at multiple angles while the robotic arm can rise and fall ', '89.99 $', 0, 4, ''),
(19, 'ROKR 3D Wooden Puzzles Music Box Model Kits DIY Creative Craft Toys \r\n', 'This 3D wooden Robotic puzzle music box with bendable arms and legs for a variety of poses.', '31.99 $', 0, 4, ''),
(20, 'Microscope for Kids LINKMICRO Science Kit', 'LINKMICRO Kids Beginner Microscope embraces 2-inch LCD screen and built-in bracket that flips out and can rotates 90-180degrees, full of science and technology sense, your kids\' first cool microscope toy!, Brand new appearance, weighs only 134g, 100% port', '39.98 $', 1, 4, ''),
(21, 'Djeco - Pinstou Wooden Puzzle', 'An adorable and sweet skill-building game for pre-schoolers. Use the wooden chopsticks to pick up the tokens and place them in the right sequence. A set of cards help guide the little ones with how many of each token you need and in what order.\r\n', '50.50 $', 1, 3, ''),
(22, 'Book - Dreaming of Australia A-Z', 'A delightful Australian alphabet that travels the country highlighting the expected and unexpected.', '20.00 $', 1, 3, ''),
(23, 'Chameleon Reader Set (PRE-ORDER)', 'Chameleon Reader - the audio reading system for children to \"read\" independently.\r\nYour audio plays from the Chameleon Reader when it touches the chameleon stickers in your books. Compatible with all your books!', '19.00 $', 1, 3, ''),
(24, 'Tender Leaf Counting Carrots Wooden Stacker\r\n', 'How many carrots can the bunny eat? This carrot stacker with its sweet bunny has the added benefits of introducing numbers, colours, sorting and stacking.\r\nSuitable for ages: 18+ Months', '40.00 $', 1, 3, ''),
(25, 'Learn & Grow Magnetic Tiles - 64 piece set', 'Featuring our new and exclusively designed large square. We had added magnets through the large square to expand building capabilities.  ', '60.00 $', 1, 3, ''),
(26, 'Learn & Grow Magnetic Ball Run - Expansion Pack', 'Turn your magnetic tiles into Ball Runs!!\r\nThis fantastic expansion pack will take your magnetic tiles and create a whole new range of play and exploration opportunities. ', '60.00$', 1, 3, ''),
(27, 'Learning Resources - Super Sorting Pie', 'Learning Styles: Visual, TactileSkill Development: Fine Motor skills, Eye-hand coordination, Problem solving, Sorting, Matching, Patterning, Early math skills (Counting, Addition & Subtraction), Vocabulary building.', '25.00 $', 1, 3, ''),
(28, 'Learn & Grow - Metal Rimmed Counting Chips', 'Our new Learn and Grow Metal Rimmed Chips are now rust resistant!!!\r\nPerfect for water sensory play.\r\nThese metal rimmed counters are a perfect addition to any sensory tub. Hide the chips in coloured rice and let your little one explore with a magnetic wa', '30.50 $', 1, 3, ''),
(29, 'Book - Hidden World Forest', 'Learn about the flora and fauna of the forest in this beautifully illustrated, multi-flap book. Each spread is themed, with six flaps opening to reveal sumptuous illustrations and fun, bite-sized facts. ', '25.00 $', 0, 3, ''),
(30, 'Original Lock Box', 'Fantastic activity box to teach children how to open up different compartments with various locks and catches.\r\nPerfect for developing fine motor skills and dexterity.\r\n', '40.60 $', 1, 3, ''),
(55, 'sdfg', 'ASD', 'ASDF', 1, 1, 0x3f3f3f3f00164578696600004d4d002a000000080000000000003f3f00430006040506050406060506070706080a100a0a09090a140e0f0c1017141818171416161a1d251f1a1b231c1616202c20232627292a29191f2d302d2830252829283f3f0043010707070a080a130a0a13281a161a28282828282828282828282828282828282828282828282828282828282828282828282828282828282828282828282828283f3f00110801770233030122000211010311013f3f001b000100020301010000000000000000000000050601030407023f3f001a0101000301010100000000000000000000000304050201063f3f000c030100021003100000013f),
(100, 'sdfg', 'sdrfg', 'ws', 1, 1, 0x3f3f3f3f00164578696600004d4d002a000000080000000000003f3f00430006040506050406060506070706080a100a0a09090a140e0f0c1017141818171416161a1d251f1a1b231c1616202c20232627292a29191f2d302d2830252829283f3f0043010707070a080a130a0a13281a161a28282828282828282828282828282828282828282828282828282828282828282828282828282828282828282828282828283f3f00110801770233030122000211010311013f3f001b000100020301010000000000000000000000050601030407023f3f001a0101000301010100000000000000000000000304050201063f3f000c030100021003100000013f);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Sec_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Phone_Num` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Con_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `First_Name`, `Sec_Name`, `Last_Name`, `DOB`, `Phone_Num`, `Email`, `Password`, `Con_Password`) VALUES
(1, 'tamara', 'enad', 'shbat', '2000-01-01', 2147483647, 'talshbat@gmail.com', 'Aas012345*', 'Aas012345*');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `commend`
--
ALTER TABLE `commend`
  ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_product` (`category_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commend`
--
ALTER TABLE `commend`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
