<?php
session_start();


include "../config/config.php";



if (isset($_POST["input_name"]) && is_array($_POST["input_name"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $Sdate = mysqli_real_escape_string($conn, $_POST["start"]);
    $Edate = mysqli_real_escape_string($conn, $_POST["end"]);
    $expen = mysqli_real_escape_string($conn, $_POST["expen"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    //$members = mysqli_real_escape_string($conn, $_POST["members"]);
    $audience = mysqli_real_escape_string($conn, $_POST["audience"]);
    $report = mysqli_real_escape_string($conn, $_POST["report"]);

    $input_name = $_POST["input_name[]"];
    $sql = "select max(eid) as latest from events";
    $row = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($row);
    $max_eid = $result['latest'];

    foreach ($input_name as $column) {
        $sql = "insert into event_sub (eid,fid) VALUES ('$max_eid','$column')";
        $row = mysqli_query($conn, $sql);
    }


    $query1 = "INSERT INTO events (eventname,eventstartdate,eventenddate,totalexpenditure,eventtype,targetaudience,eventreport) VALUES(?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($query1);
    $stmt->bind_param('sssdsss', $name, $Sdate, $Edate, $expen, $type, $audience, $report);

    if ($stmt->execute()) {
        echo "<script>alert('Event added')</script>";
        echo "<script>window.location.replace('../public/event_details.php')</script>";
    } else {
        error_log($stmt->error);
        echo "<script>alert('Event insertion failed !!')</script>";
        echo "<script>window.location.replace('../public/event_details.php')</script>";
    }

}

