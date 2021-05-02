<?php
session_start();





if(isset($_POST['name'])){

  $server = "localhost";
  $username = "root";
  $password = "";
  // $db = "farmbuddy";

  $conn = mysqli_connect($server, $username, $password);
  if(!$con){
    echo " database connected successfully ";
  }

  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $Query = $_POST['query'];

  $sql = "INSERT INTO `farmbuddy`.`contact`( `name`, `email`, `query`) VALUES ('$Name','$Email','$Query');";

  $re = mysqli_query($conn, $sql);

if($re){

  ?>
    <script>
      alert("Your data has been submitted successfully to FarmBuddy !!");
      window.location.href='index.php';
    </script>
  <?php
    
  }else{
    echo "ueiwgvvvvvvvvvvfbwebfivweugdslcegjddddddddd";
  }
}





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
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <script src="https://kit.fontawesome.com/9e8524743e.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../IMAGES/tractor.png" type="image/icon type">
    <title>FarmBuddy-Lets farm !!</title>                     
</head>

<body>
<section id="home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="Navbar">
        <a class="navbar-brand" href="index.php">FarmBuddy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            
          </ul>
          <span class="navbar-text">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#crops">Crops</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
              </ul>
          </span>
          <form class="form-inline my-2 my-lg-0 ">
            <button class="btn btn-outline-success my-2  my-sm-0" type="submit"><a class="text-success" href="logout.php">Logout</a></button>
          </form>
        </div>
      </nav>
  </section>
 <!-- ............... MAin Page.............. -->

<section id="main" >
  
  <div class="info" >
    <h2 id="overflow"> Welcome to <span>FarmBuddy</span> </h2>
    <!-- <h3 id="overflow" class="mb-3">Hello,&nbsp  &nbsp<?php echo $_SESSION['username'] ?></h3> -->
    <h3 id="overflow">Lets Explore Farming with us !!</h3>
    <button class="btn btn-primary py-3 mt-5 px-3 main_btn"> <a href="register.php" class="at">Sign Up / Login</a> </button>
    <button class="btn btn-dark py-3 mt-5 px-3 ml-4 at main_btn"><a href="faq.html" class="at">FAQ</a> </button>
  </div>
  <div id="tractor1">
    <img src="../IMAGES/—Pngtree—cartoon tractor_2600598.png" alt="">
  </div>
  
  
</section>

<!-- .....................About Us................... -->

<section id="about">
  <h1><i class="fas fa-hand-point-right"></i> ABOUT US</h1>
    <div class="row">
        <div class="col">
           <img src="../IMAGES/winter.jpg" alt="">
        </div>
        <div class="col">
            <h2>What is FarmBuddy ?</h2>
            <hr>
            <p> Farmer Buddy website is developed for <strong>farmers</strong>  or <strong> agricultural enthusiast people</strong> to increase there knowledge about the crops, different types of sowing methods as well as how to grow a particular crop in the right way.
              On this website , we will differentiate the crops by the timing of they grow and by the different seasons and regions.
              We also have a <strong>live chat option</strong>  where anyone can ask doubts and anyone can answer who is interested or know about that query.
              We are trying to create a <strong>Farming community</strong>  where everyone can help each other by sharing their knowledge about farming experiences.

            </p>
        </div>
        
    </div>
</section>

<!-- ...........CROPS SECTION................. -->
<h1 class="section-head">
  <span><i class="fas fa-tractor"></i></span>
  <span>CROPS SECTION</span>
</h1>
    <div class="card-deck mt-2 mb-2" id="crops">
        <div class="card border border-dark">
          <img class="card-img-top" src="../IMAGES/summer.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title" id="overflow">Summer Crops</h4>
            <p class="card-text">Here u will get all the information regarding crops that grow in summer season.</p>
            <button class="btn btn-dark"> <a href="summer_crop.html" class="at">Click here</a> </button>
          </div>
        </div>
        <div class="card border border-dark">
          <img class="card-img-top" src="../IMAGES/winter.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title" id="overflow">Winter Crops</h4>
            <p class="card-text">Here u will get all the information regarding crops that grow in Winter season.</p>
            <button class="btn btn-dark"><a href="winter_crop.html" class="at">Click here</a></button>
          </div>
        </div>
        <div class="card border border-dark">
          <img class="card-img-top" src="../IMAGES/main.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title" id="overflow">Rainy Season</h4>
            <p class="card-text">THere u will get all the information regarding crops that grow in Rainy season.</p>
            <button class="btn btn-dark"><a href="rainy_crops.html" class="at">Click here</a></button>
          </div>
        </div>
    </div>
<!-- .................... Team Members ............... -->

<section id="team">
  <h1 class="team_heading"> <i class="fas fa-users"></i> TEAM MEMBERS</h1>
  <div class="rows">
    <div class="cols">
      <img src="../IMAGES/Ankit.jpg" alt="" >
    </div>

    <div class="cols" >
      <h3 id="overflow" >Ankit UPadhyay</h3>
      <div class="team_links">
        <a href="https://www.linkedin.com/in/ankit-upadhyay-25601415b/"><i class="fa fa-linkedin " id="overflow"></i></a>
        <a href="https://github.com/Ankkkitt"><i class="fa fa-github" id="overflow"></i></a>
        <i class="fa fa-youtube" id="overflow"></i>
      </div>
    </div>

    <div class="cols">
      <img src="../IMAGES/loukik-2.jpeg" alt="" >
    </div>

    <div class="cols">
      <h3 id="overflow" >Loukik Naik</h3>
      
      <div class="team_links">
        <i class="fa fa-linkedin" id="overflow"></i>
        <i class="fa fa-github" id="overflow"></i>
        <i class="fa fa-twitter" id="overflow"></i>
      </div>
    </div>

    <div class="cols">
      <h3 id="overflow" >Raghav Gupta</h3>
      
      <div class="team_links">
        <i class="fa fa-linkedin" id="overflow"></i>
        <i class="fa fa-github" id="overflow"></i>
        <i class="fa fa-twitter" id="overflow"></i>
      </div>
    </div>
  
    <div class="cols">
      <img src="../IMAGES/Raghav.png" alt="" >
    </div>
  
    <div class="cols">
      <h3 id="overflow" >Om Aryan</h3>
      
      <div class="team_links">
        <i class="fa fa-linkedin" id="overflow"></i>
        <i class="fa fa-github" id="overflow"></i>
        <i class="fa fa-twitter" id="overflow"></i>
      </div>
    </div>
    <div class="cols">
      <img src="../IMAGES/Aryan2.jpg" alt="" >
    </div>
  </div>
</section>

<!-- ......................CONTACT.................. -->

<section id="contact">
  <h1 class="section-head">
    <span><i class="fas fa-id-card"></i></i></span>
    <span>CONTACT US</span>
  </h1>
  <form action="index.php" method="post">        
    <input type="name" class="input" name="name" id="name" placeholder="Enter your name" required>
    <input type="email" class="input" name="email" id="email" placeholder="Enter your email" required>
    <textarea name="query" class="input" id="query" cols="30" rows="10" placeholder="Enter your message or any Query you have." required></textarea>
    <button class="btn btn-outline-dark mb-2" id="submitBtn">Submit</button>
    
</form>
</section>

<!-- ...............FOOTER SECTION............. -->

<footer class="footer bg-dark mt-4">
  <p>made with ❤️️by BROGRAMMERS  <span class="font-weight-bold"> &nbsp&nbsp&nbsp&nbsp&copy FarmBuddy</span>
  <a class="ml-2" href="#home"><i class="fas fa-angle-up text-light"></i></a>
  </p>
</footer>
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
