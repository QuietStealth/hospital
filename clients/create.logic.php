<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = mysqli_connect('localhost','root','','hospital');
		
		// Prepare data for insertion
		$firstName = $db->escape_string($_POST["firstname"]);
		$lastName = $db->escape_string($_POST["lastname"]);
		$phone = $db->escape_string($_POST["phone"]);
		$adress = $db->escape_string($_POST["adress"]);
		$city = $db->escape_string($_POST["city"]);

		$pets = $_POST['pet'];
		//var_dump($pet);
		
		// Prepare query and execute
		$query = "insert into client (firstname, lastname, phone, adress, city) values ('$firstName','$lastName','$phone','$adress','$city')";
		$result = $db->query($query);

		$clientid = $db->insert_id;
		var_dump($clientid);

		foreach ($pets as $key => $value){
			$sql = "UPDATE patient set clientid = $clientid WHERE id = $key";
			$result2 = $db->query($sql);

		}
	
    // Tell the browser to go back to the index page.
    //header("Location: ./");
    exit();
	endif;

?>