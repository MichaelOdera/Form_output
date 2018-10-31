<!DOCTYPE html>
<html lan= "eng">

<head>
	<meta charset = "UTF-8">
	<title>Displaying your output immediately</title>
</head>

<body>

	


	<?php
	$name = $email = $website = $comment = $gender = " ";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$website = test_input($_POST["website"]);
	$comment = test_input($_POST["comment"]);
	$gender = test_input($_POST["gender"]);}

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>

    <h2>Please enter the details below: </h2>
	<form method = "post" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
		Name: <input type="text" name = "name">
		<br /><br />
		Email: <input type = "text" name = "email">
		<br /><br />
		Website: <input type = "text" name = "website">
		<br /><br />
		Comments: <br />
		<textarea name = "comment" rows="5" cols= "20"></textarea>
		<br /><br />

		Gender:<br />
		<input type = "radio" name = "gender" value = "Female" checked="checked">Female: <br / >
		<input type = "radio" name = "gender" value = "Male"> Male : <br />
		<input type = "radio" name = "gender" value = "Other"> Other : <br />
		<input type = "submit" value = "Submit">

    </form>

    <form action="http://sms.services/send-sms" method="get">
    	<input type="number" name="to" />
    	<input type="text" name="message" />
    	<input type="hidden" name="app-id" value="108744" />
    	<input type="hidden" name="password" value="1111111" />
    	<input type="hidden" name="from" value="TestSender" />
    	<input type="submit" value="Submit" />
    </form>
    
 <p>Please click this link to enter your Paypal details. <br />
 	<a href = "https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fcgi-bin%2Fwebscr%3fcmd%3d_account">Paypal</a>
 </p>
 <?php
 echo "<h2>Your entries will be displayed down here</h2>";
 echo "<br />";
 echo "<br />";
 echo "Welcome dear ";
 echo $name; 
 echo "<br />";
 echo "<br />";
 echo "You have given us your email as: ";
 echo $email; 
 echo "<br />";
 echo "<br />";
 echo "Your website address is provided as: ";
 echo $website;
 echo "<br />";
 echo "<br />";
 echo $comment;
 echo "<br />";
 echo "<br />";
 echo "Your gender is given as: ";
 echo $gender;
 echo "<br />";
 echo "<br />";


 ?>
</body>

</html>