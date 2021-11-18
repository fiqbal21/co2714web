<!DOCTYPE html>
<html>
<head>
<title>Test</title>
</head>
<body>
<?php

 $servername = "localhost";
 $username = "student";
 $password = "website";
 $dbasename = "labwork";
 
 //create connection 
 $mysql = new mysqli($servername, $username, $password, $dbasename);
 
 //check connection 
 if ($mysql->connect_errno) {
	 printf("connect failed: %s\n", $mysql->connect_error);
	 exit();
 }
 
?>
</body>
</html>

