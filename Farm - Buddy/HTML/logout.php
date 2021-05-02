<?php

if(!isset($_SESSION[''])) {
      ?>
        <script>
          alert("First login on FarmBuddy...");
          window.location.href='login.php';
        </script>
    <?php
}
    session_start();
    session_destroy();
    ?>
        <script>
          alert("Logout Successfull !\n Come back soon, <?php echo $_SESSION['username']?>");
          window.location.href='login.php';
        </script>
    <?php
?>