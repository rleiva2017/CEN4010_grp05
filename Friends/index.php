<?php
        $server = "lamp.cse.fau.edu";
        $email = "cen4010fal19_g05";
        $password = "tbynSnKO38";
        $dbname = "cen4010fal19_g05";
		
        $conn = mysqli_connect($server, $email, $password, $dbname);
		session_start();
?>
<html lang="en-US">

<head>

    <title>Today's Date</title>
    <link rel="stylesheet" href="style.css">
</head>
    
<Body>
    <div class="topnav">
        <a class="active" href="../profile">Profile</a>
        <a href="../homepage/index.php">Home</a>
        <a href="../game">Game</a>
        <a href="../scores">Score Page</a>
    </div>
	<table >
	<tr> <th> Friend's Email <th> </tr>

<?php
			echo "Entering php <br>";
			$email1 = $_SESSION['userId'];
			$sql = "SELECT `Email2` FROM `Friends` WHERE `Email1`= '$email1' LIMIT 0, 30 ";
			$query = mysqli_query($conn,$sql);
			$stmt = mysqli_stmt_init($conn);			
			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				echo "SQL error";				
			}
            else{
				echo "Preparing <br>";				
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$queryResults = mysqli_stmt_num_rows($stmt);
				
				if($queryResults > 0) {
					echo "Displaying <br>";
					while ($row = mysqli_fetch_assoc($query)) {						
						echo "<tr><td>".$row['Email2']."</td></tr>";
					}
				}
				else{
				echo "No Results found";
				}
			}

?>
</table>
</Body>
</html>