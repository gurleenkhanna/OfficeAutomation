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
$sql="create table Project(Project_id int(10) NOT NULL PRIMARY KEY,Employee_id int(10) REFERENCES emp, Name_of_Project varchar(50),P_Manager varchar(25),Deadline date)";
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
