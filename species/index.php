<?php
	include "../common/header.php";

	$con = mysqli_connect('localhost', 'root', '', 'hospital');

	$sql = 'SELECT * FROM patient';

	$result = $con ->query($sql);

	$patientList = $result->fetch_all(MYSQLI_ASSOC);
?>
	<h1>Species</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thread>
			<tr>
				<th>Species</th>
				<th>Patient</th>
			</tr>
			<?php 
				foreach($patientList as $patient){
			 ?>
			<tr>
				<td><?php  ?></td>
				<td></td>
				<td><a href="edit.php?id=<?=$patient['id']?>"></a></td>
				<td><a href="delete.php?id=<?=$patient['id']?>"></a></td>
			</tr>
			<?php 
				}
			 ?>
		</thread>
	</table>
	
<?php
	include "../common/footer.php";
?>