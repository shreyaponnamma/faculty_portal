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
    $fid = mysqli_real_escape_string($conn, $_POST["id"]);
    $fname = mysqli_real_escape_string($conn, $_POST["name"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
   


    $query1 = "INSERT INTO faculty (fid,facultyname,dateofjoining) VALUES(?,?,?)";
    $stmt = $conn->prepare($query1);
    $stmt->bind_param('dss',$fid,$fname,$date);
    if ($stmt->execute()) {
        echo "<script>alert('faculty added')</script>";
        echo "<script>window.location.replace('../public/fac_card.php')</script>";
    } else {
        error_log($stmt->error);
        echo "<script>alert('faculty insertion failed !!')</script>";
        echo "<script>window.location.replace('../public/fac_card.php')</script>";
    }



}