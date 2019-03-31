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
    
    $query = "SELECT `crop` FROM `agri` WHERE `soil` = '$inpsoil' AND `climate` = '$inpclimate'";
    
    $result = mysqli_query($connect,$query);
    
    //     if(!result){
    //         printf("Error: %s\n", mysqli_error($connect));
    //         exit();
    //     }
    
    $row = mysqli_fetch_array($result);
    
    $servercrop = $row['crop'];
    
    //$num_row = mysqli_num_rows($result);
    
    if($servercrop)
    //     if($num_row >= 0)
    {
        
        mysqli_close($connect);
        echo "$servercrop";
        // if($inpsoil == $serversoil && $inpclimate == $serverclimate)
            //        for($i=0;$i<$num_row;$i++){
            //        $row = mysqli_fetch_array($result);
            // 			echo "$row[crop]";
            //        }
        //else
        //{
        //   echo "failed";
        //}
    }
}
?>