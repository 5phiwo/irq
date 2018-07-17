<DOCTYPE html>
<head>
<body>
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
        <form action="insert_TPIRQ002.php" method="post">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div style="margin-top: 60px;" class="text-center">
                        <p>2. Please select the spend category </p>
                            <p><select name="TPIRQ002"  id="TPIRQ002"class="form-control">
                                <option value="Select...">Select...</option>
                                <option value="Apparel and Luggage and Personal Care Products">Apparel and Luggage and Personal Care Products</option>
                                <option value="Building and Construction Machinery and Accessories">Building and Construction Machinery and Accessories</option>
                                <option value="Building and Facility Construction and Maintenance Servicess">Building and Facility Construction and Maintenance Servicess</option>
                                <option value="Chemicals including Bio Chemicals and Gas Materials">Chemicals including Bio Chemicals and Gas Materials</option>
                                <option value="Cleaning Equipment and Supplies">Cleaning Equipment and Supplies</option>
                                <option value="Commercial and Military and Private Vehicles and their Accessories and Components">Commercial and Military and Private Vehicles and their Accessories and Components</option>
                                <option value="Defense and Law Enforcement and Security and Safety Equipment and Supplies">Defense and Law Enforcement and Security and Safety Equipment and Supplies</option>
                                <option value="Distribution and Conditioning Systems and Equipment and Components">Distribution and Conditioning Systems and Equipment and Components</option>
                             </select></p>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <div style="margin-top:80px;">
                        <input name="next" type="submit" value="Next" class="btn btn-primary">
                        </br></br></br></br></br></br>
                        <a href="http://localhost:8080/irq/TPIRQ001.php?restartSession=true" 'truncate irq_answers'>Re-start Questionnaire</a>
                        <!-- <a href="Questionnaire6.php">.</a> -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?Php require_once("inc/templates/footer.php"); ?>