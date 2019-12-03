<?php
$server = "lamp.cse.fau.edu";
        $email = "cen4010fal19_g05";
        $password = "tbynSnKO38";
        $dbname = "cen4010fal19_g05";
		
        $conn = mysqli_connect($server, $email, $password, $dbname);
		session_start();
		echo "Before Submit";
if(isset($_POST['submit'])){
	echo "After Submit";
    $bio=$_POST['bio'];
    $sql = "UPDATE Account SET bio = ? WHERE email = ?";	
	$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql))
					{		
						header("Location: ../signup/index.php?error=sqlerror");
						exit();
					}
					else
					{
						mysqli_stmt_bind_param($stmt,"ss",$bio,$_SESSION['userId']);
						mysqli_stmt_execute($stmt);	
						echo "<div><h1>Bio updated</h1></div>"; 						
					}
                     
 

	$sql1 = "SELECT bio FROM Account WHERE email = ?";	
	$stmt1 = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt1,$sql1))
					{		
						header("Location: ../signup/index.php?error=sqlerror");
						exit();
					}
					else
					{
						mysqli_stmt_bind_param($stmt1,"s",$_SESSION['userId']);
						mysqli_stmt_execute($stmt1);
											
					}
	
}
//since cannot connect to database
//function myFunction() {
 //var x = document.getElementById("bio");
  //var text = "";
  //var i;
  //for (i = 0; i < x.length ;i++) {
   // text += x.elements[i].value + "<br>";
 // }
  //document.getElementById("display").innerHTML = text;
//}
   
?>