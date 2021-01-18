<?php
session_start();

include('../config/config.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Event Details</title>

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
                <div class="tim-title">
                    <h3>Event Details</h3>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <h4><small>Simple With Actions</small></h4>
                        <div class="table-responsive">
                            <?php echo"   <table class='table'>
                                    <thead class='text-primary'>
                                    <th>
                                        Event Id
                                    </th>
                                    <th>
                                       Name
                                    </th>
                                    <th>
                                        Start Date
                                    </th>
                                    <th >
                                        End Date
                                    </th>
                                    <th>
                                        Expenditure
                                    </th>
                                    <th>
                                        Type
                                    </th>
                                    <th>
                                        Members
                                    </th>
                                    <th>
                                        Target Audience
                                    </th>
                                    </thead>";


                            $sql = "select * from events";
                            $row = mysqli_query($conn, $sql);
                            while ($result = mysqli_fetch_assoc($row)) {
                                $id1 = $result['eid'];
                                echo "<tr>
                                        <td>" . $result['eid'] . "</td>
                                        <td>" . $result['eventname'] . "</td>
                                        <td>" . $result['eventstartdate'] . "</td>
                                        <td>" . $result['eventenddate'] . "</td>
                                        <td>" . $result['totalexpenditure'] . "</td>
                                        <td>" . $result['eventtype'] . "</td>
                                        <td>" . $result['eventmembers'] . "</td>
                                        <td>" . $result['targetaudience'] . "</td>   
                                        
                                        <td class=\"td-actions text-right\">
                                        <button type=\"button\" rel=\"tooltip\" title=\"View Profile\" class=\"btn btn-info btn-simple btn-sm\">
                                            <i class=\"fa fa-user\"></i>
                                        </button>
                                        <button type=\"button\" rel=\"tooltip\" title=\"Edit Profile\" class=\"btn btn-success btn-simple btn-sm\">
                                            <i class=\"fa fa-edit\"></i>
                                        </button>
                                        <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-sm\">
                                            <i class=\"fa fa-times\"></i>
                                        </button>
                                    </td>                                
                                         
                                    </tr>";

                            }
                            ?>


                            </table>
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
<script src="assets/js/jquery.tagsinput.js"></script>

<!--  for fileupload -->
<script src="assets/js/jasny-bootstrap.min.js"></script>

<script src="assets/js/ct-paper.js"></script>

</html>