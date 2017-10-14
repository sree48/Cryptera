<?php
	$hostname = 'localhost';
	$user = 'gowthamprakaash';
	$pass = '1n1la54mc2fkA!';
	$db = new PDO( "mysql:host=$hostname;dbname=CrypteraWebsiteUsers", $user, $pass );
	$sql = "SELECT * FROM websiteusers;";
	$query = $db->prepare( $sql );
	$query->execute();
	$results = $query->fetchAll( PDO::FETCH_ASSOC );
	echo $results ;
	//echo "<h3> Internal Use for Cryptera Incharges Only </h3><table><tr><th>ID</th><th>Name</th><th>College</th><th>Department</th><th>Phone</th><th>Email</th><th>Gender</th><th>Day1</th><th>Day2</th><th>Workshop1</th><th>Workshop2</th><th>Gaming</th></tr> ";
   	foreach( $results as $row )
   	{
   		echo $row;
	    // echo "<tr><td>"
	     echo $row['id'];
	     //echo "</td><td>";
	     echo $row['name'];
	     //echo "</td><td>";
	     echo $row['college'];
	     //echo "</td><td>";
	     echo $row['dept'];
	     //echo "</td><td>";
	     echo $row['phone'];
	     //echo "</td><td>";
	     echo $row['email'];
	     //echo "</td><td>";
	     echo $row['gender'];
	     //echo "</td><td>";
	     echo $row['day1'];
	     //echo "</td><td>";
	     echo $row['day2'];
	     //echo "</td><td>";
	     echo $row['w1'];
	     //echo "</td>";
	     echo $row['w2'];
	     //echo "</td><td>"
	     echo $row['gaming'];
	     //echo "</td>";
	     //echo "</tr>";
   	}
	 //echo " </table> </div></body></html> ";
	 }
	 
	 catch(Exception e)
	 {
	 }
?>