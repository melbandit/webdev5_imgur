<?php include __DIR__ . '/../includes/functions.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Homepage</title>

    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="page">

<header class="header">
    <div class="header__logo">
        <a href="index.php">
            <img class="header__logo--sm" src="assets/img/#">
            <img class="header__logo--lg" src="assets/img/#">
        </a>
        <!--        <div class="cross-bkg"></div>-->
        <!--        <button class="cross">&#735;</button>-->
    </div>

    <nav class="header navigation">
        <!--        <ul class="menu-hamburger">-->
        <!--            <li><a href="#menu" class="nav-item" id="menu">Menu</li>-->
        <!--            <li><a href="shows.html" class="nav-item closed">Shows</a></li>-->
        <!--            <li><a href="http://www.adultswim.com/games/" class="nav-item closed" >Games</a></li>-->
        <!--            <li><a href="http://www.adultswim.com/music/" class="nav-item closed">Music</a></li>-->
        <!--            <li><a href="login.php" class="nav-item-login closed">Login</a></li>-->
        <!--        </ul>-->

        <!--        <ul class="menu-md">-->
        <!--            <li><a href="http://www.adultswim.com/music/" class="nav-item">Music</a></li>-->
        <!--            <li><a href="http://www.adultswim.com/games/" class="nav-item" >Games</a></li>-->
        <!--            <li><a href="shows.html" class="nav-item">Shows</a></li>-->
        <!--        </ul>-->
        <button class="btn upload"><a href="upload.php"><span class="glyphicon glyphicon-upload"></span> UPLOAD</a></button>

        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-md"><span class="glyphicon glyphicon-search"></span></button>
        </form>



       <?php
       include __DIR__ . '/login.php';
       include __DIR__ . '/registration.php';
       ?>

    </nav><!-- END of .nav -->

</header><!--End of Navigation and Header-->