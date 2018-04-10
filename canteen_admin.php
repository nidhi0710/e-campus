<?php
	require './model.php';
	$m = new model();
	$pass = "123";
	$admin = FALSE;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php
	extract($_POST);
	if(isset($_POST['canteen_admin_btn'])){
		if( $_POST['canteen_admin_password'] == $pass ){
			$admin = TRUE;
		}
	}
?>

<?php if(!$admin){ ?>
	<div class="jumbotron"  style="text-align: center;">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<p class="lead">Enter Canteen Admin password</p>
			<input type="password" name="canteen_admin_password" placeholder="password">
			<input type="submit" name="canteen_admin_btn" value="Submit">
		</form>
	</div>


<?php }else{ ?>
	<div class="container">
		<h3 style="color: #0EA300; border-bottom: #0EA300 solid 2px; margin-top: 2px;">ORDER DETAILS</h3>
		<table class="table table-striped">
			<tr>
				<th>Student Name</th>
				<th>Enrollment No</th>
				<th>Item</th>
				<th>Quantity</th>
				<th>Action</th>
			</tr>

		<?php
			$result = $m->get_canteen_data();
			while ($data=$result->fetch_array()) {
			?>
			<tr>
				<td><?php echo $data['name'] ?></td>
				<td><?php echo $data['enrollment_no'] ?></td>
				<td><?php echo $data['item_name'] ?></td>
				<td><?php echo $data['quantity_item'] ?></td>
				<td><a class="btn btn-danger" href="./controller.php" name="delete_data">DELETE</a></td>
			</tr>
			<?php  } ?>
		</table>
	</div>

<?php } require './footer.php'; ?>