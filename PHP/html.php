<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Fusion</title>
<style>
     body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        #suggestions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        #suggestions div {
            background: #fff;
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
            text-align: center;
            width: calc(50% - 20px);
            box-sizing: border-box;
            position: relative;
        }
        #suggestions img {
            width: 70%;
            height:700px;
        }
        .description {
            font-size: 45px;
            font-style: italic;
        }
        .even-row > .description {
            order: 2; /* Ensure even items have description last */
        }
        .explore-button {
            display: inline-block;
            padding: 20px 40px;
            background: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
        }
        .explore-button:hover {
            background: #555;
        }
        </style>
    
</head>
<body>
    <header>
    
               <h1>Fashion Fusion</h1>
        <h2>where standards meet perfection</h2>
        <nav>
            <ul>
                <li><a href="html.php">Home</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="wishlist.php">Wishlist</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        
     
    </header>
    <main>
        <section id="suggestions">
           
            <!-- Static product suggestions -->
            <div class="odd-row">
                <p class="description">"Find your entire Style in one place."</p>
                <img src="images/h3.jpg" alt="Product Image 1">
            </div>
            <div class="even-row">
                <img src="images/h7.jpg" alt="Product Image 2">
                <p class="description">"Professional & Polished: Elevate Your Work Wardrobe. Dress for success with our refined business attire."</p>
            </div>
            <div class="odd-row">
                <p class="description">"Complete Your Look From chic dresses and elegant gowns to casual wear and business attire, find everything you need in one place."</p>
                <img src="images/h4.jpg" alt="Product Image 3">
            </div>
            <div class="even-row">
                <img src="images/h1.jpg" alt="Product Image 4">
                <p class="description">"Step into Style: Discover the Hottest New Trends. Be the first to flaunt our latest collections."</p>
            </div>
            <div class="odd-row">
                <p class="description">"Elegance Redefined: Perfect Dresses for Every Special Occasion. Transform your look with our stunning dresses."</p>
                <img src="images/h8.jpg" alt="Product Image 5">
            </div>
            <div class="even-row">
                <img src="images/h6.jpg" alt="Product Image 4">
                <p class="description">"From Top to Bottom style yourself like a Diva."</p>
            </div>
            <div class="odd-row">
                <p class="description">"Shop by occasion, style, or season, and let us be your personal fashion guide."</p>
                <img src="images/h2.jpg" alt="Product Image 5">
            </div>
            <div class="even-row">
                <img src="images/h5.jpg" alt="Product Image 4">
                <p class="description">"Simplify your shopping experience with our easy-to-navigate categories."</p>
            </div>
        </section>
        <div style="text-align: center; margin: 20px 0;">
            <a href="categories.php" class="explore-button">Explore Now</a>
        </div>
    </main>
</body>
</html>
