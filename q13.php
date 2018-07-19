<DOCTYPE html>
<head>
<body>
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
							</br>
							<div class="">
								<div><label><input type="radio" name="third_party"> Yes <input type="radio" name="third_party"> No</label></div>
							</div>
						</div>
						<div class="col-lg-12">
						<div class="col-lg-6 col-lg-offset-3 text-center">
						<div style="margin-top:60px;">
							<div class="grp-input">
							<input type="submit" name="next" value="Submit & Review" class="btn btn-primary">
								</br> </br> </br> </br>
								<a href="q12.php" >Previous</a>
								</br></br></br></br>
								<h6>Question 13 of 13</h6>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>