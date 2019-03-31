<?php

if(isset($_POST['username']) && ($_POST['password']))
{
    $inpusername = $_POST['username'];
    $inppassword = $_POST['password'];

	$user = 'root';
	$pass = '';
	$db = 'agri';

	$connect = mysqli_connect("localhost",$user,$pass);
	if(!$connect)
	{
		echo 'Not Connected successfully to the database';
	}

	mysqli_select_db($connect,$db) or die("Database not found");

	$query = "SELECT `username`, `password` FROM `login` WHERE `username` = '$inpusername'";
	
	$result = mysqli_query($connect,$query);

	$row = mysqli_fetch_array($result);

    $serverusername = $row['username'];
    $serverpassword = $row['password'];
	
	if ($serverusername && $serverpassword)
	{
	 
		mysqli_close($connect);

		if($inpusername == $serverusername && $inppassword == $serverpassword)
		{

			if(!empty($_POST['submit'])){
				$inpusername = $_POST['username'];
				echo " $inpusername";
			}
			include('logout.php');

		}else {
			echo "Invalid inputs!! Please try again!!!";
			//header('Location: fail.php');
		}
	}
}
?>

