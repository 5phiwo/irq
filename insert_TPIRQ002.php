<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security

$TPIRQ002 = $mysqli->real_escape_string($_REQUEST['TPIRQ002']);
/* $Last_Name = $mysqli->real_escape_string($_REQUEST['Last_Name']);
$E_mail = $mysqli->real_escape_string($_REQUEST['E_mail']);  */
 
// attempt insert query execution
//$sql = "INSERT INTO irq_answers (First_Name, Last_Name, E_mail) VALUES ('$First_Name', '$Last_Name', '$E_mail')";

//  $sql = "INSERT INTO irq_answers VALUES ('TPIRQ001')";
// if($mysqli->query($sql) === true){
//     header("location: TPIRQ002.php", true);exit;
// } else{
//     echo "ERROR: Could not able to execute $sql. " . $mysqli->error;

$sql = "INSERT INTO irq_answers (TPIRQ002) VALUES ('$TPIRQ002')";
if($mysqli->query($sql) === true){
    header("location: TPIRQ003.php", true);exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>  