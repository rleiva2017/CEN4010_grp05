<?php
$server = "lamp.cse.fau.edu";
        $email = "cen4010fal19_g05";
        $password = "tbynSnKO38";
        $dbname = "cen4010fal19_g05";
		
        $conn = mysqli_connect($server, $email, $password, $dbname);
		session_start();

echo "Entering code <br>";
if(isset($_POST["submit"]) ){    
    $avatar1 = 1;
	$avatar2 = 2;
	$avatar3 = 3;
	$avatar4 = 4;
	$sql = "UPDATE Account SET bio = ? WHERE email = ?";	
	$stmt = mysqli_stmt_init($conn);
	echo "button pressed <br>";
    if(isset($_POST['Avatar1']))
	{		echo "Avatar1 <br>";
			if(!mysqli_stmt_prepare($stmt,$sql))
					{		
						header("Location: ../signup/index.php?error=sqlerror");
						exit();
					}
					else
					{
						mysqli_stmt_bind_param($stmt,"ss",$avatar1,$_SESSION['userId']);
						mysqli_stmt_execute($stmt);													
					}
	}
	else if ($_POST['Avatar2'])
	{
		echo "Avatar2 <br>";
		if(!mysqli_stmt_prepare($stmt,$sql))
					{		
						header("Location: ../signup/index.php?error=sqlerror");
						exit();
					}
					else
					{
						mysqli_stmt_bind_param($stmt,"ss",$avatar2,$_SESSION['userId']);
						mysqli_stmt_execute($stmt);												
					}
	}
	else if ($_POST['Avatar3'])
	{
		if(!mysqli_stmt_prepare($stmt,$sql))
					{	
						echo "Avatar3 <br>";				
						header("Location: ../signup/index.php?error=sqlerror");
						exit();
						}
					else
					{
						mysqli_stmt_bind_param($stmt,"ss",$avatar3,$_SESSION['userId']);
						mysqli_stmt_execute($stmt);	
												
					}
		
	}
	else{
		echo "Avatar4 <br>";
		if(!mysqli_stmt_prepare($stmt,$sql))
					{		
						header("Location: ../signup/index.php?error=sqlerror");
						exit();
					}
					else
					{
						mysqli_stmt_bind_param($stmt,"ss",$avatar4,$_SESSION['userId']);
						mysqli_stmt_execute($stmt);	
												
					}
		
	}
            
            
        }
    

?>
?>