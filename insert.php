<html>
<head>
</head>
<body>
<?php
$dbc = mysqli_connect("localhost", "root", "", "company") or die("Unable to Connect");
$iD=$_POST['iD'];
$Fn=$_POST['Fn'];
$Ln=$_POST['Ln'];
$G=$_POST['G'];
$DOJ=$_POST['DOJ'];
$A=$_POST['A'];
$Q= $_POST['Q'];
$D=$_POST['D'];
$Ex= $_POST['Ex'];

$S=$_POST['S'];
$C=$_POST['C'];
$E= $_POST['E'];
$P=$_POST['P'];
$Cp=$_POST['Cp'];
if(!empty($iD) && !empty($Fn) && !empty($Ln) && !empty($G) && !empty($DOJ) && !empty($A) && !empty($D) &&  !empty($Q) && !empty($Ex) && !empty($S) && !empty($C) && !empty($E) && !empty($P))
	{
	if($P=$Cp)
	{
	
$sql="insert into emp(Employee_id,First_name,Last_Name,Gender,D_O_J,Address,Qualification,Designation,Experience,State,Contact,E_mail,Password) 
VALUES ('$iD','$Fn','$Ln','$G','$DOJ','$A','$Q','$D','$Ex','$S','$C','$E','$P')";
		mysqli_query($dbc,$sql) or die('Error in Connection');
		echo 'Thank you '.$Fn.' '.$Ln.' for signing up.';
		echo 'Your login Id will be your EmployeeId i.e.'.$iD;
echo"&nbsp &nbsp";echo"<a href='login.html'><input type='Submit' value='Ok'></a>";
}
		
	}
else
{$s="Record Inserted Unsuccessfully";
      			echo "<SCRIPT type='text/javascript'>	
			alert('$s');
        		location.replace('Emp_register.html')
    			</SCRIPT>";
}
?>
</body>
</html>
