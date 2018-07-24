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
		header("Location: q3.php");
	}

	if(empty($_POST['category']))
{
    $category_error = "Please select a cake size";
    $error=true;
}
else
{
    $selected_cake = $_POST['selectedcake'];
}
	
?>
<?php

	
?>
<?Php require_once("inc/templates/header.php"); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="text-center">
				<h3>Third Party Risk Management</h3>
            	<h4>Inherent Risk Questionnaire</h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q2.php" method="post">
						<div class="col-lg-12 ">
							<div class="lable">
								<label>2. Please select the spend category.</label>
							</div>
							<div class="">
								<select name="category" class="form-control">
									<option value="">Select category</option>
									<option value="1">Apparel and Luggage and Personal Care Products</option>
									<option value="2">Building and Construction Machinery and Accessories</option>
									<option value="3">Building and Facility Construction and Maintenance Services</option>
									<option value="4">Chemicals including Bio Chemicals and Gas Materials</option>
									<option value="5">Cleaning Equipment and Supplies</option>
									<option value="6">Commercial and Military and Private Vehicles and their Accessories and Components</option>
									<option value="7">Defense and Law Enforcement and Security and Safety Equipment and Supplies</option>
									<option value="8">Distribution and Conditioning Systems and Equipment and Components</option>
									<option value="9">Domestic Appliances and Supplies and Consumer Electronic Products</option>
									<option value="10">Drugs and Pharmaceutical Products</option>
									<option value="11">Editorial and Design and Graphic and Fine Art Services</option>
									<option value="12">Education and Training Services</option>
									<option value="13">Electrical Systems and Lighting and Components and Accessories and Supplies</option>
									<option>Electronic Components and Supplies</option>
									<option>Engineering and Research and Technology Based Services</option>
									<option>Environmental Services</option>
									<option>Farming and Fishing and Forestry and Wildlife Contracting Services</option>
									<option>Farming and Fishing and Forestry and Wildlife Machinery and Accessories</option>
									<option>Financial and Insurance Services</option>
									<option>Financial Instruments, Products, Contracts and Agreements</option>
									<option>Food Beverage and Tobacco Products</option>
									<option>Fuels and Fuel Additives and Lubricants and Anti corrosive Materials</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-lg-offset-3 text-center">
						<div style="margin-top:60px;">
							<div class="grp-input">
								<input type="submit" name="next" value="Next" class="btn btn-primary">
								<div style="color: red;"><?Php if(isset($message)) echo $message; ?></div>
								</br> </br> </br> </br>
								<a href="q1.php" >Previous</a>
								</br></br></br></br>	
								<h6>Question 2 of 13</h6>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>