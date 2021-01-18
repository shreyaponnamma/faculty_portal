

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Registration</title>

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
            <a class="navbar-brand" href="#">VVCE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
    </div><!-- /.container-->
</nav>



<div class="wrapper">
    <div class="main">
        <div class="section section-nude">
            <div class="container">
                <h3>Add Faculty Details</h3>
                <form method="post" action="../functions/new_faculty.php">
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <h6>Photo</h6>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
                                    <img src="assets/img/image_placeholder.jpg" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                    <a href="#" class="btn btn-simple btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-7 col-sm-7">
                            <div class="form-group">
                                <h6>Faculty Id <span class="icon-danger">*</span></h6>
                                <input type="text" name="id" class="form-control border-input" placeholder="Enter Faculty Id...">
                            </div>
                            <div class="form-group">
                                <h6>Name <span class="icon-danger">*</span></h6>
                                <input type="text" name="name" class="form-control border-input" placeholder="Enter Faculty Full Name...">
                            </div>
                            <div class="row price-row">
                                <div class="col-md-6">
                                    <h6>Date Of Joining<span class="icon-danger">*</span></h6>
                                    <div class="input-group border-input">
                                        <input type="text" name="date" value="" placeholder="enter price" class="form-control border-input">
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row buttons-row">

                        <div class="col-md-4 col-sm-4">
                            <button class="btn btn-primary btn-fill btn-block"> Submit </button>
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