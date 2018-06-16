</body>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
</html>
<script>
    $ (document).ready(function() {
        $("#myComboBox").change(function() {
            var comboBoxValue = $("#myComboBox").val();

            if (comboBoxValue == 'Yes')
            {
                $("#myTextBoxes").show();
            }
            else
            {
                $("#myTextBoxes").hide();
            }
        })
    });

</script>
<script> function alert7(question7) {
    if(question7 == "not")
    alert(Please select Yes or No)
}