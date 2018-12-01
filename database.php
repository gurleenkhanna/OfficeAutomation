<html>
<head>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
die('could not connect:'.mysql_error());
else
{
$db="Create DATABASE company";
$result=mysql_query($db);
if(!$result)
{
die('could not create database:'.mysql_error());
}
if($result)
{
echo "the database is created";
}
}
?>
</body>
</html>
