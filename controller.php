<?php
    include_once("connection.php");

    session_start();

    $errors = [];

if (isset($_POST['signup'])) 
{
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['confirmPassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM cusregistration WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO cusregistration (uname, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) 
            {
                echo "<script>alert('Registration Completed...!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Email Already Exists.')</script>";
        }
        
    } else 
    {
        echo "<script>alert('Password Not Matched...!')</script>";
    }
}

if (isset($_POST['login'])) 
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM cusregistration WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['uname'] = $row['uname'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Email or Password is Wrong.')</script>";
    }
}

  

?>