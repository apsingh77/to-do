<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "to_do";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn-> connect_error){
            die ("connection failed:". $conn -> connection_error);

        }
        
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];   
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "insert into sign_up(first_name, last_name, dob, gender, email, password) values ('$firstname', '$lastname','$dob', '$gender','$email','$password')";

        if ($conn->query($sql)===true){

        }
        else {
            echo "error:".$sql.$conn->error;
        }
        
        $conn-> close();
        header('Location:login.php')

?>