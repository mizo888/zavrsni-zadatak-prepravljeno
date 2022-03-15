-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 03:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Nature'),
(2, 'Space');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` text NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`) VALUES
(145, 0, 'Society – The soil in which we grow', 'admin', '08.03.2022', 'family-gc38afb445_1920.jpg', '<p>In order for any plant to grow and flourish to its full potential, it needs the right conditions.</p>\r\n\r\n<p>The soil is all important. Everything grows in the soil. If the soil is good and you have the right amount of sunshine and water everything takes care of itself. Nature follows its own course. We don’t need to interfere. The tiny acorn grows into the majestic Oak tree.</p>\r\n\r\n<p>Would the same Oak tree grow in a desert? Would it flourish in a tiny plant pot? What if the soil is barren and polluted?</p>\r\n\r\n<p>It is no different for human beings. In order for us to grow and flourish to our full potential, we need the right conditions. In our case, you could think of society as the soil in which we grow. What do I mean when I say “society”? I mean it in the broadest possible sense: our families, our communities, our schools, our friends, our government institutions, our laws, our offices, our work, our recreational spaces, our culture… the world in which we live.</p>\r\n\r\n<p>Does our society provide the optimum conditions for human growth and development?</p>\r\n\r\n<p>Is each person afforded the appropriate conditions which will allow them to flourish… to become what they were always naturally inclined to become: an artist, a farmer, a carer, an entertainer, a thinker, a writer, a scientist, a mother, a teacher, an explorer?</p>\r\n\r\n<p>Is our society more akin to an industrial farm where only one or two crops are considered to be of value? Where rainforests are chopped down to make room for the profitable, consumable crops. Where any inclination towards being an artist or an explorer or a philosopher is suppressed in favour of something more practical… maybe an accountant or a tax consultant or a banker? Not that there’s anything at all wrong with those professions if that’s what you love to do. Does society make it easy for a person to discover what their talent is and does it enable them to cultivate that talent? Is that what school does or in a sense does our current education system do the exact opposite? Does it teach children to question and think for themselves or does it teach them to memorise facts and conform?</p>', ''),
(156, 0, 'Connecting with nature: The practice of ‘wind-watching’', 'admin', '09.03.2022', 'road-g420062fba_1920.jpg', '<p>The world is animated by the wind. This invisible, mysterious force can bring a landscape alive. Its absence can cast a calm stillness over the earth. On barren mountain tops its power is barely perceptible; in forests and seas its presence becomes manifest.</p>\r\n\r\n<p>Winds are wild, and sometimes destructive. When we look deeply into the nature of wind, when we reflect on its life, its journey to us, we can see the interconnected nature of all things. The light from the sun travels to the surface of the earth, where air is heated unevenly over land and sea causing it to expand and rise at different rates until this rising and displacing air builds in billowing gusts that rock the oceans and ripple the seas. The wind can make rag-dolls of trees, ripping them from their roots.</p>\r\n\r\n<p>The beauty of the wind is its dynamism. It is not constant, nor predictable. One minute it lifts the place; the next there is a lull of still abiding peace. On gentle days it is god’s whisper; In more rambunctious form it is a monster’s roar, a voice that erupts with a wild and angry energy.</p>\r\n\r\n<p>When it blows, the air tattoos the surface of canals, lakes, seas, blowing beautiful patterns of rhythmic energy into the liquid silence. Trees bow down in submission, as leaves, branches and roots, dance to its music, its mad, manic energy. Forests roll around in circles sending signals to the clouds, waving to the skies, and laughing to the stars above.</p>', ''),
(157, 0, 'How Uber Predicts Arrival Times Using Deep Learning', 'elvis', '10.03.2022', 'digital-marketing-g5ffa9c680_1920.jpg', '<p>At Uber, magical customer experiences depend on accurate arrival time predictions (ETAs). We use ETAs to calculate fares, estimate pickup times, match riders to drivers, plan deliveries, and more. Traditional routing engines compute ETAs by dividing up the road network into small road segments represented by weighted edges in a graph. They use shortest-path algorithms to find the best path through the graph and add up the weights to derive an ETA. But as we all know, the map is not the terrain: a road graph is just a model, and it can’t perfectly capture conditions on the ground. Moreover, we may not know which route a particular rider and driver will choose to their destination. By training machine learning (ML) models on top of the road graph prediction using historical data in combination with real-time signals, we can refine ETAs that better predict real-world outcomes.</p>\r\n\r\n<p>For several years, Uber used gradient-boosted decision tree ensembles to refine ETA predictions. The ETA model and its training dataset grew steadily larger with each release. To keep pace with this growth, Uber’s Apache Spark™ team contributed upstream improvements [1, 2] to XGBoost to allow the model to grow ever deeper, making it one of the largest and deepest XGBoost ensembles in the world at that time. Eventually, we reached a point where increasing the dataset and model size using XGBoost became untenable. To continue scaling the model and improving accuracy, we decided to explore deep learning because of the relative ease of scaling to large datasets using data-parallel SGD [3].</p>\r\n\r\n<ul>To justify switching to deep learning we needed to overcome three main challenges:\r\n<br>\r\n<br>\r\n<li>Latency: The model must return an ETA within a few milliseconds at most.</li>\r\n<li>Accuracy: The mean absolute error (MAE) must improve significantly over the incumbent XGBoost model.</li>\r\n<li>Generality: The model must provide ETA predictions globally across all of Uber’s lines of business such as mobility and delivery.</li>\r\n\r\n</ul>', ''),
(158, 0, 'Transmission troubleshooting', 'elvis', '11.03.2022', 'screw-g7c4412440_1920.jpg', '<p>While most people assume the engine is responsible for making their car move, it’s only part of the equation. Your engine generates rotational power and must spin at a precise speed to perform efficiently and avoid damage. However, to get the car moving forward or backward, rotational power needs to be transferred to the wheels. While your drivetrain is responsible for delivering power from your engine to the wheels, your transmission operates like a switchboard by controlling the amount of power that is transferred.</p>\r\n\r\n<p>In lower gears, like when you’re first accelerating or going uphill, your transmission multiplies this power to push the car forward. In higher gears, like when you’re cruising on the highway, breaking, or going downhill, this power is decreased.</p>  \r\n\r\n<p>As the name suggests, an automatic transmission does all of this, without the driver shifting gears manually. While an automatic transmission can help your car drive more efficiently, and significantly lower the risk of damage caused by improper shifting, all transmissions do wear over time. Thankfully, with a bit of knowledge, you can recognize any problems early and avoid a full transmission repair.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'subscriber',
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$1234512345123451234512'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `randSalt`) VALUES
(43, 'admin', '$2y$10$123451234512345123451ujdbNOQF.98MW.NKZDYMje30tdDsZxYW', 'admin', '$2y$10$1234512345123451234512'),
(52, 'user', '$2y$10$123451234512345123451uPnd6pUGcVw9WlJQAYsowmHZLaJwl0TO', 'subscriber', '$2y$10$1234512345123451234512'),
(53, 'elvis', '$2y$10$123451234512345123451uX.XsKhhSlrFCOH.R1T/hvkLHrCulWyy', 'admin', '$2y$10$1234512345123451234512');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
