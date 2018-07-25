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
	else
	{
		header("index.php");
	}
	
	if(isset($_POST['next']))
	{
		$_SESSION['answers']['q9'] = $_POST['q9'];
		header("Location: q10.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q9.php" method="post">
						<div class="col-lg-12 ">
							<div class="">
								<label>9. As part of providing the product or service, will any third parties require physical access to any locations used by the organisation?</label>
							</div>
							</br>
							<div class="">
								<div><label><input type="radio" name="q9"> Yes <input type="radio" name="q9"> No</label></div>
							</div>
						</div>
						<div class="col-lg-6 col-lg-offset-3 text-center">
						<div style="margin-top:60px;">
							<div class="grp-input">
							<input type="submit" name="next" value="Next" class="btn btn-primary">
								</br> </br> </br> </br>
								<a href="q8.php" >Previous</a>
								</br></br></br></br>
								<h6>Question 9 of 13</h6>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>