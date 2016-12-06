<?php
require __DIR__ . '/../includes/bootstrap.php';
?><!DOCTYPE html>
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
            <img class="header__logo--sm" src="assets/img/logo.png">
        </a>
    </div>

    <nav class="header navigation">
        <?php
        if (0 === getCurrentUserId()) {} else {?>
            <button class="btn upload"><a href="upload.php"><span class="glyphicon glyphicon-upload"></span> UPLOAD</a></button>
            <a class="userImages" href="userImages.php">my uploads</a>

            <ul>
                <li><a class="nav-item-logout" href="<?php echo APP_URL?>/?logout=true">Logout</a></li>
            </ul>
        <?php } ?>

<!--        <form class="navbar-form navbar-left" role="search">-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control" placeholder="Search">-->
<!--                <button type="submit" class="btn btn-md"><span class="glyphicon glyphicon-search"></span></button>-->
<!--            </div>-->
<!--        </form>-->

       <?php
        if (0 === getCurrentUserId()) {
            include __DIR__ . '/login.php';
            include __DIR__ . '/registration.php';
        }
       ?>

    </nav><!-- END of .nav -->

</header><!--End of Navigation and Header-->