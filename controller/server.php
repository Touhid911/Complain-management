
<?php
/*
about session_start()
When you work with an application, you open it, do some changes, and then you close it.
This is much like a Session. The computer knows who you are. It knows when you start the
application and when you end. But on the internet there
is one problem: the web server does not know who you are or what you do, because the
HTTP address doesn't maintain state.

Session variables solve this problem by storing user information to be used across
multiple pages (e.g. username, favorite color, etc).
By default, session variables last until the user closes the browser.

So, Session variables hold information about one single user,
and are available to all pages in one application.
*/

  session_start();
  $username="";
  $email="";
  $errors=array();
  //connect to the server
  $db=mysqli_connect("localhost","root","","complaindb");

  //if the register button is clicked
  if(isset($_POST['register'])){
    $username= mysqli_real_escape_string($db,$_POST['username']);
    $email= mysqli_real_escape_string($db,$_POST['email']);
    $password_1= mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2= mysqli_real_escape_string($db,$_POST['password_2']);

    //ensure that the form fields are filled properly
    if(empty($username)){
        array_push($errors,"Username is required");//add errors to error array
    }
    if(empty($email)){
        array_push($errors,"Email is required");//add errors to error array
    }
    if(empty($password_1)){
        array_push($errors,"Password is required");//add errors to error array
    }
    if($password_1 != $password_2){
        array_push($errors,"The two password do not match");//add errors to error array
    }
    //if there are no errors save user to data
    if(count($errors)==0){              //count() function count the number of element in an array
      $password=md5($password_1);   //encrypt password in md5 hash in 128 bit fingerprint
                                    // before storing in database (security)

      $sql="INSERT INTO users1(username,email,password) VALUES('$username','$email','$password') " ;
      mysqli_query($db,$sql );
       $_SESSION['username'] = $username;     //storing data in session array
  	   $_SESSION['success'] = "You are now logged in"; //redirect to homepage
  	   header('location: ../view/index.php');
    }
  }

  // log user in from log in page
    if (isset($_POST['login'])) {
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $password = mysqli_real_escape_string($db, $_POST['password_1']);

       //ensure that the form fields are filled properly
      if (empty($username)) {
  	     array_push($errors, "Username is required");
       }
       if (empty($password)) {
  	      array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
          $password = md5($password);// encrypt password before comparing
          $query = "SELECT * FROM users1 WHERE username='$username' AND password='$password'";
          $results = mysqli_query($db, $query);
          if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../view/index.php');
          }else {
            array_push($errors, "Wrong username/password combination");
            //header('location: login.php');
          }
        }
      }


    //logout
    if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: ../view/login.php");
    }
?>
