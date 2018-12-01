
<html>
<head>
</head>
<body>
<?php

$dbc = mysqli_connect("localhost", "root", "", "company") or die("Unable to Connect");
$id=$_POST['id'];
$OS=$_POST['OS'];
$NS=$_POST['NS'];
$s="Salary have been increased";
$a="No changes have been made";
$c="Salary have been decreased";
if(!empty($id) && !empty($OS) && !empty($NS))
{

if($OS<$NS)
{
$query="Update Salary set Salary='$NS' where Employee_id = '$id'";
		mysqli_query($dbc,$query) or die('Error in Connection');
		echo "<SCRIPT type='text/javascript'>	
			alert('$s');
        		location.replace('update.html')
    			</SCRIPT>";}
else if($OS>$NS)
{
$query="Update Salary set Salary='$NS' where Employee_id = '$id'";
		mysqli_query($dbc,$query) or die('Error in Connection');
echo "<SCRIPT type='text/javascript'>	
			alert('$c');
        		location.replace('update.html')
    			</SCRIPT>";}
}

else
{
	echo "<SCRIPT type='text/javascript'>	
			alert('$a');
        		location.replace('update.html')
    			</SCRIPT>";
}
?>
</body>
</html>