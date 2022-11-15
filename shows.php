<?php

include 'connection.php';

?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">


<head>
    <!-- Basic need -->
    <title>Open Pediatrics</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/showtimes.css">

</head>

<body style="background-color:black;">
    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->
    <!--login form popup-->

    <!-- regex -->
    <!-- pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" -->
    <!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" -->

    <!--end of login form popup-->
    <!--signup form popup-->
    <?php
    include 'loginform.php';
    ?>

    <div class="login-wrapper" id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="#">
                <div class="row">
                    <label for="username-2">
                        Username:
                        <input type="text" name="username" id="username-2" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="email-2">
                        your email:
                        <input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="password-2">
                        Password:
                        <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="repassword-2">
                        re-type Password:
                        <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <button type="submit">sign up</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <?php

    include 'frontheader.php';

    ?>
    <!-- END | Header -->

    <section class="showtimes" style="padding-top:50px; padding-bottom:50px;" id="showtimes">
        <div class="container">
            <div class="showtimes-content">
                <h1 style="color: white;">Show Times</h1>

                <div class="row">
                    <?php
                    $showtimes = "SELECT * FROM showtimes JOIN movies ON showtimes.movieId = movies.movieId
                        JOIN cinemas on cinemas.cinemaId = showtimes.cinemaId";

                    $result = mysqli_query($connection, $showtimes);

                    if (mysqli_num_rows($result) > 0) {
                        while ($data = mysqli_fetch_assoc($result)) { ?>
                            <div class="col-md-4 p-2" style="margin-top:10px ;">
                                <div class="image">
                                    <img src="adminpanel/uploadedimgs/<?php echo $data['movieImage'] ?>" alt="" height="100">
                                </div>
                                <h3 style="color: white;"><?php echo $data['movieName'] ?></h3>
                                <h2 style="color: white;">CINEMA <span style="color: red ;"><?php echo $data['cinemaType'] ?></span></h2>
                                <h2 style="color: white;"><?php echo $data['price'] ?> RPS </h2>
                                <p>Date : <?php echo $data['showDate'] ?></p>
                                <p>Timings : <?php echo $data['showtimings'] ?></p>
                                <p style="background-color: blue ; color:yellow; padding:2px 5px; font-family:'Courier New', Courier, monospace; font-size:16px;">
                                    <?php
                                    if (isset($_SESSION['userId'])) { ?>
                                        <a href="movietickets.php?userid=<?php echo $_SESSION['userId']; ?>&movieId=<?php echo $data['movieId']; ?>&cinemaId=<?php echo $data['cinemaId']; ?>&showId=<?php echo $data['showId'] ?>">Get Tickets</a>
                                    <?php } else { ?>
                                        <li class="loginLink" style="background-color:blue; list-style:none;"><a href="#" style="color:white; padding:7px;">LOGIN TO GET TICKETS</a></li>
                                    <?php }
                                    ?>


                                </p>

                            </div>
                    <?php  }
                    }

                    ?>
                </div>
            </div>
        </div>
    </section>

    <!--end of latest new v1 section-->
    <!-- footer section-->
    <footer class="ht-footer">
        <div class="container">
            <div class="flex-parent-ft">
                <div class="flex-child-ft item1">
                    <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
                    <p>5th Avenue st, manhattan<br>
                        New York, NY 10001</p>
                    <p>Call us: <a href="#">(+01) 202 342 6789</a></p>
                </div>
                <div class="flex-child-ft item2">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blockbuster</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item3">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item4">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Watchlist</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">User Guide</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item5">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your email...">
                    </form>
                    <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
                </div>
            </div>
        </div>
        <div class="ft-copyright">
            <div class="ft-left">
                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
            </div>
            <div class="backtotop">
                <p><a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a></p>
            </div>
        </div>
    </footer>
    <!-- end of footer section-->

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>