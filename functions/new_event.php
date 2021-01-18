<?php
session_start();


include "../config/config.php";

if (!isset($_SESSION['role'])) {
    header("Location:../");
}
if ($_SESSION['role'] != 'admin') {
    header("Location:../");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $Sdate = mysqli_real_escape_string($conn, $_POST["start"]);
    $Edate = mysqli_real_escape_string($conn, $_POST["end"]);
    $expen = mysqli_real_escape_string($conn, $_POST["expen"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $members = mysqli_real_escape_string($conn, $_POST["members"]);
    $audience = mysqli_real_escape_string($conn, $_POST["audience"]);
    $report = mysqli_real_escape_string($conn, $_POST["report"]);


    $query1 = "INSERT INTO events (eventname,eventstartdate,eventenddate,totalexpenditure,eventtype,eventmembers,targetaudience,eventreport) VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($query1);
    $stmt->bind_param('sssdssss',$name, $Sdate, $Edate, $expen, $type, $members, $audience, $report);
    if ($stmt->execute()) {
        echo "<script>alert('Event added')</script>";
        echo "<script>window.location.replace('../public/event_details.php')</script>";
    } else {
        error_log($stmt->error);
        echo "<script>alert('Event insertion failed !!')</script>";
        echo "<script>window.location.replace('../public/event_details.php')</script>";
    }



}