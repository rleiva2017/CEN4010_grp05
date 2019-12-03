<?php
include 'header.php';
include 'index.php';
if (session_status() == PHP_SESSION_NONE) {
	echo "No session";
    session_start();
}
if(isset($_SESSION['userId']) || isset($_SESSION['userName']))
{
	echo "Session Id found";
	
}
else
{
	echo "Session Id not found";
}
if(isset($_POST['Add']))
				{							
					echo "Add button pushed ";	
					$sql = "INSERT INTO Friends VALUES(?,?); ";
					$stmt = mysqli_stmt_init($conn);
					mysqli_stmt_prepare($stmt,$sql);
					mysqli_stmt_bind_param($stmt, "ss",$_SESSION['userId'],$_SESSION['Femail']);							
					mysqli_stmt_execute($stmt);					
								
				}
?>				