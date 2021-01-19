<?php

include('../config/config.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Faculty Detils</title>

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
            <a href="#">
                <div class="logo-container">
                    <div class="logo">
                        <img  src="../images/cs.png" >
                    </div>

                    <h5 style="color: black">Department of Computer Science & Engineering</h5>

                </div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--<li>
                    <a class="btn btn-neutral btn-simple" data-id="#components" data-scroll="true" href="javascript:void(0)">Components</a>
                </li>
                <li>
                    <a class="btn btn-neutral btn-simple" data-id="#examples" data-scroll="true" href="javascript:void(0)">Examples</a>
                </li>
                <li>
                    <a class="btn btn-neutral btn-simple" data-id="#demoPay" data-scroll="true" href="javascript:void(0)">Free Demo</a>
                </li>-->
                <li>
                    <a href="../functions/logout.php" class="btn btn-danger btn-fill"><i class="fa fa-power-off"></i> Log out</a>
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
                        $id = $result['fid'];

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
                                <button id='".$id."' onClick ='user(this.id)'  type='submit' class=\"btn btn-icon\"><i class=\"ti-edit\"></i> View Profile</input>
                            </div>
                        </div>
                    </div>";
                    }
?>

                </div>

            </div>
        </div>
    </div>
</div>

<script type ="text/javascript">
    function user(clicked_id) {
        if (window.confirm('Do you want to view?')){
            window.location.href = ("user.php?id="+clicked_id);

        } else {
            die();
        }
    }
</script>
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
