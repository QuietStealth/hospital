<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit client</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">First name:</label>
			<input type="text" id="firstname" name="firstname" value="<?=$client['firstname']?>">
		</div>
		<div>
			<label for="name">Last name:</label>
			<input type="text" id="lastname" name="lastname" value="<?=$client['lastname']?>">
		</div>
		<div>
			<label for="name">Phone number:</label>
			<input type="text" id="phone" name="phone" value="<?=$client['phone']?>">
		</div>
		<div>
			<label for="name">Adress:</label>
			<input type="text" id="adress" name="adress" value="<?=$client['adress']?>">
		</div>
		<div>
			<label for="name">City:</label>
			<input type="text" id="city" name="city" value="<?=$client['city']?>">
		</div>
		<div>
			<label for="name">Owned patients:</label>
			<input type="checkbox" id="pet" name="pet"><?php echo ($patient['name']).' / '.($patient['species']); ?>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>