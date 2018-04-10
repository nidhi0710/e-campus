<?php require './header.php'; ?>

	<div class="container">
		
		<h3 style="color: #0EA300; border-bottom: #0EA300 solid 2px;">WANT TO POST SOMETHING?</h3>
		<div class="jumbotron">
		<form method="POST" action="./controller.php">
			<div class="form-group">
				Name of your object: <input type="text" name="ad_heading" placeholder="heading goes here"><br /><br />
				Describe your object: <textarea rows="10" cols="50" name="ad_content" placeholder="content goes here"></textarea>
			</div>
  			<!-- SUBMIT -->
			<input type="submit" class="btn btn-success" name="new_ad_btn" value="Publish">
			<input type="reset" class="btn btn-danger" value="Cancel">
		</form>
		</div>
	</div>

<?php require './footer.php'; ?>