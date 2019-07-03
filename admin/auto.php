<?php
error_reporting(0);
require '../db_params.php';
$roller = $_GET['idpin'];
if ($roller=="pin"){
$con = "GLIXPIN";
$status = "unused";
ini_set(max_timeout, 500);
(int) $i;
while ($i<20){
 $pin = $con.''.rand(100,999);
$query = mysql_query("INSERT INTO regcode(code, status) VALUES ('$pin', '$status')");
$i++;
}
echo '<script type="text/javascript">
alert("20 PINS have successfully been generated");
window.location="list-of-unused-pins";
</script>';
}
?>

	