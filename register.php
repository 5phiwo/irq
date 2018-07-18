<?Php
	require_once("inc/config/db.php");
	
	if(isset($_POST['reg_user']))
	{
		$title = $_POST['title'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$function = $_POST['function'];
		$role = $_POST['role'];
		
		$sql = "insert into user(title, first_name, last_name, email, business_function, role)
				values('$title', '$fname', '$lname', '$email', '$role', '$function')";
				
		$query = mysql_query($sql) or die(mysql_error());
		
		if($query)
		{
			session_start();
			$_SESSION['email'] = $email;
			header('Location: question.php');
		}
		else
		{
			
		}
	}
?>

<?Php require_once("inc/templates/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h3><strong>Register</strong></h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="">
                <form action="register.php" method="post">
					<div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" name="fname" class="form-control">
                    </div>
                    <div class="form-group">
						<label>Last name</label>
                        <input type="text" name="lname" class="form-control">
                    </div>
					<div class="form-group">
						<label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
					<div class="form-group">
						<label>Role</label>
                        <input type="text" name="role" class="form-control">
                    </div>
					<div class="form-group">
						<label>Business function</label>
                        <input type="text" name="function" class="form-control">
                    </div>
                    <div class="">
                        <input type="submit" name="reg_user" value="Submit" class="btn btn-primary" />
                        <a href="questionaire.php"></a>
                    </div>
                </form>
            </div>  
        </div>
    </div>
</div>
<?Php require_once("inc/templates/footer.php"); ?>