<html>
<head>
</head>
<body>
<?php

$dbc = mysqli_connect("localhost", "root", "", "company") or die("Unable to Connect");
$a="Record Inserted Sucessfully"; 
$ID=$_POST['ID'];
$Fn=$_POST['Fn'];
$Ln=$_POST['Ln'];
$M=$_POST['M'];
$P=$_POST['P'];
$A=$_POST['A'];
$L= $_POST['L'];
$LL=$_POST['LL'];
if(!empty($ID) && !empty($Fn) && !empty($Ln) && !empty($M) && !empty($P) && !empty($A) && !empty($L) &&  !empty($LL))
	{
	
	
$sql="insert into attendance(Employee_id,First_name,Last_Name,Month,Present,Absent,Type_of_Leave,Leaves_Left) 
VALUES ('$ID','$Fn','$Ln','$M','$P','$A','$L','$LL')";
		mysqli_query($dbc,$sql) or die('Error in Connection');
echo "<SCRIPT type='text/javascript'>	
			alert('$a');
        		location.replace('Admin1.php')
    			</SCRIPT>";
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
