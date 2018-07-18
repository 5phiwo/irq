<?Php
	require_once("inc/config/db.php");
	session_start();
	
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
	}
	
	if(isset($_POST['next']))
	{
		header("Location: q11.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q10.php" method="post">
						<div class="col-lg-12 ">
							<div class="">
								<label>10. Is the product or service key to the development of the organisation and its ongoing operation?</label>
							</div>
							<div class="">
								<div><input type="radio" name="third_party"> Yes <input type="radio" name="third_party"> No</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="grp-input">
								<a href="q9.php" class="btn btn-primary">Previous</a>
								<input type="submit" name="next" value="Next" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>