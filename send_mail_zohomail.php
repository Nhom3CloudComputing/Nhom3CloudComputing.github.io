<?php
    include("config.php");
    include("firebase_connect.php");
    // Include PHPMailer library
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    //get password in firebase
    $password_mail = $_POST['email_sign'];
    if($password_mail == ""){
        $_SESSION['error_forgot'] = "Email is required";
    }
    else{
        // Tạo một đối tượng firebaseRDB với URL của cơ sở dữ liệu
        $firebase = new firebaseRDB($datbase_url);
        // Truy xuất dữ liệu từ node "/user" trong cơ sở dữ liệu, trong đó trường "email" bằng "password_mail"
        $retrieve = $firebase->retrieve("/user", "email", "EQUAL", $password_mail);
        // Giải mã JSON để nhận dữ liệu dưới dạng mảng
        $data = json_decode($retrieve, 1);
        if(count($data) == 0){
            $_SESSION['error_forgot'] = "Email is not registered";
        }
        else{
            $id = array_keys($data)[0];
            $password = $data[$id]['password'];
            //create a new phpmailer
            $mail = new PHPMailer(true);
            try{
                //smpt configuration
                $mail->isSMTP();
                $mail->Host = 'smtp.zoho.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'cloudcomputing@zohomail.com';
                $mail->Password = 'nhom3cloud@';
                $mail->SMTPSecure = 'tls'; //Enable TLS encryption, `ssl` also accepted
                $mail->Port = (int)587;   //tcp port to connect

                //send
                // email and name your account zoho mail
                $mail->setFrom('cloudcomputing@zohomail.com', 'FRAIS');

                //email recipient
                $string_content = "Mật khẩu của bạn là " . $password;
                $mail->addAddress($password_mail, 'Forgot pass');
                //email content
                $mail->isHTML(true);
                $mail->Subject = 'Forgot your password';
                $mail->Body = $string_content;
                //send mail
                $mail->send();
                echo "send mail has been success";
                header("location: forgot_pass_success.php");
                exit();
            }
            catch(Exception $e){
                echo "Message could not be sent";
            }
        }
    }
    header("Location: forgot_pass.php");
    exit();