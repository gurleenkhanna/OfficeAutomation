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
$sql="create table attendance(Employee_id int(10) REFERENCES emp,First_name varchar(50),Last_Name varchar(50),Month varchar(10),Present bigint(4),Absent bigint(4),Type_of_Leave varchar(20),Leaves_Left bigint(5))";
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
