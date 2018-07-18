<?Php
	require_once("inc/config/db.php");
	session_start();
	
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
	}
	
	if(isset($_POST['next']))
	{
		header("Location: q12.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q11.php" method="post">
						<div class="col-lg-12 ">
							<div class="">
								<label>11. Please select the main location(s) from which the third party provides the goods or delivers the services as part of the contract with the organisation.</label>
							</div>
							<div class="">
								<select  class="form-control">
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>Angola</option>
                                    <option>Antigua & Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Azerbaijan</option>
                                    <option>Bangladesh</option>
                                    <option>Belarus</option>
                                    <option>Belize</option>
                                    <option>Benin</option>
                                    <option>Bolivia</option>
                                    <option>Bosnia & Herzegovia</option>
                                    <option>Bulgaria</option>
                                    <option>Burundi (Bujumbura Rural province)*</option>
                                    <option>Burundi*</option>
                                    <option>Cambodia</option>
                                    <option>Cameroon</option>
                                    <option>Central African Republic</option>
                                    <option>Chad</option>
                                    <option>Colombia</option>
                                    <option>Congo DRC (North Kivu, Orientale, Katanga provinces)*</option>
                                    <option>Congo DRC*</option>
                                    <option>Cote d'Ivoire/Ivory Coast (Western border region)*</option>
                                    <option>Cote d'Ivoire/Ivory Coast*</option>
                                    <option>Croatia</option>
                                    <option>Cuba</option>
                                    <option>Cyprus</option>
                                    <option>Dominican Republic</option>
                                    <option>Ecuador</option>
                                    <option>Egypt</option>
                                    <option>Equatorial Guinea</option>
                                    <option>Eritrea</option>
                                    <option>Ethiopia</option>
                                    <option>Fiji</option>
                                    <option>Gabon</option>
                                    <option>Grenada</option>
                                    <option>Guinea</option>
                                    <option>Guinea-Bissau</option>
                                    <option>Guyana</option>
                                    <option>Haiti</option>
                                    <option>Honduras</option>
                                    <option>Indonesia</option>
                                    <option>Iran</option>
                                    <option>Iraq (all areas except Erbil)*</option>
                                    <option>Iraq (Erbil)*</option>
                                    <option>Kazakhstan</option>
                                    <option>Kenya (Somalia border regions)*</option>
                                    <option>Kenya*</option>
                                    <option>Kyrgyzstan</option>
                                    <option>Laos</option>
                                    <option>Lebanon</option>
                                    <option>Liberia</option>
                                    <option>Libya</option>
                                    <option>Macao</option>
                                    <option>Macedonia, FYR</option>
                                    <option>Madagascar</option>
                                    <option>Maldives</option>
                                    <option>Mali</option>
                                    <option>Mauritania</option>
                                    <option>Mexico*</option>
                                    <option>Moldova</option>
                                    <option>Mongolia</option>
                                    <option>Montenegro</option>
                                    <option>Morocco</option>
                                    <option>Mozambique</option>
                                    <option>Myanmar (formerly Burma)*</option>
                                    <option>Nauru</option>
                                    <option>Nepal</option>
                                    <option>Nicaragua</option>
                                    <option>Niger* (all areas except Niamey)</option>
                                    <option>Niger* (Niamey)</option>
                                    <option>Nigeria (Niger Delta and northern states)*</option>
                                    <option>Nigeria*</option>
                                    <option>North Korea</option>
                                    <option>Pakistan</option>
                                    <option>Palestinian Territories (Gaza Strip)*</option>
                                    <option>Palestinian Territories*</option>
                                    <option>Papua New Guinea</option>
                                    <option>Paraguay</option>
                                    <option>Philippines</option>
                                    <option>Russia (North Caucasus republics)*</option>
                                    <option>Russia*</option>
                                    <option>Rwanda</option>
                                    <option>Sao Tome & Principe</option>
                                    <option>Saudi Arabia</option>
                                    <option>Senegal</option>
                                    <option>Serbia</option>
                                    <option>Sierra Leone</option>
                                    <option>Solomon Islands</option>
                                    <option>Somalia</option>
                                    <option>South Sudan* (all areas except Juba)</option>
                                    <option>South Sudan* (Juba)</option>
                                    <option>Sri Lanka</option>
                                    <option>Suriname</option>
                                    <option>Syria</option>
                                    <option>Tajikistan</option>
                                    <option>Tanzania</option>
                                    <option>Thailand*</option>
                                    <option>Thailand*</option>
                                    <option>Timor-Leste</option>
                                    <option>Togo</option>
                                    <option>Tonga</option>
                                    <option>Trinidad & Tobago</option>
                                    <option>Tunisia</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan</option>
                                    <option>Uganda*</option>
                                    <option>Uganda*</option>
                                    <option>Ukraine</option>
                                    <option>Uzbekistan</option>
                                    <option>Venezuela</option>
                                    <option>Vietnam</option>
                                    <option>West Bank</option>
                                    <option>Yemen</option>
                                    <option>Zambia</option>
                                    <option>Zimbabwe</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="grp-input">
								<a href="q10.php" class="btn btn-primary">Previous</a>
								<input type="submit" name="next" value="Next" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>