<?Php require_once("inc/templates/header.php"); ?>
<style>
#myTextBoxes {
    display: none;
}
</style>
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
                        <p>10. Is the product or service key to the development of the organisation and its ongoing operation? </p>
                            <p><select id="myComboBox">
                                <option value="">Select...</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select></p>

                                <div id="myTextBoxes">
                                    <p>10A. Is the product or service difficult to source and is only available from one or few providers? </p>
                                        <p><select id="myComboBox">
                                        <option value="">Select...</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option></select></p>

                                    <p>10B.If the product or service were to fail, would the organisation still be able to meet its regulatory obligations? </p>
                                        <p><select id="myComboBox">
                                        <option value="">Select...</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option></select></p>

                                    <p>10B.If the product or service were to fail, would the organisation still be able to meet its regulatory obligations? </p>
                                        <p><select id="myComboBox">
                                        <option value="">Select...</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option></select></p> 
                                </div>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <div style="margin-top:30px;">
                        <input name="next" type="submit" value="Next" class="btn btn-primary">
                        <a href="Questionnaire8.php">.</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?Php require_once("inc/templates/footer.php"); ?>