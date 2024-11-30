<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Navigation with Dropdown</title>
    <style>
    /* Basic Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Side Navigation Styles */
    .cus-sidenav {
        height: 100%;
        width: 250px;
        font-size: 18px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: white;
        padding-top: 20px;
        z-index: 9999;
    }

    .cus-sidenav a {
        display: block;
        color: #001070;
        border-bottom: 1px solid black;
        padding: 5px 15px;
        text-decoration: none;
    }

    .cus-sidenav a:hover {
        background-color: white;
        color: black;
    }

    /* Dropdown Styles */
    .cus-dropdown {
        position: relative;
    }

    .cus-dropdown .cus-dropbtn {
        background-color:white;
        color: #001070;
        border: none;
        width: 100%;
        text-align: left;
        padding: 10px;
        cursor: pointer;

        border-bottom: 1px solid black;
        padding: 5px 15px;
    }

    .cus-dropdown:hover .cus-dropbtn {
        background-color: white;
        color: black;
    }

    .cus-dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 250px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        top: 100%;
        left: 2%;
    }

    .cus-dropdown-content a {
        color: #001070;
        font-size: 1rem;
        text-decoration: none;
        display: block;
        border-bottom: 1px solid black;
        padding: 5px 15px;
    }


    .cus-dropdown:hover .cus-dropdown-content {
        display: block;
    }

    /* Responsive for Mobile */
    @media screen and (max-width: 768px) {
        .cus-sidenav {
            width: 100%;
            height: auto;
            position: relative;
        }

    }
    </style>
</head>

<body>

    <!-- Side Navigation -->
    <div class="cus-sidenav">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>

        <!-- Dropdown Menu -->
        <div class="cus-dropdown">
            <button class="cus-dropbtn">Products</button>
            <div class="cus-dropdown-content">
                <a  href="construction-&-augar-pilling.php">Construction & Augar
                    Piling</a>
                <a  href="geo-exploration.php">Geo Exploration</a>
                <a  href="mining.php">Mining</a>
                <a  href="soil-testing.php">Soil Testing</a>
                <a  href="water-well.php">Water Well</a>

            </div>
        </div>

        <a href="accessories.php">Accessories</a>
        <a href="blogs.php">Blogs</a>
        <a href="contact.php">Contact</a>
    </div>

</body>

</html>