<?php 
  include 'headermain.php';
  include 'dbconnect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rivertion | Login</title>
    <style>
      .container {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(50, 50, 50, 0.8); /* Adj`ust the opacity by changing the last value */
        padding: 50px;
        width: 400px; /* Adjust the width and height to make it more square */
        height: 300px;
        text-align: center;
        color: white;
        border-radius: 20px; /* Add rounded corners to the container */
        
      }

      .container span {
      font-size: 30px; /* Increase the font size */
      font-weight: bold;
    }
    </style>
  </head>
  <body background="images/apple-bg.jpg">
    <div class="container">
      <form id="login-form" method="POST" action="loginprocess.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input class="form-control" type="email" maxlength="50" name="femail" id="inputEmail" placeholder="Email" required autofocus>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input class="form-control" type="password" name="fpword" id="inputPassword" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </body>
</html>