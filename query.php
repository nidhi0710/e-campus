<?php require './header.php'; ?>
	
	<div class="container">

		<a class="btn btn-danger" id="input_query">Have a Query?</a>
		<a href="department.php" class="btn btn-success" id="view_query">View Query</a>


	<div class="container">
		<form method="POST" action="./controller.php" enctype="multipart/form-data">
		<div id="write_query">
			<div class="form-group">
				<input type="text" name="query_heading" placeholder="heading goes here"><br /><br />
				<textarea rows="10" cols="50" name="query_content" placeholder="content goes here"></textarea>
				Select image to upload:
    			<input type="file" class="btn btn-info" name="img" id="fileToUpload"><br>
			</div>

			<!-- SELECT DEPARTMENT -->
			<p>Select Department:</p>
			<input type="radio" name="department_type" value="GENERAL" checked>General<br />
  			<input type="radio" name="department_type" value="IT" >I.T.<br />
  			<input type="radio" name="department_type" value="EC">E.C.<br />
  			<input type="radio" name="department_type" value="CSE">C.S.E.<br />
  			<input type="radio" name="department_type" value="EE">Electrical<br />
  			<br /><br />
			<input type="hidden" name="query_id">
			<p>Request doubt live solving</p>
			<input type="radio" name="live" id="yes" value="yes" >Yes<br />
  			<input type="radio" name="live" id="no" value="no" checked>No<br />
  			<div id="request_live">
  			<input type="number" name="std_no" class="form-control" value="<?php echo NULL?>" placeholder="number of attending students" ><br/>
  			<input type="text" name="prof_id" class="form-control" value="<?php echo NULL?>" placeholder="write email-id of professor"><br/>
  			</div>
  			<!-- SUBMIT -->
			<input type="submit" class="btn btn-success" name="new_query_btn" value="Post">
			<input type="reset" class="btn btn-danger" name="cancel_query_btn" value="Cancel">
		</form>
	</div>
</div>
<script type="text/javascript">
		$(document).ready(function () {
			$("#request_live").hide();
			$("#yes").click(function () {
				 $("#request_live").show();
			});
			$("#no").click(function () {
				 $("#request_live").hide();
			});
		});
		$(document).ready(function () {
			$("#write_query").hide();
			$("#input_query").click(function () {
				 $("#write_query").show();
			});
		});
	</script>
<?php require './footer.php'; ?>
