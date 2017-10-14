<?php
		$hostname='localhost';
		$username='gowthamprakaash';
		$password='1n1la54mc2fkA!';

		try
		{
			$dbh = new PDO("mysql:host=$hostname;dbname=CrypteraWebsiteUsers", $username, $password );

			if ($dbh->connect_error)
			{
    			die("Connection failed: " . $dbh->connect_error);
			} 

			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = "INSERT INTO websiteusers (name, college, dept, phone, email, gender, w1, w2, day1, day2, gaming)
			VALUES ('".$_POST["name"]."','".$_POST["college"]."','".$_POST["dept"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["gender"]."','".$_POST["w1"]."','".$_POST["w2"]."','".$_POST["day1"]."','".$_POST["day2"]."','".$_POST["gaming"]."')";


	#		if ($dbh->query($sql)) 
	#		{
	#			echo "<script type= 'text/javascript'>alert('Registration Successfull. Verify the details sent to your inbox.');</script>";
	#		}
	#		else
	#		{
	#			echo "<script type= 'text/javascript'>alert('Please try again later !');</script>";
	#		}

				
$subject = "Email Test";
$message = "This is just a mail test";

$emailaddress = "gowthamprakaash@gmail.com";

$mail=mail($emailaddress, $subject, $message, "From:register@cryptera.com");

if ($mail){
echo"Message has been sent";
}
else{
echo"Message not sent this time";
}

			$dbh = null;

			$URL="http://cryptera.xyz";
			echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
			echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
?>