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

    <title>Today's Date</title>
    <link rel="stylesheet" href="style.css">
</head>
    
<Body>
    <div class="topnav">
        <a class="active" href="#home">Profile</a>
        <a href="#home">Home</a>
        <a href="#game">Game</a>
        <a href="#score">Score Page</a>
    </div>

    
    <div class="search">
        <?php
            $query = mysqli_query($conn, "SELECT * FROM Account ORDER BY scores DESC");
            $num_rows = mysqli_num_rows($query);  
            ?>
       <?php
        while($row = mysqli_fetch_array($query)){
                echo "<div>
                        <tr>
                           <td>".$row['Name']."</td>
                           <td>".$row['Scores']."</td>
                       </tr>
                    </div>"; 
            }
        ?>
    </div>

</Body>
</html>