<?php
session_start();


include "../config/config.php";

if ( isset($_POST['save_profile'])) {
    $fid =  $_POST["id"];
    $fname =  $_POST["name"];
    $date =  $_POST["date"];
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "../images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
        echo "<script>alert('Image size is exceeding!!')</script>";
        echo "<script>window.location.replace('../public/fac_card.php')</script>";
    }
    // check if file exists
    if(file_exists($target_file)) {
        echo "<script>alert('Event insertion failed !!')</script>";
        echo "<script>window.location.replace('../public/fac_card.php')</script>";
    }

    if (empty($error)) {
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO faculty (fid,facultyname,dateofjoining,profile_image) VALUES('$fid','$fname','$date','$profileImageName')";

                if(mysqli_query($conn, $sql)){
                    echo "<script>alert('Faculty Added')</script>";
                    echo "<script>window.location.replace('../public/fac_card.php')</script>";
                } else {
                    echo "<script>alert('Insertion failed.. Try Again !!')</script>";
                    echo "<script>window.location.replace('../public/fac_card.php')</script>";
                }
            } else {
            echo "<script>alert('There is some error.. try Again !!')</script>";
            echo "<script>window.location.replace('../public/fac_card.php')</script>";
            }

        }
    }



?>