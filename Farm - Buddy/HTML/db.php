<?php


$server = "localhost";
$user = "root";
$password = "";
$db = "farmbuddy";

$con = mysqli_connect($server, $user, $password, $db);
if($con){
    
}else{
  ?>
    <script>
      alert("connection not successfull !!");
    </script>
  <?php
}


?>