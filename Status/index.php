<?php

$dbServerName = "lamp.cse.fau.edu";
$dbUsername = "cen4010fal19_g05 ";
$dbPassword = "tbynSnKO38";
$dbName = "cen4010fal19_g05";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
?>

<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 150px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: black;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: white;
}

button:hover, a:hover {
  opacity: 0.7;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
      </style>
  </head>
  <body> 

<ul>
  <li><a class="http://lamp.eng.fau.edu/~cen4010fal19_g05/milestone3/homepage/" href="#home">Home</a></li>
  <li><a href="../game">Game</a></li>
  <li><a href="../scores">High Scores</a></li>
  <li><a href="../profile">Your Profile</a></li>
  <li><a href="../login">Log Out</a></li>
</ul>
	<form action = "Submit.php" method="POST">
	<input type ="text" name = "status" placeholder=" Status">
	<br>
	<button type = "submit" name = "submit"> Enter Status </button>
	</form>
      
    
    <p id="para">      
    </p>
  </body>
    <script>
        window.onclick = function(e)
        {   var id =  e.target.id;   
            if (id === 'sent')  
            { var txtbox = document.getElementById('example');  
             var txt = txtbox.value;
             $( "#para" ).append( txt + '<br>');
             $( txtbox ).val('');  
            }
			
        }
        var a = [];
        a.push(txt);
		
    </script>
	
</html>
