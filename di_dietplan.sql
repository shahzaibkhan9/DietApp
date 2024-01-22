-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2023 at 06:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitlynk`
--

-- --------------------------------------------------------

--
-- Table structure for table `di_dietplan`
--

CREATE TABLE `di_dietplan` (
  `id` int(11) NOT NULL,
  `day` int(1) DEFAULT NULL,
  `meal_type` varchar(9) DEFAULT NULL,
  `item` varchar(35) DEFAULT NULL,
  `c750` varchar(14) DEFAULT NULL,
  `c1000` varchar(14) DEFAULT NULL,
  `c1250` varchar(14) DEFAULT NULL,
  `c1500` varchar(14) DEFAULT NULL,
  `c1750` varchar(14) DEFAULT NULL,
  `c2000` varchar(17) DEFAULT NULL,
  `c2250` varchar(12) DEFAULT NULL,
  `c2500` varchar(12) DEFAULT NULL,
  `c2750` varchar(12) DEFAULT NULL,
  `c3000` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `di_dietplan`
--

INSERT INTO `di_dietplan` (`id`, `day`, `meal_type`, `item`, `c750`, `c1000`, `c1250`, `c1500`, `c1750`, `c2000`, `c2250`, `c2500`, `c2750`, `c3000`) VALUES
(1, 1, 'Breakfast', 'Boiled eggs', '1', '2', '2', '2', '2', '2', '2.00', '2.00', '2.00', '2.00'),
(2, 1, 'Breakfast', 'Peanut butter', '1/2 tablespoon', '1 tablespoon', '1 tablespoon', '1 tablespoon', '1 tablespoon', '1.5 tablespoons', '1 tbsp', '1 tbsp', '1 tbsp', '1.5 tbsp'),
(3, 1, 'Breakfast', 'Saut�ed spinach with garlic', '1/4 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1 cup'),
(4, 1, 'Breakfast', 'Whole wheat toast', '1/2 slice', '1 slice', '1 slice', '1 slice', '1 slice', '2 slices', '1 slice', '1 slice', '1 slice', '2 slices'),
(5, 1, 'Breakfast', 'Mixed berries', '1/4 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1 cup'),
(6, 2, 'Breakfast', 'Greek yogurt', '2/3 serving', '1 serving', '1 serving', '1 serving', '1 serving', '1.5 servings', '1 serving', '1 serving', '1 serving', '1.5 servings'),
(7, 2, 'Breakfast', 'Steel cut oats', '1/4 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1/2 cup', '3/4 cup', '1/2 cup', '1/2 cup', '1/2 cup', '3/4 cup'),
(8, 2, 'Breakfast', 'Chopped nuts', '1/2 tablespoon', '1 tablespoon', '1 tablespoon', '1 tablespoon', '1 tablespoon', '2 tablespoons', '1 tbsp', '1 tbsp', '1 tbsp', '2 tbsp'),
(9, 2, 'Breakfast', 'Sliced banana', '1/2', '1-2', '1-2', '1-2', '1', '1', '2.00', '2.00', '2.00', '3.00'),
(10, 3, 'Breakfast', 'Turkey bacon', '1 slice', '2 slices', '2 slices', '2 slices', '2 slices', '3 slices', '2 slices', '2 slices', '2 slices', '3 slices'),
(11, 3, 'Breakfast', 'Mixed berries', '1/4 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1 cup'),
(12, 3, 'Breakfast', 'Cottage cheese', '1/4 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1/2 cup', '3/4 cup', '1/2 cup', '1/2 cup', '1/2 cup', '3/4 cup'),
(13, 3, 'Breakfast', 'Saut�ed spinach with garlic', '1/4 cup', '1/2 cup', '1/2 cup', '1/2 cup', '1 cup', '1 cup', '1/2 cup', '1/2 cup', '1 cup', '1 cup'),
(14, 3, 'Breakfast', 'Whole wheat toast', '1/2 slice', '1 slice', '1 slice', '1 slice', '1 slice', '2 slices', '1 slice', '1 slice', '1 slice', '2 slices'),
(15, 4, 'Breakfast', ' Boiled eggs ', '1', '2', '2', '2', '2', '2', '2.00', '2.00', '2.00', '2.00'),
(16, 4, 'Breakfast', ' Steel cut oats ', '1/4 cup', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 3/4 cup ', '1/2 cup', '1/2 cup', '1/2 cup', '3/4 cup'),
(17, 4, 'Breakfast', ' Saut�ed spinach with garlic ', '1/4 cup', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1 cup ', ' 1 cup ', '1/2 cup', '1/2 cup', '1 cup', '1 cup'),
(18, 4, 'Breakfast', ' Sliced avocado ', '1/4', ' 1/4 ', ' 1/4 ', ' 1/4 ', ' 1/4 ', ' 1/2 ', '44930.00', '44930.00', '44930.00', '44928.00'),
(19, 5, 'Breakfast', ' Cottage cheese ', '1/4 cup', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 3/4 cup ', '1/2 cup', '1/2 cup', '1/2 cup', '3/4 cup'),
(20, 5, 'Breakfast', ' Turkey bacon ', '1 slice', ' 2 slices ', ' 2 slices ', ' 2 slices ', ' 2 slices ', ' 3 slices ', '2 slices', '2 slices', '2 slices', '3 slices'),
(21, 5, 'Breakfast', ' Whole wheat toast ', '1/2 slice', ' 1 slice ', ' 1 slice ', ' 1 slice ', ' 1 slice ', ' 2 slices ', '1 slice', '1 slice', '1 slice', '2 slices'),
(22, 5, 'Breakfast', ' Mixed berries ', '1/4 cup', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1 cup ', '1/2 cup', '1/2 cup', '1/2 cup', '1 cup'),
(23, 5, 'Breakfast', ' Peanut butter ', '1/2 tablespoon', ' 1 tablespoon ', ' 1 tablespoon ', ' 1 tablespoon ', ' 1 tablespoon ', ' 1.5 tablespoons ', '1 tbsp', '1 tbsp', '1 tbsp', '1.5 tbsp'),
(24, 6, 'Breakfast', ' Greek yogurt ', '2/3 serving', ' 1 serving ', ' 1 serving ', ' 1 serving ', ' 1 serving ', ' 1.5 servings ', '1 serving', '1 serving', '1 serving', '1 serving'),
(25, 6, 'Breakfast', ' Steel cut oats ', '1/4 cup', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 3/4 cup ', '1/2 cup', '1/2 cup', '1/2 cup', '3/4 cup'),
(26, 6, 'Breakfast', ' Mixed berries ', '1/4 cup', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1 cup ', '1/2 cup', '1/2 cup', '1/2 cup', '1 cup'),
(27, 6, 'Breakfast', ' Sliced banana ', '1/2', ' 1/2 ', ' 1/2 ', ' 1/2 ', '1', '1', '44928.00', '44928.00', '44928.00', '1.00'),
(28, 6, 'Breakfast', ' Chopped nuts ', '1/2 tablespoon', ' 1 tablespoon ', ' 1 tablespoon ', ' 1 tablespoon ', ' 1 tablespoon ', ' 2 tablespoons ', '1 tablespoon', '1 tablespoon', '1 tablespoon', '2 tablespoons'),
(29, 7, 'Breakfast', ' Turkey bacon ', '1 slice', ' 2 slices ', ' 2 slices ', ' 2 slices ', ' 2 slices ', ' 3 slices ', '2 slices', '2 slices', '2 slices', '3 slices'),
(30, 7, 'Breakfast', ' Whole wheat toast ', '1/2 slice', ' 1 slice ', ' 1 slice ', ' 1 slice ', ' 1 slice ', ' 2 slices ', '1 slice', '1 slice', '1 slice', '2 slices'),
(31, 7, 'Breakfast', ' Mixed berries ', '1/4 cup', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1 cup ', '1/2 cup', '1/2 cup', '1/2 cup', '1 cup'),
(32, 7, 'Breakfast', ' Greek yogurt ', '1/4 cup', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 1/2 cup ', ' 3/4 cup ', '1/2 cup', '1/2 cup', '1/2 cup', '3/4 cup'),
(33, 7, 'Breakfast', ' Chopped nuts ', '1/2 tablespoon', ' 1 tablespoon ', ' 1 tablespoon ', ' 1 tablespoon ', ' 1 tablespoon ', ' 2 tablespoons ', '1 tablespoon', '1 tablespoon', '1 tablespoon', '2 tablespoons'),
(34, 1, 'Lunch', 'Mixed Greens Salad', '75g', '100g', '100g', '100g', '100g', '100g', '100g', '100g', '100g', '100g'),
(35, 1, 'Lunch', 'Grilled Chicken or Fish', '75g', '100g', '150g', '150g', '150g', '200g', '150g', '150g', '150g', '200g'),
(36, 1, 'Lunch', 'Avocado', '40g', '50g', '50g', '50g', '50g', '50g', '50g', '50g', '50g', '50g'),
(37, 1, 'Lunch', 'Quinoa or Brown Rice', '125g', '150g', '200g', '250g', '250g', '200g', '250g', '250g', '200g', '200g'),
(38, 2, 'Lunch', 'Whole Wheat Wrap', '75g', '100g', '100g', '250g', '250g', '200g', '100g', '250g', '250g', '200g'),
(39, 2, 'Lunch', 'Hummus', '30 g', '50g', '50g', '250g', '250g', '200g', '50g', '250g', '250g', '200g'),
(40, 2, 'Lunch', 'Veggies', '75g', '100g', '100g', '250g', '250g', '200g', '100g', '250g', '250g', '200g'),
(41, 2, 'Lunch', 'Falafel', '40g', '50g', '50g', '250g', '250g', '200g', '50g', '250g', '250g', '200g'),
(42, 2, 'Lunch', 'Sweet Potatoes or Brown Rice', '40g', '50g', '100g', '250g', '250g', '200g', '100g', '250g', '250g', '200g'),
(43, 3, 'Lunch', 'Lentil or Bean Soup', '40g', '50g', '100g', '250g', '250g', '200g', '100g', '250g', '250g', '200g'),
(44, 3, 'Lunch', 'Mixed Greens Salad', '35g', '50g', '100g', '100g', '250g', '200g', '100g', '100g', '250g', '200g'),
(45, 3, 'Lunch', 'Grilled Chicken or Fish', '35g', '50g', '100g', '150g', '250g', '200g', '100g', '150g', '250g', '200g'),
(46, 3, 'Lunch', 'Whole Grain Roll', '35g', '50g', '100g', '50g', '250g', '200g', '100g', '250g', '250g', '200g'),
(47, 4, 'Lunch', 'Whole Wheat Pasta', '35g', '50g', '100g', '50g', '150g', '200g', '100g', '50g', '150g', '200g'),
(48, 4, 'Lunch', 'Marinara Sauce', '35g', '50g', '100g', '50g', '200g', '200g', '100g', '50g', '200g', '200g'),
(49, 4, 'Lunch', 'Grilled Chicken or Fish', '35g', '50g', '100g', '50g', '150g', '200g', '100g', '50g', '150g', '200g'),
(50, 4, 'Lunch', 'Mixed saut�ed vegetables', '35g', '50g', '100g', '50g', '100g', '200g', '100g', '50g', '100g', '200g'),
(51, 5, 'Lunch', 'Grilled Chicken or Fish', '35g', '50g', '100g', '50g', '100g', '200g', '100g', '150g', '150g', '200g'),
(52, 5, 'Lunch', 'Quinoa or Brown Rice', '35g', '50g', '100g', '50g', '100g', '200g', '100g', '100g', '100g', '100g'),
(53, 5, 'Lunch', 'Mixed saut�ed vegetables', '35g', '50g', '100g', '50g', '100g', '150g', '100g', '100g', '150g', '150g'),
(54, 6, 'Lunch', 'Mixed Greens Salad', '75g', '100g', '100g', '100g', '100g', '100g', '100g', '100g', '100g', '100g'),
(55, 6, 'Lunch', 'Grilled Chicken or Fish', '75g', '100g', '150g', '150g', '150g', '200g', '150g', '150g', '200g', '200g'),
(56, 6, 'Lunch', 'Avocado', '35g', '50g', '50g', '50g', '50g', '50g', '50g', '50g', '50g', '50g'),
(57, 6, 'Lunch', 'Quinoa or Brown Rice', '120 g', '150g', '200g', '250g', '250g', '200g', '200g', '250g', '250g', '200g'),
(58, 7, 'Lunch', 'Whole Wheat Pasta', '35g', '50g', '100g', '50g', '150g', '200g', '100g', '150g', '200g', '200g'),
(59, 7, 'Lunch', 'Marinara Sauce', '35g', '50g', '100g', '50g', '200g', '200g', '100g', '200g', '200g', '200g'),
(60, 7, 'Lunch', 'Grilled Chicken or Fish', '35g', '50g', '100g', '50g', '150g', '200g', '100g', '150g', '200g', '200g'),
(61, 7, 'Lunch', 'Mixed saut�ed vegetables', '35g', '50g', '100g', '50g', '100g', '200g', '100g', '100g', '200g', '200g'),
(62, 1, 'Dinner', 'Grilled Chicken or Fish', '75g', '100g', '150g', '200g', '200g', '250g', '300g', '350g', '400g', '450g'),
(63, 1, 'Dinner', 'Roasted Vegetables', '75g', '100g', '100g', '150g', '150g', '200g', '150g', '150g', '200g', '200g'),
(64, 1, 'Dinner', 'Quinoa or Brown Rice', '100g', '150g', '200g', '250g', '250g', '300g', '300g', '350g', '400g', '450g'),
(65, 2, 'Dinner', 'Vegetable Stir Fry', '100g', '150g', '150g', '200g', '200g', '250g', '250g', '300g', '350g', '400g'),
(66, 2, 'Dinner', 'Tofu or Tempeh', '75g', '100g', '100g', '150g', '150g', '200g', '200g', '200g', '250g', '250g'),
(67, 2, 'Dinner', 'Brown Rice or Quinoa', '100g', '150g', '150g', '200g', '200g', '250g', '250g', '300g', '350g', '400g'),
(68, 3, 'Dinner', 'Lentil or Chickpea Curry', '100g', '150g', '150g', '200g', '200g', '250g', '250g', '300g', '350g', '400g'),
(69, 3, 'Dinner', 'Whole wheat naan or Brown Rice', '35g', '50g', '50g', '75g', '75g', '100g', '100g', '100g', '125g', '125g'),
(70, 4, 'Dinner', 'Spaghetti with Meatless Meatballs', '75g', '100g', '100g', '150g', '150g', '200g', '150g', '200g', '250g', '300g'),
(71, 4, 'Dinner', 'Tomato Sauce', '75g', '100g', '100g', '150g', '150g', '200g', '150g', '150g', '200g', '200g'),
(72, 4, 'Dinner', 'mixed saut�ed vegetables', '75g', '100g', '100g', '150g', '150g', '200g', '150g', '150g', '200g', '200g'),
(73, 5, 'Dinner', 'Grilled or Baked Salmon', '75g', '100g', '150g', '200g', '200g', '250g', '300g', '350g', '400g', '450g'),
(74, 5, 'Dinner', 'Roasted or Grilled Vegetables', '75g', '100g', '100g', '150g', '150g', '200g', '150g', '150g', '200g', '200g'),
(75, 5, 'Dinner', 'Quinoa or Brown Rice', '100g', '150g', '150g', '200g', '200g', '250g', '250g', '300g', '350g', '400g'),
(76, 6, 'Dinner', 'Turkey or Chicken chili', '100g', '150g', '150g', '200g', '200g', '250g', '250g', '300g', '350g', '400g'),
(77, 6, 'Dinner', 'Brown Rice or Quinoa', '100g', '150g', '150g', '200g', '200g', '250g', '250g', '300g', '350g', '400g'),
(78, 7, 'Dinner', 'Grilled or Baked Chicken Breast', '75g', '100g', '150g', '200g', '200g', '250g', '300g', '350g', '400g', '450g'),
(79, 7, 'Dinner', 'Mashed Sweet Potatoes or Brown Rice', '100g', '150g', '150g', '200g', '200g', '250g', '250g', '300g', '350g', '400g'),
(80, 7, 'Dinner', 'mixed saut�ed vegetables', '75g', '100g', '100g', '150g', '150g', '200g', '150g', '150g', '200g', '200g');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `di_dietplan`
--
ALTER TABLE `di_dietplan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `di_dietplan`
--
ALTER TABLE `di_dietplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
