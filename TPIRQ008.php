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
        <form action="insert_TPIRQ008.php" method="post">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div style="margin-top: 60px;" class="text-center">
                    <p>8. Will the third party store or process the organisation information? </p>
                        <p><select id="myComboBox" class="form-control">
                                <option value="">Select...</option>
                                <option value="M">Yes</option>
                                <option value="M">No</option>
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