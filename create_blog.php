<?php require './header.php'; ?>

	<div class="container">
		<form method="POST" action="./controller.php">
			<div class="form-group">
				<input type="text" name="blog_heading" placeholder="heading goes here"><br /><br />
				<textarea rows="10" cols="50" name="blog_content" placeholder="content goes here"></textarea>
			</div>

			<!-- SELECT DEPARTMENT -->
			<p>Select Department:</p>
			<input type="radio" name="department_type" value="GENERAL" checked>General<br />
			<input type="radio" name="department_type" value="CLUB">Clubs<br />
  			<input type="radio" name="department_type" value="IT" >I.T.<br />
  			<input type="radio" name="department_type" value="EC">E.C.<br />
  			<input type="radio" name="department_type" value="CSE">C.S.E.<br />
  			<input type="radio" name="department_type" value="EE">Electrical<br />
  			<br /><br />

  			<!-- SELECT POST TYPE -->
  			<p>Select Post Type:</p>
  			<input type="radio" name="post_type" value="BLOG" checked>Blog<br />
  			<input type="radio" name="post_type" value="NOTICE">Notice<br />
  			<input type="radio" name="post_type" value="ACHIEVEMENT">Achievement<br />
  			<br /><br />
  			<!-- SUBMIT -->
			<input type="submit" class="btn btn-success" name="new_blog_btn" value="Publish">
			<input type="reset" class="btn btn-danger" name="cancel_blog_btn" value="Cancel">
		</form>
	</div>

<?php require './footer.php'; ?>
