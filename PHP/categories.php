<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    
    
    
    <style>
        /* Layout for the categories grid */
        .category-items {
            width: 80%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Ensures 2 images per row */
            gap: 20px;
            text-align: center;
            color: #333;
            box-sizing: border-box;
            justify-content: center; /* Centers the grid */
        }

        /* Style for each category item */
        .category {
            border: 1px solid #ddd;
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column; /* Ensures vertical alignment */
            align-items: center; /* Centers content horizontally */
        }

        /* Style for category images */
        .category img {
            width: 500px; /* Fixed width for all images */
            height: 500px; /* Fixed height for all images */
            object-fit: cover; /* Ensures aspect ratio is maintained while filling the container */
        }

        /* Style for colorful buttons */
        button {
            background-color: #4c08aa; /* Button background color */
            color: #fff; /* Button text color */
            border: none;
            padding: 10px 15px;
            margin: 5px;
            cursor: pointer;
            font-size: 1em; /* Font size */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth transition */
        }

        /* Define different colors for each button */
        .category:nth-child(odd) button {
            background-color: #a310e7; /* Example color */
        }

        .category:nth-child(even) button {
            background-color: #12b8d9; /* Example color */
        }

        /* Hover effect for buttons */
        button:hover {
            background-color: #064e4d; /* Slightly darker color on hover */
        }
    </style>
</head>
<body>
    <header>
        <h1>Categories</h1>
       
    </header>

    <main>
        <section class="category-items">
            <div class="category">
                <img src="images/MM.jpg" alt="Maharashtrian style">
                <button onclick="location.href='mh.php'">Maharashtrian style</button>
            </div>
            <div class="category">
                <img src="images/GG.jpg" alt="Gujarati style">
                <button onclick="location.href='gh.php'">Gujarati style</button>
            </div>
            <div class="category">
                <img src="images/PP.jpg" alt="Punjabi style">
                <button onclick="location.href='pb.php'">Punjabi style</button>
            </div>
            <div class="category">
                <img src="images/KK.jpg" alt="Kashmiri style">
                <button onclick="location.href='kh.php'">Kashmiri style</button>
            </div>
            <div class="category">
                <img src="images/ss.jpg" alt="SouthIndian style">
                <button onclick="location.href='st.php'">SouthIndian style</button>
            </div>
            <div class="category">
                <img src="images/sa8.jpg" alt="Amazing Sarees">
                <button onclick="location.href='sa.php'">Amazing Sarees</button>
            </div>
            <div class="category">
                <img src="images/ff.jpg" alt="Formal wear">
                <button onclick="location.href='fm.php'">Formal wear</button>
            </div>
            <div class="category">
                <img src="images/ww.jpg" alt="Special Wedding Collection">
                <button onclick="location.href='wd.php'">Special Wedding Collection</button>
            </div>
        </section>
    </main>

    
</body>
</html>
