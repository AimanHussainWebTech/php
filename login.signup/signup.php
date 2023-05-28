<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>SignUp</title>
</head>
<body>
    
<form method="POST" action="signup.php" >
  <h2>Sign up</h2>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">UserName</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="useremail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="userpassword" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" name="signup" class="btn btn-primary">Submit</button>
</form>

</body>
</html>

<?php 
include"achayar.php";

if(isset($_POST['signup'])){

  $userName = $_POST['username'];
  $userEmail = $_POST['useremail'];
  $userPassword = $_POST['userpassword'];
  
  $insert = "INSERT INTO USERDETAILS(username , useremail , userpassword) 
  VALUES 
  ('$userName','$userEmail','$userPassword')";
  
  
  
  if (mysqli_query($conn, $insert)) {
     
      echo "User Registered !";
      echo '<script type="text/javascript"> window.location="login.php";</script>';

  
  } else 
  {
  
    echo '<script type="text/javascript"> window.location="signup.php";</script>';

      echo 'chal nikal';
  }
  }





?>