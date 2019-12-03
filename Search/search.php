<?php
    include 'header.php';
    include 'index.php';
?>

<h1>Search page</h1>

<div>
  <?php
    if(isset($_POST['submit'])) 
	{
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM Account WHERE Email LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

            echo "There are ".$queryResults." results!";		
        if($queryResults > 0) 
			{
				$_SESSION['SearchResults'] = $queryResults;
                    while ($row = mysqli_fetch_assoc($result)) {
						$email = $row['Email'];	
						$_SESSION['Femail'] = $email;						
                        echo "<div>
                                <tr>
                                   <td>".$row['avatar']."</td>
                                   <td>".$row['Name']."</td>
                                   <td>".$row['Email']."</td>								   
								   <form action=AddFriend.php method='POST'>									
									<button type='AddFriend' name='Add'>Add Friend</button>
									</form>
                               </tr>
                            </div>";							
							
                }
            } else {
            echo "There are no results matching your search";
        }
		
    }	
    ?>
</div>