<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$client = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = mysqli_connect('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from client where id=$id";
			$result = $db->query($query);
		
			$client = $result->fetch_assoc();	
		endif;
		if ($client == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = mysqli_connect('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_GET["id"]);
		$firstName = $db->escape_string($_POST["firstname"]);
		$lastName = $db->escape_string($_POST["lastname"]);
		$phone = $db->escape_string($_POST["phone"]);
		$adress = $db->escape_string($_POST["adress"]);
		$city = $db->escape_string($_POST["city"]);
		
		// Prepare query and execute
		$query = "update client set firstname='$firstName', lastname='$lastName', phone='$phone', adress='$adress', city='$city' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>