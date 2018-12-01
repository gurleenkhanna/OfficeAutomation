<html>
<head>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());
}
else
{
$db=mysql_select_db("company") or die("error in connecting".mysql_error());
$sql="create table emp(Employee_id int(10) NOT NULL PRIMARY KEY,First_name varchar(50),Last_Name varchar(50),Gender varchar(10),D_O_J date,Address varchar(30),Qualification varchar(30),Designation varchar(50),Experience varchar(50),State varchar(15),Contact bigint(10),E_mail varchar(20),Password varchar(25))";
$result=mysql_query($sql);
if(!$result)
{
die('could not create a table:'.mysql_error());
}
if($result)
{
echo "the table has been created";
}
}
?>
</body>
</html>
