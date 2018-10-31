
<!DOCTYPE html>
<head>
	<title>The reflective file</title>
</head>
<body>

Welcome <?php echo $_POST["firstname"];?><br />
Your email address is: <?php echo $_POST["email"];?><br />
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 $link = mysqli_connect("localhost", "root", "", "");
// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_POST['firstname']);
$last_name = mysqli_real_escape_string($link, $_POST['lastname']);
$email_address = mysqli_real_escape_string($link, $_POST['email']);
// attempt insert query execution
$sql = "INSERT INTO trecord.persons (first_name, last_name, email_address) VALUES ('$first_name', '$last_name', '$email_address')";
if(mysqli_query($link, $sql)){
   echo "Data successfully Saved to the database.";
} else{
   echo "ERROR: Could not be able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>

</body>

</html>