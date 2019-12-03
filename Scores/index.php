<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
        $server = "lamp";
        $email = "cen4010fal19_g05";
        $password = "tbynSnKO38";
        $dbname = "cen4010fal19_g05";
        $conn = mysqli_connect($server, $email, $password, $dbname);
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

    <title>Top Scores</title>
    <link rel="stylesheet" href="style.css">
</head>
    
<Body>
    <div class="topnav">
        <a href="#home">Profile</a>
        <a href="#home">Home</a>
        <a href="#game">Game</a>
        <a class="active" href="#score">Score Page</a>
    </div>

    <div class="center">
        <center>
        <h1>Top Scores</h1>
    
        <?php		
			$sql = "SELECT * FROM Scores ORDER BY Score DESC";
            $query = mysqli_query($conn, $sql);           
			$queryResults = mysqli_num_rows($query); 						
        while($row = mysqli_fetch_array($query)){
			echo '<pre>'; var_export($row[1]);			
                var_export($row['Score']); echo '</pre>';
            }
        ?>
    </center>
    </div>
</Body>
</html>