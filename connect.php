
<?php

 $servername = "localhost";
 $username = "student";
 $password = "website";
 $dbasename = "labwork";
 
 //create connection 
 $mysqli = new mysqli($servername, $username, $password, $dbasename);
 
 //check connection 
 if ($mysqli->connect_errno) {
	 printf("connect failed: %s\n", $mysql->connect_error);
	 exit();
 }
 
?>


