<?php
        session_start();
        if(!isset($_SESSION['session_email'])){
        header("Location:login.php");        
        }      

?>        
Hello <?php echo $_SESSION['session_email']; ?>


<a href = "logout.php">Logout</a>