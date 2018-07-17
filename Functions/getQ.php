<?php
function getQuestions ($dbc){

    $q = "Select * FROM irq_questions";
    $result = @mysqli_query ($dbc, $query);

    if ($result) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $body = $row['Question_Body'];

            echo '
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
                <form action="index.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <div style="margin-top: 60px;" class="text-center">
                                <p>1. .$body.</p>
                                <textarea style="height: 100px;" name="TPIRQ001" id="TPIRQ001" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3 text-center">
                            <div style="margin-top:20px;">
                                <input name="TPIRQ001" type="submit" value="Next" class="btn btn-primary">
                                <!-- <a href="Questionaire2.php">.</a> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>  
        </div>    
            ';

        }

    }
}


?>