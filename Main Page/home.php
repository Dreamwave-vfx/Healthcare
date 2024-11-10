<?php
    // include("connection.php");
    include("login.php");   
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles/home.css">
    <title>Document</title>
</head>

<body>

    <header>
        <a href="#" class="logo">My <span>Health</span></a>

        <ul class="navbar">
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="lifeinfo.php">Update</a></li>
            <li><a href="index.php">Log out</a></li>
        </ul>

        <div class="top-btn">
            <a href="http://localhost:3000/" class="nav-btn">ChatBot</a>
        </div>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, 
                <?php include("login.php"); 
                echo $_GET['user'];
                ?>
                </h3>
            <h3><span class="multiple-text">DO <span class="auto-type"></span></span></h3>
            <button class="MainBTN" style="color: #ffffff;
    margin-top:30px;    
    width: 300px;
    font-size:30px;
    height: 50px;
    border-radius:10px;
    background-color:#00ab41;"
    onclick="window.location.href = 'meet.html';">Talk to Doctor</button><br>
            <button class="MainBTN" style="color: #ffffff;
    margin-top:20px;
    font-size:30px;
    width: 300px;
    height: 50px;
    border-radius:10px;
    background-color:#00ab41;"
    onclick="window.location.href = 'meet.html';">Patient portal</button>

        </div>
         <div class="home-img">
            <img src="Home/ing1.jpg">
        </div>
    
    </section>

    <section class="services" id="section">
        <h2 class="heading">Make your <span>Health</span></h2>
        <div class="s-content">
            <div class="row">
                <video name="food" type autoplay loop onclick="window.location.href = 'food.php';">
                    <source src="Home/food.mp4" type="video/mp4">
                </video>
                <h4>FOOD</h4>
            </div>
            <div class="row">
                <video name="exer" autoplay loop onclick="window.location.href = 'exercise.html';">
                    <source src="Home/exercise.mp4" type="video/mp4">
                </video>
                <h4>EXERCISE</h4>
            </div>

        </div>
            
    </section>
    <h1 style="text-align:center;font-size:50px" id="aboutus">About Us</h1><br><br>
    <table style="margin:auto;">
        <tr>
            <th>Help & Information</th>
            <th>About Us</th>
        </tr>
        <br>
        <tr>
            <td><a href="#">Help</a></td>
            <td><a href="#">About Us</a></td>
        </tr>
        <tr>
            <td><a href="#">Term & Conditions</a></td>
            <td><a href="#">Contact Us</a></td>
        </tr>
    </table>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js">
    </script>
    <script src="script.js"></script>
<body>

</html>