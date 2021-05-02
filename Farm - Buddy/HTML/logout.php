<?php

    session_start();
    session_destroy();
    ?>
        <script>
          alert("Logout Successfull !\n Come back soon, <?php echo $_SESSION['username']?>");
          window.location.href='login.php';
        </script>
    <?php
?>