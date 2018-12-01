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
$sql="create table Salary(Employee_id int(10) REFERENCES emp,First_name varchar(20),Last_name varchar(20),Salary bigint(15))";
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
