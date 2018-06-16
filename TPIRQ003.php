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
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div style="margin-top: 60px;" class="text-center">
                        <p>3. What is the Business unit/ function of the requester? </p>
                            <p><select name="formGender">
                                <option value="">Select...</option>
                                <option value="M">Personal Business Banking</option>
                                <option value="M">Corporate Investment Banking</option>
                                <option value="M">Wealth</option>
                                <option value="M">Procurement</option>
                                <option value="M">Other</option>
                            </select></p>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <div style="margin-top:80px;">
                        <input name="next" type="submit" value="Next" class="btn btn-primary">
                        <a href="Questionnaire4.php">.</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?Php require_once("inc/templates/footer.php"); ?>