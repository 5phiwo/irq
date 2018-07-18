<?Php
	require_once("inc/config/db.php");
	session_start();
	
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
	}
	
	if(isset($_POST['finish']))
	{
		header("Location: preview.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q13.php" method="post">
						<div class="col-lg-12 ">
							<div class="">
								<label>13. Will any third party require physical, logical, or virtual access to the organisation's IT infrastructure or network?</label>
							</div>
							<div class="">
								<div><input type="radio" name="third_party"> Yes <input type="radio" name="third_party"> No</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="grp-input">
								<a href="q12.php" class="btn btn-primary">Previous</a>
								<input type="submit" name="finish" value="Submit" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>