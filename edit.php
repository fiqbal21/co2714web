<!DOCTYPE html>
<html>
<head>
<title>edit</title>
</head>
<body>
<?php


if (isset($_POST['submit']))// you called your submit button submit 
{
	include 'connect.php';
	$updatequery = "UPDATE users SET 
firstname = '" .$_POST['fname']."' ,
lastname = '" .$_POST['sname']."' ,
email = '" .$_POST['email']."' ,
password = '" .$_POST['pass']."' 
Where ID = '" .$_GET['id']."' ";


if (!$mysqli->query($updatequery)) {
    echo "Error: ".$mysqli->error;
}
else {
    echo "Record updated successfully";
    echo "<a href=\"users.php\">Back</a>";
} 
$mysqli->close();
}

else 
{     	include 'connect.php';
	$populatequery = "SELECT * from users WHERE ID='".$_GET['id']."'";
    $result = $mysqli->query ($populatequery);
    if ($result){
      if ($result->num_rows > 0) 
      {
        while($row = $result->fetch_assoc()) 
        {
          $fn = $row['firstname'];
        $sn = $row['lastname'];
        $em = $row['email'];
        $pw = $row['password'];
        }
       }
  ?>
  <h1>Edit record:</h1>
  <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post" >
  
  <label for="fname">Firstname: </label>
  <input type="text" id="fname" name="fname" value="<?php echo "$fn"; ?>"/><br>
  
  <label for="sname">lastname: </label>
  <input type="text" id="sname" name="sname" value="<?php echo"$sn"; ?>"/><br>
  
  <label for="email">Email: </label>
  <input type="text" id="email" name="email" value="<?php echo"$em"; ?>"/><br>
  
  <label for="password">Password: </label>
  <input type="password" id="pass" name="pass" value="<?php echo"$pw"; ?>"/><br>
  
  <input type="submit" id="submit" name="submit" value="submit"/>
  </form>	
  </body>
  </html>
  <?php	
  } //this bracket closes the one that opened at if ($result) and NOT the else block which we are within!
}
  ?>

</body>
</html>
