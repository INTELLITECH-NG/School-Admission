<?php
require 'db_params.php';
$code_id = $_SESSION['SESS_CODE_NAME'];
 $d = date('D d M Y');
$t = date('h : i : sA');
$uploadDir = 'student_pic/';
if(isset($_POST['submit1'])){
$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$date = $_POST['bday'];
$state = $_POST['state'];
$local = $_POST['local'];
$nationality = $_POST['nationality'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$school = $_POST['school'];
$faculty = $_POST['faculty'];
$course = $_POST['course'];
$level = $_POST['level'];
$jamb = $_POST['jamb'];
$sub1 = $_POST['sub1'];
$grade1 = $_POST['grade1'];
$sub2 = $_POST['sub2'];
$grade2 = $_POST['grade2'];
$sub3 = $_POST['sub3'];
$grade3 = $_POST['grade3'];
$sub4 = $_POST['sub4'];
$grade4 = $_POST['grade4'];
$total = $grade1 + $grade2 + $grade3 + $grade4;
$appno = $_POST['appno'];
$date = $d .' '.$t;
$time = "inactive";
$status = "undone";
$examdate = "Admission processing in progress...";
$fileName = $_FILES['photo']['name'];
$tmpName = $_FILES['photo']['tmp_name'];
$fileSize = $_FILES['photo']['size'];
$fileType = $_FILES['photo']['type'];
$filePath = $uploadDir . $fileName;
$result = move_uploaded_file ($tmpName, $filePath);
if (!$result){
echo "error uploading file";
exit;
}
if(!get_magic_quotes_gpc())
{
$fileName = addslashes ($fileName);
$filePath= addslashes ($filePath);
}

$q = mysql_query ("SELECT * FROM studentreg WHERE jamb='$jamb'");
$ja = mysql_fetch_assoc($q);
if ($ja > 0){
echo '
<script type="text/javascript">
alert("This Jamb Number has already been taken")
</script>';

}
else{
$query = "INSERT INTO studentreg (surname, othernames, gender, religion, bday, state, LGA, nationality, email, phone, address, school, faculty, course, level, jamb, sub1, grade1, sub2, grade2, sub3, grade3, sub4, grade4, total, appno, date, time, status, examdate, photo) VALUES ('$surname', '$othernames', '$gender', '$religion', '$date', '$state', '$local', '$nationality', '$email', '$phone', '$address', '$school', '$faculty', '$course', '$level', '$jamb', '$sub1', '$grade1', '$sub2', '$grade2', '$sub3', '$grade3', '$sub4', '$grade4', '$total', '$appno', '$date', '$time', '$status', '$examdate', '$filePath')";

$sqli = mysql_query ("UPDATE regcode SET status = 'used' WHERE code = '$code_id'");

if ($query){
 header("Location:student_form.php");

}

mysql_query($query) or die ('Error, query failed');

mysql_close();
}


}


?>

