-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2025 at 04:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_fusion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'muskan', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fm`
--

CREATE TABLE `fm` (
  `name` varchar(150) NOT NULL,
  `price` int(30) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fm`
--

INSERT INTO `fm` (`name`, `price`, `description`, `images`) VALUES
('Black Elegance Suit', 7500, 'Elevate your style with the Black Elegance Suit, featuring a fitted black blazer adorned with sleek white piping on the lapels, pockets, and edges. Paired with matching black flared pants and bold white side stripes, this suit seamlessly blends classic sophistication with modern flair', 'images/f1.jpg'),
('Cream Luxe Ensemble', 5000, 'Embrace sophistication with the Cream Luxe Ensemble. This outfit features a double-breasted blazer cinched at the waist with a stylish belt and complemented by wide-legged trousers. Paired with a chic green handbag adorned with a gold chain strap, this ensemble exudes elegance and confidence', 'images/f2.jpg'),
('Black Peplum Elegance', 4500, 'Step out in style with the Black Peplum Elegance outfit. This ensemble features a chic short-sleeved peplum top cinched at the waist with a thin black belt and wide-legged trousers', 'images/f3.jpg'),
('Gradient Burgundy Power Suit', 6000, 'Make a bold statement with the Gradient Burgundy Power Suit. This stylish pantsuit features a stunning gradient design that transitions from a light shade at the shoulders to a deep, rich burgundy at the bottom of the jacket and pants.', 'images/f4.jpg'),
('Gradient Green Power Suit', 4500, 'Command attention with the Gradient Green Power Suit. This chic pantsuit features a single-button blazer and wide-legged trousers, transitioning from a darker green at the top to a lighter green at the bottom.', 'images/f5.jpg'),
('Gradient Black and White Power Suit', 5600, 'Make a bold statement with the Gradient Black and White Power Suit. This sophisticated ensemble features a double-breasted blazer with a tailored fit, seamlessly transitioning from white at the shoulders to dark blue or black at the bottom.', 'images/f6.jpg'),
('Modern Blue Ensemble', 6700, 'Embrace modern elegance with the Modern Blue Ensemble. This stylish outfit features a fitted light blue blazer with structured shoulders, a matching crop top with a sweetheart neckline, and high-waisted, wide-leg trousers', 'images/f7.jpg'),
('Beige Modern Pantsuit', 5600, 'Step out with confidence in the Beige Modern Pantsuit. This stylish ensemble features a fitted blazer with wide lapels and a matching belt at the waist, paired with high-waisted, flared trousers', 'images/f8.jpg'),
('Light Blue-Green Modern Chic Set', 6500, 'Embrace contemporary fashion with the Light Blue-Green Modern Chic Set. This stylish ensemble features a cropped blazer and high-waisted, wide-leg trousers with a chic slit at the bottom. ', 'images/f9.jpg'),
('Blush Peplum Pantsuit', 7600, 'Turn heads with the Blush Peplum Pantsuit, a perfect blend of elegance and modern style. Featuring a fitted blazer with a chic peplum hem and single button closure, paired with high-waisted, flared trousers, this light pink outfit is perfect for formal and professional settings.\r\nSky Blue Suit Set', 'images/f10.jpg'),
('Sky Blue Suit Set', 6500, 'Radiate confidence with the Sky Blue Suit Set. This stylish ensemble features a double-breasted blazer with buttons, wide-leg trousers, and a white crop top underneath. Paired with a small light blue handbag, this look is perfect for both professional and formal settings', 'images/f11.jpg'),
('Emerald Chic Pantsuit', 4700, 'Stand out in the Emerald Chic Pantsuit, featuring a vibrant green belted blazer with double-breasted buttons and wide-legged trousers. This ensemble, complemented by a sophisticated monochromatic mural backdrop, exudes modern elegance and confidence.', 'images/f12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gh`
--

CREATE TABLE `gh` (
  `name` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gh`
--

INSERT INTO `gh` (`name`, `price`, `description`, `images`) VALUES
('Exquisite Traditional', 5000, 'Elevate your cultural wardrobe with this stunning purple traditional dress adorned with vibrant embroidery and intricate patterns. Perfect for special occasions, this dress features a flowing skirt and detailed artistry, making it a standout piece. Complemented with matching jewelry for added elegance.', 'images/GH1.jpg'),
('Elegant Essence Dress', 3000, 'Stand out in this stunning white traditional dress, featuring vibrant embroidery and intricate patterns. Perfect for special occasions with its flowing skirt and detailed artistry. Complemented with matching jewelry for added elegance.', 'images/GH2.jpg'),
('Radiant Harmony', 4000, 'Step into elegance with this stunning traditional lehenga choli. The lehenga features intricate patterns in vibrant colors, including yellow, red, blue, and green. The sleeveless choli is adorned with detailed embroidery, and the matching green dupatta adds to the overall charm. Perfect for special occasions and cultural festivities.', 'images/GH3.jpg'),
('Floral Radiance', 4500, 'Make a statement with this elegant traditional lehenga. The lehenga features intricate patterns in vibrant shades of yellow, pink, and green, creating a captivating and colorful ensemble. The top is elaborately decorated, and the flowing skirt adds to the overall charm. Perfect for cultural festivals and special occasions, this dress ensures you stand out with grace and style.', 'images/GH4.jpg'),
('Sapphire Serenity', 3500, 'Step into the spotlight with this stunning traditional lehenga choli. The vibrant multicolored skirt features intricate patterns, perfectly complemented by the elegant blue top. The flowing red dupatta adds an extra touch of sophistication and grace, making this ensemble perfect for cultural events and special occasions.', 'images/GH5.jpg'),
('Majestic Harmony', 2000, 'Step into elegance with this beautiful traditional lehenga choli. The outfit features a long white skirt adorned with colorful, intricate patterns at the hem, including designs of elephants, flowers, and geometric shapes. The matching blouse is equally stunning with similar colorful patterns and long sleeves. This ensemble is completed with a blue net dupatta that brings the entire look together. Perfect for cultural events and special occasions.', 'images/GH6.jpg'),
('Mirror Embellished Dress', 1500, 'Dive into tradition with this vibrant ensemble The heavily embroidered blouse dazzles with mirror work perfectly balancing the white tiered skirt adorned with colorful dots The multicolored dupatta gracefully drapes completing a look that is perfect for festivals and special occasions.', 'images/GH7.jpg'),
('Vibrant Patchwork Lehenga Choli', 2500, ' Step out in style with this stunning patchwork lehenga choli set. The black lehenga features a wide border adorned with colorful patchwork, bringing a unique and lively touch to the outfit', 'images/GH8.jpg'),
('Multicolor Fusion Lehenga Choli', 5500, ' Step into the spotlight with this eye-catching multicolor lehenga choli. The skirt boasts a stunning combination of patterns and colors, from floral motifs to geometric designs', 'images/GH9.jpg'),
('Regal Multicolor Lehenga Choli', 4000, 'Step into a world of color and elegance with this regal multicolor lehenga choli. The layered lehenga features an array of patterns and hues, including black, white, pink, and gold, creating a striking visual appeal.', 'images/GH9.jpg'),
('Majestic Bridal Splendor', 6000, 'Walk down the aisle in this show-stopping bridal lehenga that truly embodies tradition and grandeur. The skirt teems with intricate embroidery of elephants, peacocks, and motifs in rich red, gold, and green hues, resembling the artistry of ancient Indian sculptures', 'images/GH11.jpg'),
('Enchanted Blossom Lehenga', 7000, 'Embrace the enchantment of tradition with this exquisite lehenga choli. The purple blouse, adorned with intricate embroidery, pairs beautifully with the cream-colored skirt accentuated by purple and orange details', 'images/GH12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kh`
--

CREATE TABLE `kh` (
  `name` varchar(150) NOT NULL,
  `price` int(30) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kh`
--

INSERT INTO `kh` (`name`, `price`, `description`, `images`) VALUES
('Golden Grace Ensemble', 7000, 'Embrace timeless elegance with the Golden Grace Ensemble. This stunning golden dress features intricate embroidery and embellishments that add a touch of opulence.', 'images/K1.jpg'),
('Enchanted Silver Flora', 6500, 'Step into the spotlight with the Enchanted Silver Flora. This exquisite silver dress, adorned with green floral embroidery and intricate patterns, is a true testament to traditional craftsmanship', 'images/K2.jpg'),
('Rainbow Reverie', 5000, 'Step into a world of vibrant colors with the Rainbow Reverie dress. This unique patchwork dress is a celebration of creativity, featuring a harmonious blend of various fabric patches in shades of red, blue, green, yellow, and purple', 'images/K3.jpg'),
('Blue Serenity Splendor', 4500, 'Elevate your style with the Blue Serenity Splendor. This graceful light blue dress features voluminous sleeves and an intricately embroidered outer garment adorned with floral patterns and gold detailing.', 'images/K4.jpg'),
('Regal Midnight Ensemble', 6500, 'Make a grand entrance with the Regal Midnight Ensemble. This stunning black outfit features intricate gold embroidery, adding a touch of opulence and sophistication. The long, flowing outer garment with wide sleeves beautifully showcases the elaborate designs on the cuffs, neckline, and hem', 'images/K5.jpg'),
('Majestic Multicolor Mosaic', 4400, 'Embrace the beauty of tradition with the Majestic Multicolor Mosaic. This stunning outfit features a long, multi-colored tunic adorned with intricate patterns and embellishments, paired with white loose-fitting pants and a matching headscarf with gold accents.', 'images/K6.jpg'),
('Radiant Heritage Ensemble', 5500, 'Immerse yourself in cultural splendor with the Radiant Heritage Ensemble. This exquisite dress boasts a harmonious blend of vibrant colors including purple, green, gold, and white, with intricate embroidery and patterns adorning every inch', 'images/K7.jpg'),
('Royal Elegance Ensemble', 4000, 'Exude grace and sophistication with the Royal Elegance Ensemble. This stunning outfit features a blue blouse with intricate gold embroidery, paired with a long beige skirt that adds a touch of timeless charm. The sheer, gold-dotted dupatta gracefully draped over the shoulders enhances the overall elegance', 'images/K8.jpg'),
('Scarlet Majesty Ensemble', 7000, 'Immerse yourself in the regal charm of the Scarlet Majesty Ensemble. This breathtaking red dress features a full, pleated skirt and long sleeves adorned with intricate black and white embroidery. The detailed patterns and embellishments showcase exceptional craftsmanship, making this outfit perfect', 'images/K9.jpg'),
('Vibrant Heritage Ensemble', 6500, 'Embrace the richness of tradition with the Vibrant Heritage Ensemble. This stunning dress features a vibrant red skirt with intricate white lace at the hem, paired with a top adorned with detailed embroidery and beadwork.', 'images/K10.jpg'),
('Emerald Elegance Gown', 6000, 'Step into timeless grace with the Emerald Elegance Gown. This beautiful dark green dress features intricate gold trim and embroidery on the bodice, adding a touch of opulence. The wide, draped sleeves enhance the regal appearance, while the decorative belt accentuates the waist', 'images/K11.jpg'),
('Midnight Regal Attire', 5500, 'Embrace the allure of tradition with the Midnight Regal Attire. This stunning black dress features intricate red and gold embroidered patterns on the chest, sleeves, and hem, showcasing exquisite craftsmanship. The flowing, draped design extends to the floor, adding a touch of elegance.', 'images/K12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mh`
--

CREATE TABLE `mh` (
  `name` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mh`
--

INSERT INTO `mh` (`name`, `price`, `description`, `images`) VALUES
('Emerald Elegance Saree', 5500, 'Adorn yourself in this stunning green saree embellished with intricate gold embroidery. Paired with a matching blouse and traditional accessories, this ensemble radiates grace and sophistication', 'images/M1.jpg'),
('Golden Radiance Saree', 4500, 'Embrace the allure of tradition with this vibrant yellow saree, intricately adorned with golden embroidery. The pallu, featuring colorful floral patterns, drapes gracefully over the shoulder, adding a touch of elegance', 'images/M2.jpg'),
('Rosy Glamour Saree', 6000, 'Step into elegance with this exquisite pink saree, adorned with intricate gold embroidery. The contrasting red shawl with detailed gold patterns adds a regal touch, while the elegant gold jewelry completes the ensemble.', 'images/M3.jpg'),
('Crimson Regal Saree', 3500, 'Exude timeless beauty with this stunning red saree, adorned with intricate designs and a golden border. Paired with traditional jewelry, including necklaces, bangles, and rings', 'images/M4.jpg'),
('Regal Maroon Saree', 7000, 'Step into elegance with this stunning cream and maroon saree, featuring exquisite gold embroidery. Paired with traditional jewelry, including ornate bangles and a dazzling necklace, this ensemble exudes timeless beauty', 'images/M5.jpg'),
('Royal Blue Elegance Saree', 6500, 'Exude grace in this magnificent blue saree adorned with intricate patterns and a contrasting pink pallu. Paired with elaborate jewelry including a grand necklace, elegant earrings, and ornate bangles, this ensemble is perfect for special occasions, weddings, or festive celebrations', 'images/M6.jpg'),
('Opulent Silver Gown', 5000, 'A stunning silver saree with intricate details and a flowing silhouette, perfect for traditional occassions giving a classic look with beautiful accessorries', 'images/MH7.jpg'),
('Radiant Elegance Saree', 3000, 'This stunning saree exudes classic charm with its intricate silver fabric, beautifully accented with vibrant red and orange borders. Paired with a meticulously embroidered red blouse featuring a captivating backless design', 'images/MH8.jpg'),
('Emerald Enchantment Saree', 4000, 'This exquisite green saree is beautifully complemented by vibrant pink borders and intricate design work. The wearer is adorned with elegant jewelry, including necklaces, bangles, and rings, enhancing the traditional look', 'images/MH9.jpg'),
('Sunshine Delight Saree', 3500, 'This bright orange saree, adorned with charming yellow polka dots and paired with a red blouse featuring intricate gold embroidery, is a perfect blend of traditional allure and cheerful elegance', 'images/MH10.jpg'),
('Midnight Enchantment Saree', 4500, 'This elegant black saree, adorned with a shimmering silver border and paired with a stunning silver blouse, exudes timeless sophistication', 'images/MH11.jpg'),
('Royal Elegance Saree', 3500, 'The Royal Elegance Saree features a striking blue fabric with intricate gold patterns and a contrasting gold and purple border. Paired with traditional jewelry, including a long gold necklace, earrings, bangles, and a waist belt, this saree exudes regal charm.', 'images/MH12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pb`
--

CREATE TABLE `pb` (
  `name` varchar(150) NOT NULL,
  `price` int(30) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pb`
--

INSERT INTO `pb` (`name`, `price`, `description`, `images`) VALUES
('Enchanted Emerald Ensemble', 4800, 'This stunning kameez features exquisite silver embellishments at the hem, adding a touch of sparkle to your every step. The matching shalwar is beautifully adorned with intricate embroidery at the bottom, creating a harmonious blend of tradition and style.', 'images/P1.jpg'),
('Royal Radiance Ensemble', 4000, 'Unveil the aura of regal charm with our Royal Radiance Ensemble. This mesmerizing white kameez is adorned with delicate gold embroidery, creating an opulent look that is perfect for any grand occasion. The gold-colored shalwar features vibrant floral patterns at the bottom, adding a splash of color and a touch of elegance.', 'images/P2.jpg'),
('Golden Harmony Ensemble', 3500, 'Radiate sunshine and grace with our Golden Harmony Ensemble. This captivating yellow kameez is adorned with intricate gold embroidery on the neckline and sleeves, creating a harmonious blend of elegance and tradition.', 'images/P3.jpg'),
('Majestic Ruby Ensemble', 5500, 'Embrace the allure of royalty with our Majestic Ruby Ensemble. This deep red velvet outfit is adorned with intricate gold embroidery on the sleeves, exuding opulence and sophistication. The matching skirt complements the top beautifully, creating a harmonious and elegant look.', 'images/P4.jpg'),
('Harmony Hues Ensemble', 7000, 'Embrace the vibrancy of life with our Harmony Hues Ensemble. The pristine white outfit is brought to life with stunning gold and multicolored embroidery on the sleeves and neckline. The highlight of the ensemble is the colorful fabric being held up—featuring a delightful mix of green and pink sections, intricately designed with gold embellishments.', 'images/P5.jpg'),
('Ruby Elegance Ensemble', 3500, 'Dazzle in the sophistication and allure of our Ruby Elegance Ensemble. This breathtaking red outfit features an intricately embroidered long tunic, accompanied by matching red pants. The red dupatta (scarf) with gold detailing drapes gracefully, adding an element of regality to the ensemble', 'images/P6.jpg'),
('Midnight Elegance Ensemble', 4400, 'Step into the limelight with our Midnight Elegance Ensemble. This sophisticated dark blue traditional outfit features a long tunic paired with matching pants, exuding timeless elegance. The colorful shawl with intricate patterns in shades of gold, brown, and blue adds a vibrant touch to the ensemble.', 'images/P7.jpg'),
('Floral Symphony Ensemble', 6000, 'Step into a world of vibrant elegance with our Floral Symphony Ensemble. This colorful kurta (tunic) features a stunning floral pattern in shades of orange, pink, green, and blue, adorned with intricate embroidery and embellishments along the neckline, sleeves, and hem. The outfit is paired with blue Patiala pants, which are loose and pleated for a comfortable yet stylish look', 'images/P8.jpg'),
('Radiant Fusion Ensemble', 4500, 'Elevate your style with our Radiant Fusion Ensemble. This vibrant outfit features a pink top paired with orange and pink patterned pants, creating a stunning blend of colors. The multicolored shawl with geometric designs adds an extra layer of elegance to the ensemble', 'images/P9.jpg'),
('Festive Flora Ensemble', 5000, 'Celebrate in style with our Festive Flora Ensemble. This vibrant red top features stunning floral patterns and intricate embroidery in a mix of colors, including yellow, green, and blue. The unique peplum-like extension with scalloped edges adds a playful touch to the outfit.', 'images/P10.jpg'),
('Lavender Luxe Ensemble', 7000, 'Elevate your style with our Lavender Luxe Ensemble. This gorgeous white kameez features intricate gold embroidery and sequins, creating a stunning and sophisticated look. The light lavender salwar pairs beautifully with the gold accents, adding a touch of elegance.', 'images/P11.jpg'),
('Summer Breeze Ensemble', 2500, 'Embrace the refreshing vibes of summer with our Summer Breeze Ensemble. This stunning tie-dye kurta in shades of light blue and yellow captures the essence of the sunny season. The decorative stitching and patterns add an extra layer of charm to the outfit.', 'images/P12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sa`
--

CREATE TABLE `sa` (
  `name` varchar(150) NOT NULL,
  `price` int(30) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sa`
--

INSERT INTO `sa` (`name`, `price`, `description`, `images`) VALUES
('Floral Grace Ensemble', 6700, 'Elevate your style with the Floral Grace Ensemble. This elegant outfit features a sleeveless, high-neck white top paired with wide-legged white pants. A floral-printed fabric, resembling a saree or a dupatta, is draped over the top and cinched at the waist with a green and white beaded belt', 'images/sa1.jpg'),
('Golden Glam Saree', 7600, 'Dazzle in the Golden Glam Saree, a heavily embellished saree adorned with numerous large, shiny sequins that cover the entire fabric, creating a luxurious and eye-catching appearance. The matching golden blouse features a deep neckline, adding to the overall glamour of the ensemble', 'images/sa2.jpg'),
('Golden Sequined Saree', 5400, 'Shine bright in the Golden Sequined Saree. This elegant saree features a shimmering sequined border that adds a touch of glamour to the light yellow fabric. Paired with a matching sleeveless blouse, this ensemble is perfect for festive occasions and celebrations', 'images/sa3.jpg'),
('Golden Gradient Glam Saree', 6500, 'Shine bright with the Golden Gradient Glam Saree. This elegant saree transitions from gold at the top to silver at the bottom, creating a stunning gradient effect. Paired with a matching sleeveless blouse, this ensemble is perfect for festive occasions and celebrations', 'images/sa4.jpg'),
('Mint Green Beaded Saree', 4500, 'Step into elegance with the Mint Green Beaded Saree. This exquisite saree is adorned with intricate beadwork and sequins, featuring a sheer, embellished pallu that adds a touch of glamour. ', 'images/sa5.jpg'),
('Green Embroidered Elegance', 5400, 'Elevate your style with the Green Embroidered Elegance saree. This light green saree is adorned with intricate white embroidery and lace detailing along the borders, exuding timeless beauty.', 'images/sa6.jpg'),
('Peach Floral Elegance Saree', 4500, 'Step into grace with the Peach Floral Elegance Saree. This exquisite saree features delicate silver embroidery and embellishments on sheer fabric, creating a detailed floral pattern. The short-sleeved blouse with matching embroidery adds a touch of tradition to the modern design. ', 'images/sa7.jpg'),
('Green-White Sequined Glam Saree', 6500, 'Shine bright in the Green-White Sequined Glam Saree. This elegant saree transitions from a shimmering green at the top to white at the bottom, adorned with numerous sequins that create a glittery appearance', 'images/sa.jpg'),
('Gradient Elegance Saree', 5000, 'Elevate your style with the Gradient Elegance Saree. This stunning saree transitions gracefully from white to grey, adorned with small embellishments and embroidery.', 'images/sa9.jpg'),
('Pink Floral Pattern Saree', 7600, 'Embrace traditional elegance with the Pink Floral Pattern Saree. This beautiful saree features intricate floral designs in shades of pink and red on a cream background. The saree is draped gracefully over one shoulder and cinched at the waist with a brown belt. ', 'images/sa10.jpg'),
('Gradient Elegance Saree', 5800, 'Elevate your style with the Gradient Elegance Saree. This stunning saree transitions gracefully from white to grey, adorned with small embellishments and embroidery.', 'images/sa11.jpg'),
('Silver Elegance Saree', 3400, 'Shine bright with the Pink and Silver Elegance Saree. This stunning ensemble features a light pink saree adorned with a darker section and a silver sequin border.', 'images/sa12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `st`
--

CREATE TABLE `st` (
  `name` varchar(150) NOT NULL,
  `price` int(30) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `st`
--

INSERT INTO `st` (`name`, `price`, `description`, `images`) VALUES
('Regal Green Saree', 5600, 'Elevate your ethnic wardrobe with our Regal Green Saree. Featuring a stunning green fabric adorned with a rich red and gold border, this saree is paired with a matching green blouse detailed with red and gold accents.', 'images/s1.jpg'),
('Red and Black Embroidered Saree', 4000, 'Elevate your ethnic wardrobe with this Red and Black Embroidered Saree. The saree features a striking red upper portion adorned with intricate gold embroidery, while the lower part is black with a gold border.', 'images/s2.jpg'),
('Pink and Gold Embroidered Saree', 6000, 'This beautiful Pink and Gold Embroidered Saree is adorned with intricate gold embroidery throughout. Paired with a matching blouse and traditional jewelry, including a necklace, earrings, bangles, and a waist belt, this saree is perfect for festive occasions and special celebrations.', 'images/s4.jpg'),
('Maroon and Green Embroidered Saree', 6500, 'This beautiful Maroon and Green Embroidered Saree features a dark green body with a maroon pallu adorned with intricate gold embroidery. Paired with a maroon blouse with gold detailing on the sleeves, this saree exudes elegance and sophistication.', 'images/s3.jpg'),
('Turquoise and Lavender Lehenga Choli', 7000, 'Showcasing intricate craftsmanship, this Turquoise and Lavender Lehenga Choli features a beautifully embroidered turquoise blouse and a pleated skirt with a blend of turquoise and lavender colors', 'images/s5.jpg'),
('Yellow and Brown Lehenga Choli', 5500, 'Showcasing a beautiful blend of colors, this Yellow and Brown Lehenga Choli features intricate patterns and a matching yellow dupatta. The black blouse with gold embroidery adds a touch of elegance.', 'images/s6.jpg'),
('Maroon and White Lehenga Choli', 4000, 'Presenting the elegant Maroon and White Lehenga Choli. This stunning outfit features a maroon blouse with intricate designs on the sleeves, paired with a flowing white skirt and a maroon dupatta draped gracefully over the shoulder', 'images/s7.jpg'),
('Maroon and Gold Embroidered Saree', 3500, 'Discover elegance with our Maroon and Gold Embroidered Saree. This exquisite saree features intricate gold patterns and is paired with a cream-colored blouse. Perfect for festive occasions and special celebrations, this attire exudes timeless grace and sophistication.', 'images/s8.jpg'),
('Red and Gold Silk Saree', 6000, 'Step into elegance with our Red and Gold Silk Saree. Featuring intricate patterns and a broad, ornate border, this saree is complemented with traditional jewelry, including necklaces, bangles, and earrings.', 'images/s9.jpg'),
('Pink and Gold Embroidered Saree', 5700, 'This beautiful saree features a stunning gold blouse with intricate embroidery and sheer puffed sleeves. The pink and gold saree, with its detailed border and patterned sections, adds elegance and charm. Perfect for festive occasions and special celebrations, this ensemble is accessorized with gold jewelry, including earrings, bangles, and a waist belt.', 'images/s10.jpg'),
('Blue and Gold Embroidered Lehenga', 4500, 'Showcasing elegance and sophistication, this Blue and Gold Embroidered Lehenga features intricate gold embroidery on a stunning blue fabric. Paired with a matching blouse and a dupatta draped gracefully over one shoulder, this ensemble is perfect for festive occasions and special celebrations.', 'images/s11.jpg'),
('Gold and Black Embroidered Lehenga', 4000, 'Elevate your festive wardrobe with our Gold and Black Embroidered Lehenga. This stunning ensemble features a golden blouse with intricate embroidery, a black and gold lehenga, and a matching dupatta draped elegantly over the shoulder.', 'images/s12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'muskan', '$2y$10$ouVoK9E4D9A3CAHARq3KDOnKqO9rhcnCda7f2kRJ.kpDhCffE9.Xy', '123@gmail.com'),
(2, 'Bushra', '$2y$10$SzY7wRAZjvoYEX7XdbU72ehxhpzYugHwBTPm7nXZRDbBe/eDqcUyu', '456@gmail.com'),
(3, 'ambani', '$2y$10$jNKdQkaM.eKbfyviNq10P.ubb6GVI0.WvMiaK/rAcAzqO5wi6IKqO', '777@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `wd`
--

CREATE TABLE `wd` (
  `name` varchar(150) NOT NULL,
  `price` int(30) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wd`
--

INSERT INTO `wd` (`name`, `price`, `description`, `images`) VALUES
('Regal Red Bridal Lehenga', 150000, 'Make a grand entrance with the Regal Red Bridal Lehenga. This exquisite ensemble features a rich red lehenga adorned with intricate gold embroidery and embellishments. The matching blouse and dupatta, draped elegantly over the head and shoulders, complete the look. Traditional jewelry, including bangles, rings, and a headpiece, add a touch of opulence', 'images/w1.jpg'),
('Green Bridal Elegance', 100000, 'Radiate elegance with the Green Bridal Elegance ensemble. This stunning outfit features a deep green fabric adorned with intricate gold embroidery and embellishments. The ensemble is completed with heavy jewelry, including a necklace, earrings, and a headpiece, enhancing the regal look', 'images/w2.jpg'),
('Maroon Royal Bridal Lehenga', 300000, 'Make a grand entrance with the Maroon Royal Bridal Lehenga. This exquisite ensemble features a heavily embroidered maroon lehenga adorned with intricate gold and silver threadwork, sequins, and bead embellishments. The matching blouse and dupatta (veil) draped over the head and shoulders complete the look.', 'images/w3.jpg'),
(' Maroon Splendor Bridal Lehenga', 200000, 'Step into elegance with the  Maroon Splendor Bridal Lehenga. This exquisite ensemble features a richly embroidered lehenga with intricate patterns in shades of green and maroon. The outfit is paired with a matching blouse and a velvet maroon dupatta adorned with gold embellishments and a pink border. ', 'images/w4.jpg'),
('Maroon and Gold Elegance Lehenga', 450000, 'The image showcases a traditional Maroon and Gold Elegance Lehenga Choli. This exquisite outfit features a richly embroidered maroon lehenga with intricate gold patterns and embellishments. The matching fitted blouse is adorned with similar gold detailing, and the dupatta (scarf) is draped gracefully over the head and shoulders.', 'images/w5.jpg'),
('Pastel Elegance Bridal Lehenga', 500000, 'The image showcases a traditional Pastel Elegance Bridal Lehenga. This exquisite outfit features a richly embroidered lehenga with intricate patterns and designs in gold and pastel colors, including motifs such as peacocks and floral patterns. The matching choli (blouse) is adorned with similar detailed embroidery and beadwork', 'images/w6.jpg'),
('Lavish Traditional Bridal Attire', 600000, 'The image shows a person dressed in an elaborate traditional Indian bridal outfit. The outfit consists of a heavily embroidered lehenga (skirt) with intricate patterns and embellishments, a matching choli (blouse) with detailed embroidery, and a dupatta (scarf) draped over the head and shoulder', 'images/w7.jpg'),
('Maroon and Gold Bridal Lehenga', 250000, 'The image showcases a person dressed in a traditional maroon and gold bridal lehenga. The outfit features a heavily embroidered lehenga (long skirt) with intricate floral patterns in shades of red, pink, and gold. The matching choli (cropped blouse) is adorned with similar embroidery and beadwork.', 'images/w8.jpg'),
('Red and Gold Bridal Lehenga', 350000, 'The image showcases a person wearing a traditional Indian bridal outfit, specifically a red lehenga choli. The lehenga is heavily embroidered with intricate gold patterns, including motifs of flowers, leaves, and architectural elements. The choli is also richly decorated with similar embroidery', 'images/w9.jpg'),
('Maroon Bridal Elegance', 400000, 'The image showcases a person dressed in a richly embroidered maroon lehenga, perfect for special occasions like weddings. The intricate patterns and beadwork on the outfit highlight the exquisite craftsmanship. The person is holding up a matching veil, which is also heavily adorned with detailed embroidery and embellishments.', 'images/w10.jpg'),
('Intricate Embellished Lehenga', 350000, 'The image shows a person dressed in an elaborate traditional lehenga for a special occasion. The outfit is intricately embroidered with detailed patterns, sequins, and beads in shades of beige and gold. The person is wearing a matching headpiece and a large, ornate necklace, complementing the outfit', 'images/w11.jpg'),
('White Elegance Lehenga', 600000, 'The image showcases a person dressed in an elaborate white lehenga, a traditional South Asian outfit. The lehenga features intricate embroidery and lacework, with a full, flared skirt and a matching blouse. The outfit is accessorized with a choker necklace and a dupatta (a long scarf) draped over one shoulder', 'images/w12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `username`, `product_name`, `product_image`, `product_description`, `product_price`) VALUES
(6, 'muskan', 'Floral Radiance', 'images/GH4.jpg', 'Make a statement with this elegant traditional lehenga. The lehenga features intricate patterns in vibrant shades of yellow, pink, and green, creating a captivating and colorful ensemble. The top is elaborately decorated, and the flowing skirt adds to the overall charm. Perfect for cultural festivals and special occasions, this dress ensures you stand out with grace and style.', 4500.00),
(7, 'muskan', 'Crimson Regal Saree', 'images/M4.jpg', 'Exude timeless beauty with this stunning red saree, adorned with intricate designs and a golden border. Paired with traditional jewelry, including necklaces, bangles, and rings', 3500.00),
(8, 'muskan', 'Golden Radiance Saree', 'images/M2.jpg', 'Embrace the allure of tradition with this vibrant yellow saree, intricately adorned with golden embroidery. The pallu, featuring colorful floral patterns, drapes gracefully over the shoulder, adding a touch of elegance', 4500.00),
(13, 'muskan', 'Emerald Elegance Saree', 'images/M1.jpg', 'Adorn yourself in this stunning green saree embellished with intricate gold embroidery. Paired with a matching blouse and traditional accessories, this ensemble radiates grace and sophistication', 5500.00),
(14, 'muskan', 'Elegant Essence Dress', 'images/GH2.jpg', 'Stand out in this stunning white traditional dress, featuring vibrant embroidery and intricate patterns. Perfect for special occasions with its flowing skirt and detailed artistry. Complemented with matching jewelry for added elegance.', 3000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
