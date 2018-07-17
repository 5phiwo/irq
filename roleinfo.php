
<DOCTYPE html>
<head>
<body>
<?Php require_once("inc/templates/header.php");?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h3> <strong>Third Party Risk Management </strong></h3>
                <h4> <strong>Inherent Risk Questionnaire </strong></h4>
                </br>
                <h4> Please complete the below form with information pertaining to your role in the organistion. </h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4"
            <div class="">
                <form action="insert_roleinfo.php" method="post">   
                    <div class="from-group">
                        <label>Title</label>
                        <select value="TPIRQ002" id="TPIRQ002"class="form-control" name="TPIRQ002">
                                <option value="TPIRQ002">Select...</option>
                                <option value="TPIRQ002">Ms.</option>
                                <option value="TPIRQ002">Mrs.</option>
                                <option value="TPIRQ002">Mr.</option>
                        </select>
                        </br>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="First_Name" id="First_Name" class="form-control">
                        <!-- <textarea style="height: 100px;" name="TPIRQ001" id="TPIRQ001" class="form-control"></textarea> -->
                    </div>
                    <div class="form-group">
                    <label>Last Name</label>
                        <input type="text" name="Last_Name" id="Last_Name" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>E-mail</label>
                        <input type="text" name="E_mail" id="E_mail" class="form-control">
                    </div>
                    <div class="from-group">
                        <label>Business Function</label>
                        <select value="TPIRQ002" id="TPIRQ002"class="form-control" name="TPIRQ002">
                                <option value="TPIRQ002">Select...</option>
                                <option value="TPIRQ002">Coporate Business Banking</option>
                                <option value="TPIRQ002">Personal Business Banking</option>
                                <option value="TPIRQ002">Wealth</option>
                                <option value="TPIRQ002">Group Procurement  </option>
                        </select>
                        </br>
                    <div class="form-group">
                    <label>Role</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    </br>
                    <div class="">
                        <input type="submit"  name="submit" id="submit" value="Proceed to Quesitionniare" class="btn btn-primary" onclick="location='TPIRQ001.php'">
                        <a href="questionaire.php">.</a>
                    </div>
                </form>
            </div>  
        </div>
    </div>
</div>
</body>
<?Php require_once("inc/templates/footer.php"); ?>