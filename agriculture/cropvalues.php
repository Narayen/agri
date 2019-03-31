<?php

if(isset($_POST['soil']) && ($_POST['climate']))
{	
    $inpsoil = $_POST['soil'];
    $inpclimate = $_POST['climate'];
    
    $user = "root";
    $pass = "";
    $db = "table1";
    
    $connect = mysqli_connect("localhost",$user,$pass);
    if(!$connect)
    {
        echo 'Not Connected successfully to the database';
    }
    
    mysqli_select_db($connect,$db) or die("Database not found");
    
    $query = "SELECT `crop` FROM `crops` WHERE `soil` = '$inpsoil' AND `climate` = '$inpclimate'";
        
    $result = mysqli_query($connect,$query);
    
    $row = mysqli_fetch_array($result);
    
    $servercrop = $row['crop'];
   
    if($servercrop)
    {
        
        mysqli_close($connect);
        echo"<!DOCTYPE html>
                <html>
                    <head>
                        <title>Crop selection</title>
                    </head>
                    <body background = \"bg-01.jpg\" >
                    </body>";
        echo "<br/><br/><h3 align = \"center\">$servercrop</h3>";
        echo"<form action = \"cropselec.php\" method = \"POST\" align = \"center\">
                <input type=\"submit\" name=\"submit\" value=\"Go Back\">
            </form>";
    }
}
?>