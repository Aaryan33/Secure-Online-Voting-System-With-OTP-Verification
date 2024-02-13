<?php
    session_start();
    include("connection.php");

    if (isset($_POST['loginbtn'])) {

        $mobile = $_POST['mob'];
        $pass = $_POST['pass'];
        $otp = $_POST['otp']; 
        $role = $_POST['role'];

        $check = mysqli_query($connect, "SELECT * from user where mobile='$mobile' and password='$pass' and role='$role' and otp='$otp'");

        if (mysqli_num_rows($check) > 0) {

            $getGroups = mysqli_query($connect, "SELECT name, photo, votes, id from user where role=2 ");
            if (mysqli_num_rows($getGroups) > 0) 
            {
                $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
                $_SESSION['groups'] = $groups;
            }

            $data = mysqli_fetch_array($check);
            $_SESSION['id'] = $data['id'];
            $_SESSION['status'] = $data['status'];
            $_SESSION['data'] = $data;

            echo '<script>
                window.location = "../routes/dashboard.php";
            </script>';
        } 
        else 
        {
            echo '<script>
                alert("Invalid credentials or OTP!");
                window.location = "../";
            </script>';
        }
    }
?>
