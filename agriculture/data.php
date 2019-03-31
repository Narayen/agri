<?php
    if (isset($_POST['submit']))
    {
        //$host = "localhost";
        $user = "root";
        $pass = "";
        $db = "agri";
    
        $inpfullname = $_POST['fullname'];
        $inpemail = $_POST['email'];
        $inpusername = $_POST['username'];
        $inppassword = $_POST['password'];
        
        $connect = mysqli_connect("localhost",$user,$pass);
        if(!$connect) 
        {
            echo 'Not Connected successfully to the database';
        }
        
        mysqli_select_db($connect,$db) or die("Database not found");
        
        $query = "INSERT INTO `login`(`Fullname`, `email`, `username`, `password`) VALUES ('$inpfullname','$inpemail','$inpusername','$inppassword')";
        
        $result = mysqli_query($connect,$query);
        
        mysqli_close($connect);
        
        if($result)
        {
            echo "User Created Successfully.";
        }
        else
        {
            echo "User Registration Failed";
        }
    }
?>