<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security

$TPIRQ005 = $mysqli->real_escape_string($_REQUEST['TPIRQ005']);


$sql = "INSERT INTO irq_answers (TPIRQ005) VALUES ('$TPIRQ005')";
if($mysqli->query($sql) === true){
    header("location: TPIRQ006.php", true);exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>  