<?php
        session_start();
        $servername = "localhost";
        $Username = "root";
        $password = "";
        $dbname = "to_do";
        
        $conn = new mysqli($servername, $Username, $password, $dbname);
        
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "select * from sign_up where email = '".$uname."' and password ='".$pass."' ";

        $run = $conn->query($sql);
        
        if( $run->num_rows > 0 ) {
            $_SESSION['session_email'] = $uname;
            header("Location:profile.php");
        }else{
            header("Location:login.php");
        }


?>