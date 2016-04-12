<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>regester</title>
</head>

<body>
<form method="post" action="">
Name:<input type="text" name="stu_name" /><br />
age:<input type="text" name="stu_age" /><br />
gender:<br />
Male:<input type="radio" name="stu_gender" value="male" />
female:<input type="radio" name="stu_gender" value="female" /><br />
<input type="submit" value="send" />

</form>
<?php 
$HostName="localhost";
$db_name="school";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['stu_name']) && isset($_POST['stu_age'])&& isset($_POST['stu_gender']) ) {
$sql = "INSERT INTO student (s_name,s_age,s_gender) VALUES ('$_POST[stu_name]' ,'$_POST[stu_age]','$_POST[stu_gender]' )" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>
</body>
</html>