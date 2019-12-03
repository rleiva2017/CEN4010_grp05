<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
    if($_GET['q'] == 'Search...'){
        header('Location: index.php');
    }
    if($_GET['q'] !== ''){
        $server = "lamp";
        $email = "cen4010fal19_g05";
        $password = "tbynSnKO38";
        $dbname = "cen4010fal19_g05";
        $conn = mysqli_connect($server, $email, $password, $dbname);
?>
<html lang="en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function active() {
            var searchBar = document.getElementById('searchBar');
            if(searchBar.value == 'Search...'){
                searchBar.value = ''
                searchBar.placeholder = 'Search...'
            }
        }
        function inactive() {
            var searchBar = document.getElementById('searchBar');
            if(searchBar.value == ''){
                searchBar.value = 'Search...'
                searchBar.placeholder = ''
            }
        }
    </script>
</head>
    <body>
    <form action="index.php" method="GET" id="searchForm">
        <input type="text" name="q" id="searchBar" placeholder="Search email" value="Search..." autocomplete="off" onMouseDown="active()" onBlur="inactive()" /><input type="submit" id="searchBtn" value="Go!" />
    </form>
        <?php
        echo "this is $q";
            $query = mysqli_query($conn, "SELECT * FROM Account WHERE Email LIKE '%$q%'");
            $num_rows = mysqli_num_rows($query);  
            ?>
        <p><strong><?php echo $num_rows; ?></strong> results for '<?php echo $q; ?>'</p>
       <?php
        while($row = mysqli_fetch_array($query)){
                echo "<div>
                        <tr>
                           <td>".$row['avatar']."</td>
                           <td>".$row['Name']."</td>
                           <td>".$row['Email']."</td>
                       </tr>
                    </div>"; 
            }
        ?>
    </body>
</html>
<?php
} else {
        header('Location: index.php');
    }
?>