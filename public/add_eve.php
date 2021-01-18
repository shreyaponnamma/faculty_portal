
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Add Event</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="assets/css/examples.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body class="add-product">
<nav class="navbar navbar-ct-primary" role="navigation-demo">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Creative Tim</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
            <ul class="nav navbar-nav navbar-right">


                <li>
                    <a href="#" class="btn btn-icon btn-sm btn-fill" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <span class="label label-danger notification-bubble">2</span>
                </li>
                <li class="dropdown">
                    <a href="#" class="profile-photo dropdown-toggle" data-toggle="dropdown">
                        <div class="profile-photo-small">
                            <img src="assets/img/cristina.jpg" alt="Circle Image" class="img-circle img-responsive img-no-padding">
                        </div>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Me</a></li>
                        <li><a href="#">Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sign out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->
</nav>



<div class="wrapper">
    <div class="main">
        <div class="section section-nude">
            <div class="container">
                <h3>Add Event</h3>
                <form method="post" action="../functions/new_event.php">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="form-group">
                                <h6> Event Name <span class="icon-danger">*</span></h6>
                                <input type="text" name="name" class="form-control border-input" placeholder="Event name">
                            </div>
                            <div class="row price-row">
                                <div class="col-md-6">
                                    <h6> Start Date <span class="icon-danger">*</span></h6>
                                    <div class="input-group border-input">
                                        <input type="date" name="start" value="" placeholder="enter start date" class="form-control border-input">
                                        <span class="input-group-addon"></span>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <h6>End Date</h6>
                                    <div class="input-group border-input">
                                        <input type="date" name ="end" value="" placeholder="enter end date" class="form-control border-input">
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Expenditure <span class="icon-danger">*</span></h6>
                                <input type="text" name="expen" class="form-control border-input" placeholder="enter expenditure">
                            </div>
                            <div class="form-group">
                                <h6>Event type <span class="icon-danger">*</span></h6>
                                <input type="text" name="type" class="form-control border-input" placeholder="enter event type">
                            </div>
                            <div class="form-group">
                                <h6>Event members <span class="icon-danger">*</span></h6>
                                <input type="text" name="members" class="form-control border-input" placeholder="enter event memers">
                            </div>
                            <div class="form-group">
                                <h6>Event Audience <span class="icon-danger">*</span></h6>
                                <input type="text" name="audience" class="form-control border-input" placeholder="enter audience">
                            </div>

                            <div class="form-group">
                                <h6>REPORT</h6>
                                <textarea name="report" class="form-control textarea-limited border-input" placeholder="This is a textarea limited to 150 characters." rows="7", data-limit="150" ></textarea>
                                <h5><small><span id="textarea-limited-message" class="pull-right">150 characters left</span></small></h5>
                            </div>
        
                    </div>


                    <div class="row buttons-row">
                        <div class="col-md-4 col-sm-4">
                            <button class="btn btn-danger btn-block">Cancel</button>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button class="btn btn-primary btn-block">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<footer class="footer-demo footer-black">
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
<script src="assets/js/jquery.tagsinput.js"></script>

<!--  for fileupload -->
<script src="assets/js/jasny-bootstrap.min.js"></script>

<script src="assets/js/ct-paper.js"></script>

</html>