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
        <form action="insert_TPIRQ012.php" method="post">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div style="margin-top: 60px;" class="text-center">
                    <p>12. As part of the transaction, will the third party be acting in the following manner? </p>
                        <p><select id="myComboBox" class="form-control">
                                <option value="">Select...</option>
                                <option value="M">Influencing CLIENT’s revenue received from client-based engagement</option>
                                <option value="M">Negotiating on behalf of CLIENT</option>
                                <option value="M">Purchasing products or services on behalf of CLIENT</option>
                                <option value="M">Acting as agent for CLIENT in dealing with other entities or individuals</option>
                                <option value="M">Transfer goods, services or money on behalf of CLIENT</option>
                                <option value="M">Commissioning relationship with CLIENT</option>
                                <option value="M">Interacting with foreign public officials , or government controlled or owned entities/agencies</option>
                                <option value="M">Having authority to handle local matters alone</option>
                                <option value="M">Any other activity involves the supplier acting on behalf of or representing CLIENT</option>
                                <option value="M">Influencing CLIENT’s chances of winning work</option>
                                <option value="M">None of the above</option>
                            </select></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <div style="margin-top:80px;">
                        <input name="next" type="submit" value="Next" class="btn btn-primary">
                        </br></br></br></br></br></br>
                        <a href="http://localhost:8080/irq/TPIRQ001.php?restartSession=true">Re-start Questionnaire</a>
                        <!-- <a href="Questionnaire4.php">.</a> -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?Php require_once("inc/templates/footer.php"); ?>