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
?>
<?Php require_once("inc/templates/header.php"); ?>
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
									<option value="0">Select category</option>
									<option value="1">Apparel and Luggage and Personal Care Products</option>
									<option value="2">Building and Construction Machinery and Accessories</option>
									<option value="3">Building and Facility Construction and Maintenance Services</option>
									<option value="4">Chemicals including Bio Chemicals and Gas Materials</option>
									<option value="4">Cleaning Equipment and Supplies</option>
									<option value="">Commercial and Military and Private Vehicles and their Accessories and Components</option>
									<option value="">Defense and Law Enforcement and Security and Safety Equipment and Supplies</option>
									<option value="">Distribution and Conditioning Systems and Equipment and Components</option>
									<option value="">Domestic Appliances and Supplies and Consumer Electronic Products</option>
									<option value="">Drugs and Pharmaceutical Products</option>
									<option value="">Editorial and Design and Graphic and Fine Art Services</option>
									<option value="">Education and Training Services</option>
									<option value="">Electrical Systems and Lighting and Components and Accessories and Supplies</option>
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
						<div class="col-lg-12">
							<div class="grp-input">
								<a href="q1.php" class="btn btn-primary">Previous</a>
								<input type="submit" name="next" value="Next" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>