<?php
session_start();
include "db_conn.php";

if(isset($_POST['email']) && isset($_POST['password'])){
    function validation($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validation($_POST['email']);
    $password = validation($_POST['password']);
    if(empty($email)){
        header ("Location: login.php?error=Email is required");
        exit();
    }
    else if(empty($password)){
        header ("Location: login.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM login_user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $email && $row['password'] == $password){
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header ("Location: shop.php");
                exit();
            }
        }
        else{
            header ("Location: login.php?error=In correct Email or Password");
            exit();
        }
    }
}
else{
    header ("Location: login.php");
    exit();
}