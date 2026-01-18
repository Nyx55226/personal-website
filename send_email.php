<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $conn= new mysqli("31.11.38.20","Sql1911704","Ferrara07@","Sql1911704_1");
    

    if(!hash_equals($_SESSION['SC'], $_POST['SC'])) exit();
    $email_=$_POST['email'];
    $subject_=$_POST['subject'];
    $body_=$_POST['body'];
    $date= date("Y-m-d");
    $time= date("h:i:s");

    if($email_=="" || $subject_=="" || $body_=="") {
        echo "emptyField";
        exit();
    }
    if(strlen($subject_)<5 || strlen($body_)<40){
        echo "textshort";
        exit();
    } 
    if(!filter_var($email_,FILTER_VALIDATE_EMAIL)){
        echo "emailnotvalid";
    }
    try{
        $email= new PHPMailer();
        $email->isMail();
        $email->CharSet='UTF-8';
        $email->setFrom('noreply@ferraraemanuele.it',"noreply");
        $email->addAddress("me@ferraraemanuele.it");
        $email->addReplyTo($email_);
        $email->Subject=$subject_;
        $email->Body=$body_;
        $email->send();
        unset($_SESSION["SC"]);

        $str_="INSERT INTO email (email,subject,body,data,time) values ('$email_','$subject_','$body_','$date','$time')";
        $conn->query($str_);
        
        echo "ok";
    }catch(Exception){}


?>