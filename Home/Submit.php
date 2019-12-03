<?php	
$dbServerName = "lamp.cse.fau.edu";
$dbUsername = "cen4010fal19_g05 ";
$dbPassword = "tbynSnKO38";
$dbName = "cen4010fal19_g05";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
session_start();
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
		$email = $_SESSION['userId'];
        mysqli_stmt_bind_param($stmt,"ss",$status,$email);
		mysqli_stmt_execute($stmt);
	}
		
}
?>
</head>
  <body> 

<ul>
  <li><a class="http://lamp.eng.fau.edu/~cen4010fal19_g05/milestone3/homepage/" href="#home">Home</a></li>
  <li><a href="../game">Game</a></li>
  <li><a href="../scores">High Scores</a></li>
  <li><a href="../profile">Your Profile</a></li>
  <li><a href="../login">Log Out</a></li>
</ul>

<?php 
$sql = "SELECT Stat, Email FROM Status";
$query = mysqli_query($conn, $sql);           
$queryResults = mysqli_num_rows($query); 
while($row = mysqli_fetch_array($query)){
	echo '<br><tr>
    <th>Email</th>
    <th>Status</th> 
	<br>
  </tr>
  <tr>
  <td>'; var_export($row[1]);'</td>' ;			
               '<td>';  var_export($row[0]);        '</td> </tr> <br>' ;
   }


?>