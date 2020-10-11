<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'dbconnect.php';
    $email=$_POST['email'];
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    if(strlen($contact)!=10){ 
        $error= "please check your contact number";
    }

    $password=$_POST['password'];
    $cpassword=$_POST['Cpassword'];
    $sql="SELECT * FROM `user` WHERE `email`='$email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num>0){ 
        $error= "users already exists";
    }
    else{
    if($password==$cpassword){
        $hash=password_hash($password,PASSWORD_DEFAULT);
      $sql="INSERT INTO `user` (`email`, `password`, `name`, `contact`) VALUES ('$email', '$hash', '$name', '$contact')";
       
        $result=mysqli_query($conn,$sql);
        if($result){$showalert=true;
            header("location: /FORUM/index.php?signupsuccess=true");
        exit(); }
    }
    else{$error= "Confirm password not matched";}
}
header("location: /FORUM/index.php?signupsuccess=false&error=$error");
}
?> 