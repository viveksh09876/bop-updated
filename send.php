<?php
$msg=$_POST['message']; 
if (!empty($_POST['typeoperation'] ) ) {print 'Not all information was submitted.</br><b><a href="message.php">Come back</a></b>'; }
 else {
$server="localhost";
$login="root";
$pass="";
$db="superchange";
$con=mysqli_connect($server,$login,$pass);
mysqli_select_db($con,$db);
$query="INSERT INTO admin_messages(id_msg,user,msg,date)
VALUES
('','$user','$msg',$totale,'')";

mysql_query($query) or die('Erreur SQL !'.$query.'<br>'.mysql_error());
echo "<script language='javascript'>location.href='http://bestofpedigree.com/beta/';</script>";
 }
 
?>