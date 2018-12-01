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
$sql="create table Contacts(First_name varchar(50),Last_Name varchar(50),Subject varchar(50),E_mail varchar(50),Comments varchar(1000))";
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
