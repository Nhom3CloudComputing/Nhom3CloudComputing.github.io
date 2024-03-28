<?php
include("config.php");
include("firebase_connect.php");

$name = $_POST['username_sign'];
$email = $_POST['email_sign'];
$password = $_POST['password_sign'];

if ($name == "") {
    $_SESSION['error_sign'] = "Name is required";
    header("Location: signup.php");
    exit();  
} elseif ($email == "") {
    $_SESSION['error_sign'] = "Email is required";
    header("Location: signup.php");
    exit(); 
} elseif ($password == "") {
    $_SESSION['error_sign'] = "Password is required";
    header("Location: signup.php");
    exit(); 
} else {
    $firebase = new firebaseRDB($datbase_url);
    $retrieve = $firebase->retrieve("/user", "email", "EQUAL", $email);
    $data = json_decode($retrieve, true);

    if (!empty($data)) {
        // Email exists in the database
        $_SESSION['error_sign'] = "Email already in use";
    } else {
        // Email doesn't exist, proceed with registration
        $insert = $firebase->insert("/user", [
            "name" => $name,
            "email" => $email,
            "password" => $password
        ]);
        $result = json_decode($insert);
        if (isset($result->name)) {
            // $_SESSION['success'] = "Your account has been created successfully!";
            header("Location: signup_success.php?success=Your account has been created successfully!");
            exit();
        } else {
            $_SESSION['error_sign'] = "Failed to register";
        }
    }
}

?>
