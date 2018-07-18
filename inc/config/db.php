<?Php
	define("_db_host", "localhost");
	define("_db_user", "root");
	define("_db_pass", "");
	define("_db_name", "questionaire");
	
	$conn = mysqli_connect(_db_host, _db_user, _db_pass);
	mysqli_select_db($conn, _db_name);
?>