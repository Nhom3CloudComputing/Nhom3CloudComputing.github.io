
<?php
include("config.php");
include("firebase_connect.php");

$email = $_POST['email'];
$password = $_POST['password'];
if($email == ""){
    $_SESSION['error'] = "Email is required";
}
else if($password == ""){
    $_SESSION['error'] = "Password is required";
}
else{
    $firebase = new firebaseRDB($datbase_url);
    $retrieve = $firebase->retrieve("/user", "email", "EQUAL", $email);
    $data = json_decode($retrieve, 1);

    if(count($data) == 0){
        $_SESSION['error'] = "Email is registered";
    }
    else{
        $id =  array_keys($data)[0];
        if($data[$id]['password'] == $password){
            $_SESSION['user'] = $data[$id];
            header("location: test_home.php");
            exit();
        }
        else{
            $_SESSION['error'] = "In correct Email or Password";
        }
    }
}

header("Location: test_login.php");
exit();