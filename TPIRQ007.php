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
                        <p>7. Do you know the third party(ies) you wish to use? </p>
                            <p><select id="myComboBox">
                                <option value="">Select...</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select></p>

                                <div id="myTextBoxes">
                                    <p>7A. Do you know the third party(ies) you wish to use?If you know the third party you wish to use, would the product / service provided to the organisation be sub-contracted to third parties (whether on-shore or off-shore)? </p>
                                        <p><select id="myComboBox">
                                        <option value="">Select...</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option></select></p>

                                    <p>7B.If you don't know the third party you wish to use, is there any possibility that as part of the product / service provided to the organisation the third party may use sub-contractors? </p>
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
                    <div style="margin-top:80px;">
                        <input name="next" type="submit" value="Next" class="btn btn-primary">
                        <a href="Questionnaire8.php">.</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?Php require_once("inc/templates/footer.php"); ?>