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

<script>
$(document).ready(function () {
	$("input[name$='third_party']").click(function () {
		var value = $(this).val();
		if (value == 'Yes') {
			$("third_party2").show();
		} else if (value == 'No') {
			$("third_party2").hide();
		}
});
</script>

<script>
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