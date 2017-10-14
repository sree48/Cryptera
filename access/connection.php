
    <?php
    $db_server = "localhost";
    $db_username = "gowthamprakaash";
    $db_password = "1n1la54mc2fkA!";
    $db_database = "CrypteraWebsiteUsers";
     echo "hello" ;
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		$result = $conn->prepare("SELECT * FROM websiteusers ORDER BY id ASC");
    		$result->execute();
    		for($i=0; $row = $result->fetch(); $i++){
    ?>