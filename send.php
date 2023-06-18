<?php
error_reporting(0);
include 'db.php';

    
if (isset($_POST['submit'])){

    $name =$_POST['name'];
    $email=$_POST['email'];
    $subj=$_POST['subject'];
    $message=$_POST['message'];

if(!empty($name) && !empty($email) && !empty($subj) && !empty($message)){
   
    
   // $sql = "INSERT INTO contactform (name, email, subject ,message)";
    ?><center> <?php //echo 'your message is sent succesfully ,please wait from us :)'; ?> <center><?php
}else{
    echo 'please refil the data';
    ?> <a href="index.php">go back!</a><?php
}
}