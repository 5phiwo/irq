<?Php
	require_once("inc/config/db.php");
	session_start();
	
	if(isset($_POST["continue"]))
	{
		$email = $_POST["email"];
		
		$sql = "select * from user where(email = '$email')";
		$query = mysqli_query($conn, $sql) or die(mysqli_error());
		
		if($query)
		{
			if(mysqli_num_rows($query) == 1)
			{
				$r = mysqli_fetch_assoc($query);
				
				$email = $r['email'];
				$name = $r['first_name'] . " " . $r['last_name'];
				
				$_SESSION['email'] = $email;
				$_SESSION['name'] = $name;
				
				//redirect
				header("Location: welcome.php");
			}
			else
			{
				$message = "Wrong email address.";
			}
		}
	}
?>

<!DOCTYPE html>
<head>
<?Php require_once("inc/templates/header.php"); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
					<h3> Welcome to Deloitte's Third Party Risk Management Questionnaire for Inherent Risk </h3>
					<div style="margin-top: 60px;" class="text-center">
						<h4>Provide your email address to start or <a href="register.php">register</a></h4>
					</div>
					<div class="col-lg-4 col-lg-offset-4">
						<div class="row text-left">
							<form action="index.php" method="post">
								<div class="col-lg-12">
									<div class="form-group">
										<label>Email address</label>
										<input type="text" name="email" class="form-control">
										<div style="color: red;"><?Php if(isset($message)) echo $message; ?></div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input class="btn btn-primary" type="submit" name="continue" value="Continue">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/footer.php"); ?>