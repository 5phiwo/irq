<?Php
	define("_db_host", "localhost");
	define("_db_user", "root");
	define("_db_pass", "");
	define("_db_name", "questionaire");
	
	$conn = mysql_connect(_db_host, _db_user, _db_pass);
	mysql_select_db(_db_name);
?>