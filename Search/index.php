<?php
    include 'dbc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action=search.php method="POST">
            <input type"text" name="search" placeholder="Search email">
            <button type="submit" name="submit">Search</button>
        </form>

        <div class="container">
            <?php
                $sql = "SELECT * FROM Account";
                $result = mysqli_query($conn, $sql);
                $queryResults = mysqli_num_rows($result);

                    echo "There are ".$queryResults." results!";

                if($queryResults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div>
                                <tr>
                                   <td>".$row['avatar']."</td>
                                   <td>".$row['Name']."</td>
                                   <td>".$row['Email']."</td>
                               </tr>
                            </div>";
                }
				
            }
            ?>
        </div>		
	
    </body>
</html>
