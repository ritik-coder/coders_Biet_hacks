<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'dbconnect.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `user` WHERE `email`='$email'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $num=mysqli_num_rows($result);
    if($num==1){
        if(password_verify($password, $row['password'])){
            SESSION_START();
            $_SESSION['loggedin']=true;
            $_SESSION['user_id']=$row['user_id'];
            $_SESSION['user_email']=$email;
            header("location: /FORUM/index.php");
            exit();
               }
        else{ $error="password not verify";         
            }

        }
         else{ $error="User not exist please first sign up";}
             header("location: /FORUM/index.php?loginsuccess=false&error=$error");
         
}
?> 
   <!-- $sql="SELECT * FROM `user` WHERE `email`='$email" AND `password`='$password'"; -->
   <form method="POST" action="">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>

      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>
      </div>

    <div class="form-group">
      <label for="query">Your query</label>
      <textarea class="form-control" name="query" id="query"></textarea>
    </div>

    <div class="form-group">
      <label for="address">Address </label>
      <input type="text" class="form-control" name="address" id="address" placeholder=" Ex :- Main St ,Apartment, studio, or floor">
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control"  name="city" id="inputCity">
      </div>
     
      <div class="form-group col-md-2">
        <label for="inputZip">Zip code</label>
        <input type="text" class="form-control"  name="zip" id="inputZip">
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    
  </form>