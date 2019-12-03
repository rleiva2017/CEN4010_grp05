<?php
    include 'dbc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action=search.php method="POST">
            <input type"text" name="search" placeholder="Search">
            <button type="submit" name="submit">Search</button>
        </form>
        
        <div class="container">
            <?php
                $sql = "SELECT * FROM Account";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);
            
            if($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div>
                       <h3>"..$row['Avatar']."</h3>
                       <h3>"..$row['Name']."</h3>
                       <h3>"..$row['Email']."</h3>
                    </div>"
                }
            }
            ?>
        </div>
    </body>
</html>