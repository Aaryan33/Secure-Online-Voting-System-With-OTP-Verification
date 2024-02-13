<?php

    include("connection.php");

    if (isset($_POST['registerbtn'])) {

        $name = $_POST['name'];
        $mobile = $_POST['mob'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $add = $_POST['add'];
        $email = $_POST['email']; 
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $role = $_POST['role'];

        if ($cpass != $pass) 
        {
            echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
        } 

        else 
        {
            move_uploaded_file($tmp_name, "../uploads/$image");
            
            $otp = mt_rand(100000, 999999);

            $to = $email;
            $subject = "OTP for Online Voting System Registration";
            $from = "aaryanp070@gmail.com";
            $fromName = "patel";
            $message = "Your OTP is: $otp";
            $headers = "From: ".$fromName."<".$from.">"; 

            mail($to, $subject, $message, $headers);

            $insert = mysqli_query($connect, "INSERT into user (name, mobile, password, address, email, photo, status, votes, role, otp) values('$name', '$mobile', '$pass', '$add', '$email', '$image', 0, 0, '$role', '$otp')");
            if ($insert) 
            {
                echo '<script>
                    alert("Registration successful! An OTP has been sent to your email. Check your email and verify your account.");
                    window.location = "../";
                </script>';
            }
        }
    }
?>
