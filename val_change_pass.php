<?php
session_start(); // Start the session

include("config.php");
include("firebase_connect.php");

$email = $_POST['email_change_'];
$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];
$confirm_pass = $_POST['confirm_pass'];

if($email == ""){
    $_SESSION['error_change'] = "Email is required";
} else if ($old_pass == "") {
    $_SESSION['error_change'] = "Old pass is required";
} else if ($new_pass == "") {
    $_SESSION['error_change'] = "New password is required";
} else if ($confirm_pass == "") {
    $_SESSION['error_change'] = "Confirm password is required";
} else {
    if ($new_pass != $confirm_pass) {
        $_SESSION['error_change'] = "Passwords do not match";
    } else {
        // Tạo một đối tượng firebaseRDB với URL của cơ sở dữ liệu
        $firebase = new firebaseRDB($datbase_url);
        // Truy xuất dữ liệu từ node "/user" trong cơ sở dữ liệu, trong đó trường "email" bằng "password_mail"
        $retrieve = $firebase->retrieve("/user", "email", "EQUAL", $email);
        // Giải mã JSON để nhận dữ liệu dưới dạng mảng
        $data = json_decode($retrieve, true);

        if (empty($data)) {
            // Email doesn't exist, proceed with registration
            $_SESSION['error_sign'] = "Email not found";
        } else {
            $id =  array_keys($data)[0];
            $update = $firebase->update("/user", $id, [
                "password" => $new_pass
            ]);
            $result = json_decode($update);
            if ($updateResult === false) {
                // Update failed
                echo "Failed to update password.";
            } else {
                // Update successful
                echo "Password updated successfully.";
                header("location:change_pass_succ.php");
                exit();
            }
        }
    }
}

// Redirect back to the change_password.php page if there are errors
header("location: change_password.php");
exit();
?>
