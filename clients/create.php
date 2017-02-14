<?php
	require_once "create.logic.php";
	include "../common/header.php";

	$con = mysqli_connect('localhost','root','','hospital');

	$query = 'SELECT * FROM patient WHERE clientid = 0';
	$result = $con->query($query);

	$patientList = $result->fetch_all(MYSQLI_ASSOC);
?>
	<h1>New client</h1>
	<form method="post">
		<div>
			<label for="name">First name:</label>
			<input type="text" id="firstname" name="firstname">
		</div>
		<div>
			<label for="name">Last name:</label>
			<input type="text" id="lastname" name="lastname">
		</div>
		<div>
			<label for="name">Phone nuber:</label>
			<input type="text" id="phone" name="phone">
		</div>
		<div>
			<label for="name">Adress:</label>
			<input type="text" id="adress" name="adress">
		</div>
		<div>
			<label for="name">City:</label>
			<input type="text" id="city" name="city">
		</div>
		<div>
			<label for="name">Owner of:</label>
			<?php 
				foreach ($patientList as $patient){
			 ?>
				<br><input type="checkbox" id="pet" name="pet[<?php echo ($patient['id']);?>]"><?php echo ($patient['name']).' / '.($patient['species']); ?>
			<?php 
				}
			 ?>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>