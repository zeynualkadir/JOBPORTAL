<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_GET['EmpId'];
// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("job", $con);
// Specify the query to Update Record
$sql = "Update Employer_Reg set Status='Confirm' where EmployerId=".$Id."";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Employer Request Confirmed");window.location=\'ManageEmployer.php\';</script>';
?>
</body>
</html>
