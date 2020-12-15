<?php include('../controller/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Registration System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Log in</h2>
  </div>

  <form method="post" action="login.php">
    <!--display validation errors  here-->
    <?php include('errors.php');   ?>
    <div class="input-group">
      <label for="">Username</label>
      <input type="text" name="username">
    </div>

    <div class="input-group">
      <label for="">Password</label>
      <input type="password" name="password_1">
    </div>

    <div class="input-group">
      <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>
      Not yet a member?<a href="register.php">Sign up</a>
    </p>

  </form>
</body>
</html>
