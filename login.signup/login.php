<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<div class="container mt-3">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" value placeholder="Enter email" name="email">
      </div>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>
</html>

<?php

include "achayar.php";
session_start();
if (isset($_POST['login'])) {

    $useremail = $_POST['email'];
    $password = $_POST['password'];

    $login = "SELECT * FROM USERDETAILS WHERE useremail = '$useremail' AND  userpassword = '$password' ";

    $data = mysqli_query($conn, $login);
    $row = mysqli_fetch_assoc($data);
    $username = $row['username'];




    if ($row == 0) {

        echo "Login Failed";

        echo '<script type="text/javascript"> window.location="login.php";</script>';

        
        
    }else{
   
        $_SESSION['user'] = $username;
        echo '<script type="text/javascript"> window.location="welcome.php";</script>';

}
}