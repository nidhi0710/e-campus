<?php require './header.php'; ?>

	<div class="container">
		<?php
			$m = new model();
			$result = $m->get_it_page_blog_data();
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<div class="jumbotron">
			<h2 class="display-4"><?php echo $row["HEADING"]; ?></h2>
			<p class="lead"><?php echo $row["DESCRIPTION"]; ?></p>
			<p class="lead">Author: <?php echo $row["OWNER"]; ?></p>
			<p class="lead">Published on: <?php echo $row["PUBLISH_DATE"]; ?></p>
		</div>
		<?php }
			}else{
		?>
		<h1>NO BLOGS TO DISPLAY!</h1>
		<?php } ?>
	</div>

<?php require './footer.php'; ?>