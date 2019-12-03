<!DOCTYPE html>
<html lang="en-US">

<head>

    <title>Today's Date</title>
    <link rel="stylesheet" href="style.css">
</head>
    
<Body>
    <div class="topnav">
        <a class="active" href="../profile">Profile</a>
        <a href="../homepage/index.php">Home</a>
        <a href="../game">Game</a>
        <a href="../scores">Score Page</a>
		 <a href="../Friends">Friends Page</a>
    </div>
    
    <div class="card"> 
      <img src="Avatar4.png" alt="John" style="max-width: 100%">
      <h1>SwordInDarkness</h1>
      <p>Florida Atlantic University</p>
      <p><button>Contact</button></p>
    </div>

    <div class="grouping">
        <!-- Todo Set the fixed size of textarea-->
        <div class="bio">
            <form action="bio.php" method="post">
                <textarea type="text" name="bio" rows="4" cols="50" placeholder="Write a short bio..."></textarea>
                <input type="submit" name ="submit" id = "submit" value="Submit">
            </form>
        </div>

         <div>
             <form name="selection"   method="post">
                    <button class="tablink" name = "Avatar1" onclick="openPage('Avatar1', this, 'deeppink');return false;" id="defaultOpen">Avatar1</button>
                    <button class="tablink" name = "Avatar2" onclick="openPage('Avatar2', this, 'mediumpurple');return false;">Avatar2</button>
                    <button class="tablink" name = "Avatar3" onclick="openPage('Avatar3', this, 'lightsteelblue');return false;">Avatar3</button>
                    <button class="tablink" name = "Avatar4" onclick="openPage('Avatar4', this, 'skyblue');return false;">Avatar4</button>
            </form>
             
                <div id="Avatar1" class="tabcontent">
                    <img src="Avatar1.png" alt="Avatar1" style="max-width: 100%">
                </div>

                <div id="Avatar2" class="tabcontent">
                    <img src="Avatar2.png" alt="Avatar2" style="max-width: 100%">
                </div>

                <div id="Avatar3" class="tabcontent">
                    <img src="Avatar3.png" alt="Avatar3" style="max-width: 100%">
                </div>

                <div id="Avatar4" class="tabcontent">
                    <img src="Avatar4.png" alt="Avatar4" style="max-width: 100%">
                </div>
                     <input type="submit" action="avatar.php" name="submit"/>

        </div>		
    </div>
	
    <div class="adduser">
            <form action="../search">
                <input class="adduser" type="image" src="addbutton.png" />
            </form>
    </div>
	
</Body>
<script src="script.js"></script>
</html>