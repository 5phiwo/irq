<?Php
	session_start();
?>

<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">	
		<div style="margin-top: 100px; margin-bottom: 10px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<div class="col-lg-12 ">
						<div class="">
							<div class="">
								<p>1. Please describe the product / service required from the third party.</p>
								<p><?Php echo $_SESSION['answers']['q1']; ?></p>
							</div>
							<div class="">
								<p>2. Please select the spend category.</p>
								<p><?Php echo $_SESSION['answers']['q2']; ?></p>
							</div>
							<div class="">
								<p>3. What is the Business unit/ function of the requester?</p>
								<p><?Php echo $_SESSION['answers']['q3']; ?></p>
							</div>
							<div class="">
								<p>4. What is the estimated total value (in ZAR) of the engagement?</p>
								<p><?Php echo $_SESSION['answers']['q4']; ?></p>
							</div>
							<div class="">
								<p>5. What is the estimated duration of this engagement?</p>
								<p><?Php echo $_SESSION['answers']['q5']; ?></p>
							</div>
							<div class="">
								<p>6. Will the provision of the goods / services by the third party meet the definition of a Critical and/or Material Outsourcing relationship?</p>
								<p><?Php echo $_SESSION['answers']['q6']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/footer.php"); ?>