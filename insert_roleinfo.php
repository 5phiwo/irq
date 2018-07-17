<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$TPIRQ001 = mysqli_real_escape_string($link, $_REQUEST['TPIRQ001']);

// Attempt insert query execution
$sql = "INSERT INTO irq_answers (First_Name, Last_Name, E_mail) VALUES ('$First_Name', '$Last_Name', '$E_mail')";
if(mysqli_query($link, $sql)){
    header("location: TPIRQ001.php");exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>