<?php
	require './header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-10">
	<h3 style="color: #0EA300; border-bottom: #0EA300 solid 2px; margin-top: 2px;">CANTEEN</h3>
	<div class="jumbotron">
		
		<form action="./controller.php" method="POST">
			<div class="form-group">
				Name: <input type="text" name="name"><br><br>
				Enrollment No: <input type="text" name="enrollment_no"><br><br>
				Select an item:
				<select name="item_name">
					<option value="">Select</option>
					<option value="Pav-Bhaji">Pav-Bhaji</option>
					<option value="Sandwich">Sandwich</option>
					<option value="Samosa">Samosa</option>
					<option value="Vada-pav">Vada-pav</option>
					<option value="Chips">Chips</option>
				</select><br><br>
				Quantity of Item: <input type="text" name="quantity_item" placeholder="0"><br><br>
				<input class="btn btn-success" type="submit" name="order" value="Order">
			</div>
		</form>
	</div>
	</div>
	<?php require 'utility_display.php' ?>
	</div>
</div>