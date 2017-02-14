<?php
	include "../common/header.php";
?>
<?php 
	$con = mysqli_connect('localhost', 'root', '', 'hospital');

	$sql = 'SELECT * FROM client';

	$result = $con ->query($sql);

	$clientList = $result->fetch_all(MYSQLI_ASSOC);

	if (isset($pet)){
		$pet = $_POST['pet'] ;
	} else {
		$pet = 'Unknown';
	}
 ?>
	<h1>Clients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Client id</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Phone number</th>
				<th>Adress</th>
				<th>City</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($clientList as $client){
			 ?>
			<tr>
				<td><?=$client['id']?></td>
				<td><?=$client['firstname']?></td>
				<td><?=$client['lastname']?></td>
				<td><?=$client['phone']?></td>
				<td><?=$client['adress']?></td>
				<td><?=$client['city']?></td>
				<td class='center'><a href="edit.php?id=<?=$client['id']?>">edit</a></td>
				<td class='center'><a href="delete.php?id=<?=$client['id']?>">delete</a></td>
			</tr>
			<?php 
				}
			 ?>
		 </tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>