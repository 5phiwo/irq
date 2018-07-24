<DOCTYPE html>
<head>
<body>
<?Php
	require_once("inc/config/db.php");
	session_start();
	
	$fname = "";
	$lname = "";
	$email = "";
	$role = "";
	
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
		
		$sql = "select * from user where(email = '$email')";
		
		$query = mysqli_query($conn, $sql) or die(mysqli_error());
		
		$r = mysqli_fetch_assoc($query);
		
		$fname = $r['first_name'];
		$lname = $r['last_name'];
		$email = $r['email'];
		$role = $r['role'];
	}
	else
	{
		exit("Page access not allowed please provide your email address.");
	}
	
	if(isset($_POST['next']))
	{
		header("Location: q9.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
	<div style="margin-top: 50px; margin-bottom: 100px">
		<div class="col-lg-6 col-lg-offset-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<h2>User Details</h2>
						</div>
					</div>
					</br>
					<div class="row">
						<div class="col-lg-2"><label>First name:</label></div>
						<div class="col-lg-2"><?Php echo $fname; ?></div>
					</div>
					<div class="row">
						<div class="col-lg-2"><label>Last name:</label></div>
						<div class="col-lg-2"><?Php echo $lname; ?></div>
					</div>
					</br>
					<div class="row">
						<div class="col-lg-2"><label>Email:</label></div>
						<div class="col-lg-2"><?Php echo $email; ?></div>
					</div>
					<div class="row">
						<div class="col-lg-2"><label>Role:</label></div>
						<div class="col-lg-2"><?Php echo $role; ?></div>
					</div>

					</br></br></br>
					<div class="row">
						<div class="col-lg-12">
							<a class="btn btn-primary" href="q1.php">Continue</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/footer.php"); ?>