<?Php
	require_once("inc/config/db.php");
	session_start();
	
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
	}
	
	if(isset($_POST['next']))
	{
		header("Location: q2.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q1.php" method="post">
						<div class="col-lg-12 ">
							<div class="">
								<label>1. Please describe the product / service required from the third party.</label>
							</div>
							<div class="">
								<textarea name="product_desc" class="form-control"></textarea>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="grp-input">
								<input type="submit" name="next" value="Next" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>