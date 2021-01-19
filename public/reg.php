

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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
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
        <div class="section section-nude">
            <div class="container">
                <h3>Add Faculty Details</h3>
                <form method="post" action="../functions/new_faculty.php">
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <h6>Photo</h6>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
                                    <img src="assets/img/image_placeholder.jpg" alt="Placeholder" id="previewImg">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="photo" onchange="previewFile(this);"></span>
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