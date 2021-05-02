<?php
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
  <link rel="stylesheet" type="text/css" href="../CSS/register.css">
  <script src="https://kit.fontawesome.com/9e8524743e.js" crossorigin="anonymous"></script>
  <link rel="icon" href="../IMAGES/tractor.png" type="image/icon type">
  <title>Sing Up | FarmBuddy</title>
</head>

<body>
<?php

 include 'db.php';

  if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $cpass =mysqli_real_escape_string ($con, $_POST['cpassword']);

    // password encryption
    $password_protection = password_hash($pass, PASSWORD_BCRYPT);
    $cpassword_protection = password_hash($cpass, PASSWORD_BCRYPT);

    // to check whether entered email does not exist already.
    $emailquery = " select * from registeration where username='$email' ";
    $query = mysqli_query($con, $emailquery);

    $emailCount = mysqli_num_rows($query);

    if( $emailCount > 0){
      ?>
    <script>
      alert("Email already exists !!");
    </script>
  <?php
    }else{
      if($pass === $cpass){
        $insertQuery = "insert into registeration( name, username, password, cpassword ) values( '$name', '$email', '$password_protection', '$cpassword_protection' )";
        $iquery = mysqli_query($con, $insertQuery);

        if($iquery){
          ?>
            <script>
              alert("You have successfully registered on farmBuddy");
              window.location.href='login.php';
            </script>
          <?php
        }else{
          ?>
            <script>
              alert(" Some Technical error .");
            </script>
          <?php
        }

      }else{
          ?>
            <script>
              alert("Both Passwords are not matching !!");
            </script>
          <?php
      }
    

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
        <button class="btn btn-outline-success my-2  my-sm-0" type="submit"><a class="text-success" href="faq.html" target="_blank">FAQ</a></button>
      </form>
    </div>
  </nav>
  
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h1 class="card-title text-center">Sign Up</h1>
            <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

             <div class="form-label-group my-4">
                <input type="text" name="name" id="inputname" class="form-control" placeholder="Enter your name" required>
                <label for="inputname"><i class="fas fa-user-check mr-2"></i>Name</label>
             </div>

              <div class="form-label-group my-4">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
                <label for="inputEmail"><i class="fas fa-envelope mr-2"></i> Email address</label>
              </div>



              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                <label for="inputPassword"> <i class="fas fa-unlock-alt"></i>&nbsp Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" name="cpassword" required>
                <label for="inputConfirmPassword"><i class="fas fa-key"></i>&nbsp Confirm password</label>

              </div>

              <button class="btn btn-lg btn-outline-dark btn-block text-uppercase" type="submit" name="submit">Register</button>
              <p class="text-center mt-2">Already have an account <a href="login.php">Sign In</a> </p>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>








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