<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Image</title>

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

        <div class="login_logout">
            <div class="btn-group">
                <button type="button" class="btn btn--register dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <form action="#">
                        Username: <input type="text" name="username"><br>
                        Password: <input type="password" name="pwd" maxlength="10"><br>
                        <button type="button" class="btn btn--register">
                            forgot?
                        </button>
                        <input type="submit" class="btn btn-default">
                    </form>
                </ul>
            </div>
            <ul>
                <li><a href="#" class="nav-item-logout">Logout</a></li>
            </ul>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn--register dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Register <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <form action="#">
                    Username: <input type="text" name="username"><br>
                    Email: <input type="email" name="email"><br>
                    Password: <input type="password" name="pwd" maxlength="10"><br>
                    Password Verify: <input type="password" name="pwd" maxlength="10"><br>
                    <input type="submit" class="btn btn-default">
                </form>
            </ul>
        </div>

    </nav><!-- END of .nav -->

</header><!--End of Navigation and Header-->

<h2>Your uploads</h2>

<div class="content">
    <div class="photo-gallery">
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>
        <a class="photo-gallery__link" href='details.php'>
            <div class="thumbnail">
                <div class="highlight">
                    <button class="cross">&#735; Delete</button>
                    <p class="thumbnail--title">title</p>
                    <p class="thumbnail--description">description</p>
                    <p class="thumbnail--date-time">date/time</p>
                    <a href="upload.php">Edit</a>
                </div>
            </div>
        </a>

    </div><!-- end of .photo-gallery -->

    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div><!-- end of .content -->


<footer class="footer">&copy; Copyright text with dynamic date</footer>
</body>
</html>