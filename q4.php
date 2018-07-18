<?Php
	require_once("inc/config/db.php");
	session_start();
	
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
	}
	
	if(isset($_POST['next']))
	{
		header("Location: q5.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q4.php" method="post">
						<div class="col-lg-12 ">
							<div class="">
								<label>4. What is the estimated total value (in GBP) of the engagement?</label>
							</div>
							<div class="">
								<input type="text" name="product_desc" class="form-control">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="grp-input">
								<a href="q3.php" class="btn btn-primary">Previous</a>
								<input type="submit" name="next" value="Next" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>