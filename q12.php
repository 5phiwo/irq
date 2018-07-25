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
	
	if(isset($_POST['next']))
	{
		$_SESSION['answers']['q12'] = $_POST['q12'];
		header("Location: q13.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q12.php" method="post">
						<div class="col-lg-12 ">
							<div class="">
								<label>12. As part of the transaction, will the third party be acting in the following manner?</label>
							</div>
							<div class="">
								<select name="q12" class="form-control">
                                    <option>Select</option>
                                    <option value="">Influencing CLIENT’s revenue received from client-based engagement</option>
                                    <option value="">Negotiating on behalf of CLIENT</option>
                                    <option value="">Purchasing products or services on behalf of CLIENT</option>
                                    <option value="">Acting as agent for CLIENT in dealing with other entities or individuals</option>
                                    <option value="">Transfer goods, services or money on behalf of CLIENT</option>
                                    <option value="">Commissioning relationship with CLIENT</option>
                                    <option value="">Interacting with foreign public officials , or government controlled or owned entities/agencies</option>
                                    <option value="">Having authority to handle local matters alone</option>
                                    <option value="">Any other activity involves the supplier acting on behalf of or representing CLIENT</option>
                                    <option value="">Influencing CLIENT’s chances of winning work</option>
                                    <option value="">None of the above</option>
                                </select>
                            </div>
						</div>
						<div class="col-lg-6 col-lg-offset-3 text-center">
						<div style="margin-top:60px;">
							<div class="grp-input">
							<input type="submit" name="next" value="Next" class="btn btn-primary">
								</br> </br> </br> </br>
								<a href="q11.php" >Previous</a>
								</br></br></br></br>
								<h6>Question 12 of 13</h6>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>