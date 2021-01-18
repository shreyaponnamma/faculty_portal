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
    $usn = mysqli_real_escape_string($connect, $_POST["usn"]);
    $mno = mysqli_real_escape_string($connect, $_POST["mno"]);
    $date = mysqli_real_escape_string($connect, $_POST["date"]);
    $title = mysqli_real_escape_string($connect, $_POST["title"]);
    $level = mysqli_real_escape_string($connect, $_POST["level"]);
    $eve = mysqli_real_escape_string($connect, $_POST["eva"]);


    $query1 = "INSERT INTO speech (usn,m_no,date,title,level,evaluator) VALUES(?,?,?,?,?,?)";
    $stmt = $connect->prepare($query1);
    $stmt->bind_param('sdssss',$usn, $mno, $date, $title, $level, $eve);
    if ($stmt->execute()) {
        echo "<script>alert('Speech added')</script>";
        echo "<script>window.location.replace('../public/speech_detail.php')</script>";
    } else {
        error_log($stmt->error);
        echo "<script>alert('Speech insertion failed !!')</script>";
        echo "<script>window.location.replace('../public/speech_detail.php')</script>";
    }



}