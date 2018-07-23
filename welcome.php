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
	<div style="margin-top: 100px; margin-bottom: 100px">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<h4>User Details</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">First name</div>
						<div class="col-lg-6"><?Php echo $fname; ?></div>
					</div>
					<div class="row">
						<div class="col-lg-6">Last name</div>
						<div class="col-lg-6"><?Php echo $lname; ?></div>
					</div>
					<div class="row">
						<div class="col-lg-6">Email</div>
						<div class="col-lg-6"><?Php echo $email; ?></div>
					</div>
					<div class="row">
						<div class="col-lg-6">Role</div>
						<div class="col-lg-6"><?Php echo $role; ?></div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<a class="btn btn-primary" href="q1.php">Contineue</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/footer.php"); ?>