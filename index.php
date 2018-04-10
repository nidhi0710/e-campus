<?php require './header.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3 style="color: #0EA300; border-bottom: #0EA300 solid 2px; margin-top: 2px;">NOTICE BOARD</h3>
				<?php
					$m = new model();
					$result = $m->get_main_page_blog_data();
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

				<h3 style="color: #0EA300; border-bottom: #0EA300 solid 2px;">FEES UPDATE</h3>
				<div class="jumbotron">
					<p>
						Students are supposed to pay their fees using the given link.<br>
						<b>Online Fees Payment Link:</b>
						<a href="https://www.eduqfix.com/OnlineForms/ldadmissionform/add" target="_blank">PAY FEES</a>
					</p>

					<p>
						Dear Students,<br>Instructions for Fee Payment ( HDFC )<br>All students to go through the notice carefully for online payment before making payment. All the relevant details after opening the form should be filled correctly. Generate both the fee receipt and payment acknowledgement slip. Do not pay fees after the last date without permission. Otherwise their payment will not be valid. Kindly inform all your friends regarding this.<br>
						Thanking you,<hr><br>Student Section,<br>L. D. College of Engineering,
						<br>Ahmedabad - 380015, GJ, IN
					</p>
				</div>
			</div>
			<?php require 'utility_display.php' ?>
		</div>
	</div>

<?php require './footer.php'; ?>