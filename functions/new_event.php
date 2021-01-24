<?php
session_start();


include "../config/config.php";



if (isset($_POST["input_name"]) && is_array($_POST["input_name"])){
    $name =   $_POST["name"];
    $Sdate =   $_POST["start"];
    $Edate =   $_POST["end"];
    $expen =   $_POST["expen"];
    $type =   $_POST["type"];
    //$members =   $_POST["members"]);
    $audience =   $_POST["audience"];
    $report =   $_POST["report"];




    $sql = "INSERT INTO events (eventname,eventstartdate,eventenddate,totalexpenditure,eventtype,targetaudience,eventreport) VALUES('$name', '$Sdate', '$Edate', '$expen', '$type', '$audience', '$report')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Event Added')</script>";
        echo "<script>window.location.replace('../public/event_details.php')</script>";
    } else {
        echo "<script>alert('Insertion failed.. Try Again !!')</script>";
        echo "<script>window.location.replace('../public/event_details.php')</script>";
    }

    $input_name = $_POST["input_name"];
    $sql1 = "select max(eid) as latest from events";
    $row = mysqli_query($conn, $sql1);
    $result = mysqli_fetch_assoc($row);
    $max_eid = $result['latest'];

    foreach ($input_name as $key => $value) {
        $sql2 = "insert into event_sub (eid,fid) VALUES ('$max_eid','$value')";
        $row = mysqli_query($conn, $sql2);
    }


    /*   $stmt = $conn->prepare($query1);
       $stmt->bind_param('sssdsss', $name, $Sdate, $Edate, $expen, $type, $audience, $report);

       if ($stmt->execute()) {
           echo "<script>alert('Event added')</script>";
           echo "<script>window.location.replace('../public/event_details.php')</script>";
       } else {
           error_log($stmt->error);
           echo "<script>alert('Event insertion failed !!')</script>";
           echo "<script>window.location.replace('../public/event_details.php')</script>";
       }*/

}

