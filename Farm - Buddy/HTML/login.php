<?php
  // a PHP session stores data on server rather than users computer.
  session_start();

  
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9e8524743e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../CSS/login.css">
  <link rel="icon" href="../IMAGES/tractor.png" type="image/icon type">
  <title>Login | FarmBuddy</title>
</head>

<body>
<?php
    include 'db.php';
    if(isset($_POST['submit'])){

      $email = $_POST['email'];
      $password = $_POST['password'];

      // query to check whether the email entered is present in our database
      $emailCheck = "select * from registeration where username='$email' ";
      $query = mysqli_query($con, $emailCheck);          # passing that query in our database
      $emailCount = mysqli_num_rows($query);             # checkinhg that email is present.
      if($emailCount){
        $emailPassword = mysqli_fetch_assoc($query);     # taking original password from database
        $_SESSION['username'] = $emailPassword['name'];
        $finalPassword = $emailPassword['password'];     # storing original password in variable
        #$password_Check = password_verify( $password, $finalPassword ); # checking password entered and original password in datbase are same or not
        
        
        if(password_verify( $password, $finalPassword )){

          ?>
            <script>
              alert("Login Successfull !\n Welcome to FarmBuddy, <?php echo $_SESSION['username']?>");
              window.location.href='index.php';
            </script>
          <?php
        }else{
          ?>
            <script>
              alert("Password is incorrect !!");
            </script>
          <?php
        }
      }else{
        ?>
          <script>
            alert("Email does not exists in our database !!");
          </script>
        <?php
      }

    }





  ?>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="navbar">
    <a class="navbar-brand" href="index.php">FarmBuddy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        
      </ul>
      <form class="form-inline my-2 my-lg-0 ">
        <button class="btn btn-outline-success my-2  my-sm-0" type="submit"><a class="text-success" href="faq.html" >FAQ</a></button>
      </form>
    </div>
  </nav>
  
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->


  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
              <div class="form-label-group my-4">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                <label for="inputEmail"><i class="fas fa-envelope mr-2"></i> Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword"><i class="fas fa-key"></i>&nbsp Password</label>
              </div>

              <!-- <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div> -->
              <button class="btn btn-lg btn-outline-dark btn-block text-uppercase" type="submit" name="submit">Sign in</button>
              <p class="text-center mt-2">Don't have an account <a href="register.php">Register</a> </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>
