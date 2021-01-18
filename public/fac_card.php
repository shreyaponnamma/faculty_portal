<?php

include('../config/config.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Kit by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-ct-danger navbar-fixed-top" role="navigation-demo" id="demo-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://www.creative-tim.com">
                <div class="logo-container">
                    <div class="logo">
                        <img src="assets/img/new_logo.png" alt="Creative Tim Logo">
                    </div>
                    <div class="brand">
                        Creative Tim
                    </div>
                </div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="btn btn-danger btn-simple" href="presentation.html#components">Components</a>
                </li>
                <li>
                    <a class="btn btn-danger btn-simple" href="presentation.html#examples">Examples</a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/product/paper-kit-pro" class="btn btn-danger btn-fill"><i class="fa fa-shopping-cart"></i> Buy now</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->
</nav>


<div class="wrapper demo-wrapper">
    <div class="main">
        <div class="section section-nude">
            <div class="container tim-container">
                <div class="tim-title">
                    <h2>Faculty Details</h2>
                </div>


                <div class="row">
                    <?php
                    $sql = "select * from faculty";
                    $row = mysqli_query($conn, $sql);
                    while ($result = mysqli_fetch_assoc($row)) {
                        $id1 = $result['fid'];

                        echo " <div class=\"col-md-3 col-sm-6\">
                        <div class=\"card card-user\">
                            <div class=\"image\">
                                <img src=\"assets/img/red.jpg\" alt=\"...\"/>
                            </div>
                            <div class=\"content\">
                                <div class=\"author\">
                                    <a href=\"#\">
                                        <img class=\"avatar\" src=\"assets/img/tim_vector.jpg\" alt=\"...\"/>

                                        <h4 class=\"title\">" . $result['facultyname'] . "</h4>
                                    </a>
                                </div>
                                <p class=\"description text-center\"\> ID : ".$result['fid']." <br> Date of Joining: 
                                    ".$result['dateofjoining']."
                                </p>
                            </div>
                            <div class=\"card-footer text-center\">
                                <button href=\"#\" class=\"btn btn-icon\"><i class=\"ti-edit\"></i> Edit Profile</button>
                            </div>
                        </div> <!-- end card -->
                    </div>";
                    }
?>

                </div>

            </div>
        </div>
    </div>
</div>

<footer class="footer-demo section-nude">
    <div class="container">
        <nav class="pull-left">
            <ul>

                <li>
                    <a href="http://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/product/rubik">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
        </div>
    </div>
</footer>
</body>
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="assets/js/ct-paper-checkbox.js"></script>
<script src="assets/js/ct-paper-radio.js"></script>
<script src="assets/js/bootstrap-select.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/ct-paper-bootstrapswitch.js"></script>
<script src="assets/js/chartist.min.js"></script>
<script src="assets/js/jquery.tagsinput.js"></script>

<!-- photoswipe files -->
<script src="assets/js/photo_swipe/photoswipe.min.js"></script>
<script src="assets/js/photo_swipe/photoswipe-ui-default.min.js"></script>
<script src="assets/js/photo_swipe/init-gallery.js"></script>

<!-- core js -->
<script src="assets/js/ct-paper.js"></script>
<script src="assets/js/demo.js"></script>

</html>
