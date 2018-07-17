<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
//  $TPIRQ001 = $mysqli->real_escape_string($_REQUEST['TPIRQ001']);

$TPIRQ001 = $_POST['TPIRQ001'];
 
// attempt insert query execution
$sql =  "INSERT INTO irq_answers VALUES ('$TPIRQ001')";
$qry = mysqli_query ($sql);

if (!$qry){
     header("location: TPIRQ002.php");
      "ERROR: Could not able to execute $sql. " . $mysqli->error;exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>