<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        echo "test";
        include 'connect.php';
        
        if (!isset( $_POST['submit'] )) {
            echo "<p>ERROR form was not submitted</p>";
        }
        else {
			
			$hashedpassword = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $sql = "insert into login (firstname, lastname, email, password) values ('".$_POST['fname']."','".$_POST['sname']."','".$_POST['email']."','".$hashedpassword."')";
        
            if (!$mysqli->query($sql)) {
                echo "Error: ".$mysqli->error;
            }
            else {
                echo "success";
            } 
            $mysqli->close();
        }
        }
        else {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <title>Registration</title>
        </head>
        <body>
        <h1>Registration</h1>
        <form action="register.php" method="POST" >
           Firstname: <input type="text" id="fname" name="fname"/><br>
           Surname: <input type="text" id="sname" name="sname"/><br>
           Email: <input type="text" id="email" name="email"/><br>
           Password: <input type="password" id="pass" name="pass"/><br>
           <input type="submit" id="submit" name="submit" value="submit"/>
        </form>
        </body>
        </html>
        <?php
        }
?>
