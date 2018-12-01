<html>
<head>
</head>
<body>
<?php
$a="Record Inserted Successfully";
$dbc = mysqli_connect("localhost", "root", "", "company") or die("Unable to Connect");
$DI=$_POST['DI'];
$EI=$_POST['EI'];
$DN=$_POST['DN'];
$DM=$_POST['DM'];
if(!empty($DI) && !empty($EI) && !empty($DN) && !empty($DM))
	{
	
$sql="insert into department(Dept_id,Employee_id,Dept_Name,D_Manager) 
VALUES ('$DI','$EI','$DN','$DM')";
		mysqli_query($dbc,$sql) or die('Error in Connection');
echo "<SCRIPT type='text/javascript'>	
			alert('$a');
        		location.replace('Admin1.php')
    			</SCRIPT>";;
		
}

else
{$a="Record Inserted Unsuccessfully";
      			echo "<SCRIPT type='text/javascript'>	
			alert('$a');
        		location.replace('Admin1.php')
    			</SCRIPT>";
}
?>
</body>
</html>
