 <?php  
        session_start();
        $servername = "lamp";
        $dbName = "cen4010fal19_g05"; 
        try {
            $emailDB = "rleiva2017@fau.edu"; 
            $passwordDB ="password123"; 
            $conn = new PDO("mysql:host=$servername;dbname=$dbName",trim($emailDB),trim($passwordDB));
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $email = "rleiva2017@fau.edu"; //trim($_POST['loginName']);
            $password = "password123"; //md5(trim($_POST['loginPassword']));

            $stmt = $conn->prepare("SELECT Email, Password FROM users 
                    WHERE username ='$username' AND password ='$password'");
            
            $stmt->execute();
            $flag = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result= $stmt->fetchAll();


            if(count($result) == 1 ){
                $_SESSION['Email'] = $email;

                exit;
                $conn = null;
            }
            else{ ?>
        <script language="javascript" type="text/javascript">
            alert('Message: Invalid username or password.');
            history.back(1);
        </script>
        <?php

            }
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        } 
        ?>