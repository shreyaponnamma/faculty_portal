

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin Page</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="assets/css/examples.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body class="presentation-page">
<nav class="navbar navbar-ct-danger navbar-relative navbar-transparent" role="navigation-demo" id="demo-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="https://vvce.ac.in/department/computer-science-engineering/">
                <div class="logo-container">
                    <div class="logo">
                        <img src="assets/img/new_logo.png" alt="Creative Tim Logo">
                    </div>
                    <div class="brand">
                        VVCE
                    </div>
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

<div class="wrapper">
    <div class="main">
        <div class="section section-header section-dark section-dark-filter">
            <div class="image-background">
                <img src="../images/vvce.jpg" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-1">
                        <div class="card card-image card-shadow">
                            <img src="assets/img/presentation-page/mandala.jpg" alt="" width="550" height="380"/>
    
                            <small>Vidya Vardhaka College of Engineering</small>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="section section-examples section-dark" id="examples">
            <div class="container">
                <div class="row">
                    <div class="title text-center">
                        <h4>Dept of Computer Science & Engineering</h4>
                        <p>The Department of Computer Science and Engineering shall create professionally competent and socially responsible engineers capable of working in global environment.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="details-text">
                            Add Faculty Details
                        </div>
                        <div class="card card-image card-hover-effect">
                            <a target="_blank" href="reg.php">
                                <img src="assets/img/presentation-page/examples/twitter-redesign.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="details-text">
                            Add Event Details
                        </div>
                        <div class="card card-image">
                            <a target="_blank" href="add_eve.php">
                                <img src="assets/img/presentation-page/examples/twitter-redesign.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="details-text">
                            Faculty Details
                        </div>
                        <div class="card card-image">
                            <a target="_blank" href="fac_card.php">
                                <img src="assets/img/presentation-page/examples/blog.jpg">
                            </a>
                        </div>

                    </div>


                    <div class="col-md-3">
                        <div class="details-text">
                            Event Details
                        </div>
                        <div class="card card-image">
                            <a target="_blank" href="event_details.php">
                                <img src="assets/img/presentation-page/examples/blog.jpg">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</body>

<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="assets/js/ct-paper-checkbox.js"></script>
<script src="assets/js/ct-paper-radio.js"></script>
<script src="assets/js/bootstrap-select.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!--  Plugins for presentation page -->
<script src="assets/js/presentation-page/atv-img-min.js"></script>
<script src="assets/js/presentation-page/jquery.sharrre.js"></script>

<!-- Paper kit Core Functions -->
<script src="assets/js/ct-paper.js"></script>
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
    $().ready(function(){
        atvImg();

        window_width = $(window).width();

        if (window_width >= 768) {
            $(window).on('scroll', demo.checkScrollForPresentationPage);
        }

        demo.initSharingButtons();
    });
</script>
</html>
