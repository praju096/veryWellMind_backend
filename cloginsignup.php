<?php
  include_once('connect.php');
  if (isset($_POST['login'])) {
    $email=$_POST['lemail'];
    $pwd=$_POST['lpwd'];
    $sql = $conn->prepare("SELECT * FROM signup WHERE email='$email'and pwd='$pwd'");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_OBJ);
    if ($result == TRUE) {
      header("location:../HappyFace/index.php");
      echo "<script>alert('Login successfully.');</script>";
    }else{
      echo "<script>alert('Invalid E-Mail and Password.');</script>";
    } 
    $conn = null; 
  }
  if (isset($_POST['signup'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];
    $sql = $conn->prepare("INSERT INTO signup (name,email,pwd,cpwd) VALUES ('$name','$email','$pwd', '$cpwd')");
    $result = 
    $sql->execute();
    if ($result == TRUE) {
      header("location:../HappyFace/index.php");
      echo "<script>alert('Sign Up successfully.');</script>";
    }else{
      echo "<script>alert('Please Enter Valid Detail.');</script>";
    } 
    $conn = null; 
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dist/css/cloginsignup.css">

    <title>Login & Sign Up</title>
  </head>
  <body>
    <div id="container">
    <!-- FORM SECTION -->
      <div class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up">
          <div class="form-wrapper align-items-center">
            <form method="post">
              <div class="form sign-up">
              <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" name="name" placeholder="Name">
              </div>
              <div class="input-group">
                <i class='bx bx-mail-send'></i>
                <input type="email" name="email" placeholder="Email">
              </div>
              <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="pwd" placeholder="Password">
              </div>
              <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="cpwd" placeholder="Confirm password">
              </div>
              <button type="submit" name="signup">
                Sign up
              </button>
              <p>
                <span>
                  Already have an account?
                </span>
                <b onclick="toggle()" class="pointer">
                  Login here
                </b>
              </p>
            </div>
            </form>
          </div>
        
        </div>
        <!-- END SIGN UP -->
        <!-- SIGN IN -->
        <div class="col align-items-center flex-col sign-in">
          <div class="form-wrapper align-items-center">
            <form method="post">
              <div class="form sign-in">
              <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" name="lemail" placeholder="E-Mail">
              </div>
              <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="lpwd" placeholder="Password">
              </div>
              <button type="submit" name="login">
                Login
              </button>
              <p>
                <b>
                  Forgot password?
                </b>
              </p>
              <p>
                <span>
                  Don't have an account?
                </span>
                <b onclick="toggle()" class="pointer">
                  Sign up here
                </b>
              </p>
            </div>
            </form>
          </div>
          <div class="form-wrapper">
      
          </div>
        </div>
        <!-- END SIGN IN -->
      </div>
      <!-- END FORM SECTION -->
      <!-- CONTENT SECTION -->
      <div class="row content-row">
        <!-- SIGN IN CONTENT -->
        <div class="col align-items-center flex-col">
          <div class="text sign-in">
            <h2>
              Login ! HAPPY FACE World.
            </h2>
    
          </div>
          <div class="img sign-in">
      
          </div>
        </div>
        <!-- END SIGN IN CONTENT -->
        <!-- SIGN UP CONTENT -->
        <div class="col align-items-center flex-col">
          <div class="img sign-up">
          
          </div>
          <div class="text sign-up">
            <h2>
              Join HAPPY FACE.
            </h2>
    
          </div>
        </div>
        <!-- END SIGN UP CONTENT -->
      </div>
      <!-- END CONTENT SECTION -->
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="dist/js/cloginsignup.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>