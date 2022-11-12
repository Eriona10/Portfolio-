<?php

        $conn = mysqli_connect("localhost", "root", "", "contact");
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){

        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
       $message = $_REQUEST['message'];


  
        $sql = "INSERT INTO mesazhi(name, email, message)  VALUES ('$name', 
            '$email','$message')";
          
        if(mysqli_query($conn, $sql)){
            header("Location: index.php?mesazhi=send");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }else {
        echo "All fields are required";
    }
          

        mysqli_close($conn);
        ?>
