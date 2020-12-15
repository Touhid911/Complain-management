<?php    include('../controller/server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Registration System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>

  <form method="post" action="register.php">
    <!--display validation errors  here-->
    <?php include('errors.php');   ?>
    <div class="input-group">
      <label for="">Username</label>
      <input type="text" name="username" value="<?php echo $username ?>">
    </div>
    <div class="input-group">
      <label for="">Email</label>
      <input type="text" name="email" value="<?php echo $email ?>">
    </div>
    <div class="input-group">
      <label for="">Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label for="">Confirm Password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" name="register" class="btn">Register</button>
    </div>
    <p>
      Already a member?<a href="login.php">Sign in</a>
    </p>

  </form>
</body>
</html>
