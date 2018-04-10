<?php require './header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-10">
	<!-- <div class="container"> -->
		<h3 style="color: #0EA300; border-bottom: #0EA300 solid 2px; margin-top: 2px;">E-LIBRARY</h3>

		<?php if($_SESSION['user_type'] == "AUTHORITY" ) { ?>
		<h4 style="color: #0EA300; margin-top: 2px;">UPLOAD A BOOK</h4>

		<a id="new_book_btn" class="btn btn-info" target="_blank">Upload Book</a><br><br>
		<div class="jumbotron">
		<form id="new_book_form" method="POST" action="./controller.php">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Book Name Here" name="book_name"><br><br>
				<input type="text" class="form-control" placeholder="Author Name here" name="author_name"><br><br>
				<input type="text" class="form-control" placeholder="URL here" name="book_url"><br><br>
				<!-- SELECT DEPARTMENT -->
				<p>Select Department:</p>
				<input type="radio" name="department_type" value="GENERAL" checked>General
	  			<input type="radio" name="department_type" value="IT" >I.T.
	  			<input type="radio" name="department_type" value="EC">E.C.
	  			<input type="radio" name="department_type" value="CSE">C.S.E.
	  			<input type="radio" name="department_type" value="EE">Electrical
	  			<br /><br />
	  			<input type="submit" name="insert_new_book" value="Upload">
			</div>
		</form>
		</div>
		<?php } ?>

		<br /><br />

		<h4 style="color: #0EA300; margin-top: 2px;">SEARCH A BOOK</h4>

		<a id="search_book_btn" class="btn btn-info">Search books</a><br><br>
		<form id="search_book_form" method="POST" action="./controller.php">
			<div class="form-group">
				<input type="text" class="form-control" name="book_name" placeholder="Book name goes here"><br /><br>
				<input type="text" class="form-control" name="author_name" placeholder="Author name goes here"><br><br>
				<!-- SELECT DEPARTMENT -->
				<p>Select Department:</p>
				<input type="radio" name="department_type" value="GENERAL" checked>General
	  			<input type="radio" name="department_type" value="IT" >I.T.
	  			<input type="radio" name="department_type" value="EC">E.C.
	  			<input type="radio" name="department_type" value="CSE">C.S.E.
	  			<input type="radio" name="department_type" value="EE">Electrical
	  			<br /><br />
	  			<input type="submit" name="get_book_btn" value="Search">
			</div>
		</form>
		</div>
		<?php require 'utility_display.php' ?>
	</div>
</div>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#new_book_form").hide();
			$("#search_book_form").hide();

			$("#new_book_btn").click(function () {
				$("#new_book_form").toggle();
			});
			$("#search_book_btn").click(function () {
				$("#search_book_form").toggle();
			});
		});
	</script>

<?php require './footer.php'; ?>
