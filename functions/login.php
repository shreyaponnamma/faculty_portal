<?php
    include '../config/config.php';
    session_start();
    $loginid = $_POST['id'];
    $password = $_POST['pass'];

    $sql = "select * from login where loginid ='$loginid' and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows >0) {
        while ($row=$result->fetch_assoc()) {
            $loginid = $row['id'];
            $username = $row['name'];
            $role = $row['role'];

            $_SESSION['name'] = $username;
            $_SESSION['loginid'] = $loginid;
            $_SESSION['role'] = $role;
        }


           if($role == 'admin') {
               header('location:../public/admin.php');
               exit();
           } else {
               header('location:../public/index.php');
           }
        //}

    }else
        header('location: log_in.php');