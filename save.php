<?php
    if(isset($_POST['submit'])){
        $full_name = $_POST['fullname'];
        $email = $_POST['email'];
        $Number = $_POST['phone'];
        $message = $_POST['message'];
    
        echo $full_name.'<br>';
        echo $email.'<br>';
        echo $Number.'<br>';
        echo $message.'<br>';
    
        $query = "INSERT INTO booking(fullname, email,cell, message)
        VALUES('$full_name','$email','$Number','$message')";
         $ins = mysqli_query($con, $query);
         if($ins){
            echo "Saved successfully";
         }
         else echo "not saved";
    }
?>