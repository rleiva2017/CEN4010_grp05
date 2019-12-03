<?php	
$dbServerName = "lamp.cse.fau.edu";
$dbUsername = "cen4010fal19_g05 ";
$dbPassword = "tbynSnKO38";
$dbName = "cen4010fal19_g05";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
echo "Entering php";
if(isset($_POST['submit'])) 
{
	
	$status = $_POST['status'];
	$sql = "INSERT INTO Status(Stat, Email) VALUES (?,?)";
	$stmt = mysqli_stmt_init($conn);
	mysqli_query($conn, $sql);
	if(!mysqli_stmt_prepare($stmt,$sql))
	{
		echo "SQL statement failed";
	}
	else
	{
		$email = $_SESSION['userID']
        mysqli_stmt_bind_param($stmt,"ss",$status,$email);
		mysqli_stmt_execute($stmt);
	}
		
}
?>