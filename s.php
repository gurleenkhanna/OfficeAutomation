
<html>
<head>
</head>
<body>
<?php
$dbc = mysqli_connect("localhost", "root", "", "company") or die("Unable to Connect");
$a="Record Inserted Sucessfully"; 
$id=$_POST['id'];
$Fn=$_POST['Fn'];
$Ln=$_POST['Ln'];
$S=$_POST['S'];


if(!empty($id) && !empty($Fn) && !empty($Ln) && !empty($S))
	{

$sql="insert into Salary(Employee_id,First_name,Last_name,Salary) 
VALUES ('$id','$Fn','$Ln','$S')";
		mysqli_query($dbc,$sql) or die('Error in Connection');
echo "<SCRIPT type='text/javascript'>	
			alert('$a');
        		location.replace('Admin1.php')
    			</SCRIPT>";}
		
	
else
{$s="Record Inserted Unsuccessfully";
      			echo "<SCRIPT type='text/javascript'>	
			alert('$s');
        		location.replace('Admin1.php')
    			</SCRIPT>";
}
?>
</body>
</html>
