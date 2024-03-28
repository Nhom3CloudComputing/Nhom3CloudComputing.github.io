<?php
include("config.php");
include("firebase_connect.php");

$name = $_POST['username_sign'];
$email = $_POST['email_sign'];
$password = $_POST['password_sign'];

if ($name == "") {
    $_SESSION['error_sign'] = "Name is required";
} elseif ($email == "") {
    $_SESSION['error_sign'] = "Email is required";
} elseif ($password == "") {
    $_SESSION['error_sign'] = "Password is required";
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
            $_SESSION['success'] = "Your account has been created successfully!";
            // header("Location: test_login.php?success_title_signup=Your account has been created successfully!");
        } else {
            $_SESSION['error_sign'] = "Failed to register";
        }
    }
}

header("Location: test_signup.php");
exit(); 
?>
