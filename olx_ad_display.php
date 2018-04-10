<?php require './header.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3 style="color: #0EA300; border-bottom: #0EA300 solid 2px; margin-top: 2px;">Campus-OLX Posts</h3>
				<?php
					$m = new model();
					$result = $m->get_all_ad();
					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
				?>
				<div class="jumbotron">
					<h1 class="display-4"><?php echo $row["HEADING"]; ?></h1>
					<p class="lead"><?php echo $row["DESCRIPTION"]; ?></p>
					<p class="lead">Posted by: <?php echo $row["NAME"]; ?></p>
					<p class="lead">Contact Number: <?php echo $row["CONTACT_NUMBER"]; ?></p>
					<p class="lead">Published on: <?php echo $row["DATE"]; ?></p>
				</div>
				<?php }
					}else{
				?>
				<h1>NO Advertisments TO DISPLAY!</h1>
				<?php } ?>
			</div>
			<?php require 'utility_display.php' ?>
		</div>
	</div>

<?php require './footer.php'; ?>