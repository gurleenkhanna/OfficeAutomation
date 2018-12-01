<html>
<head>
</head>
<body>
<?php
$s="Your profile has been editted";
$dbc = mysqli_connect("localhost", "root", "", "company") or die("Unable to Connect");
$iD=$_POST['iD'];
$Fn=$_POST['Fn'];
$Ln=$_POST['Ln'];
$A=$_POST['A'];
$Q= $_POST['Q'];
$D=$_POST['D'];
$Ex= $_POST['Ex'];
$S=$_POST['S'];
$C=$_POST['C'];
$E=$_POST['E'];
$P=$_POST['p'];
if(!empty($iD) && !empty($Fn) && !empty($Ln) && !empty($A) && !empty($D) &&  !empty($Q) && !empty($Ex) &&!empty($S) && !empty($C) && !empty($E) && !empty($P))
	{
$query="Update emp set First_name = '$Fn', Last_Name = '$Ln', Address = '$A',Qualification='$Q',Designation='$D',Experience='$Ex',State='$S',Contact='$C',E_mail='$E',Password='$P'where Employee_id = '$iD'";
		mysqli_query($dbc,$query) or die('Error in Connection');
		echo "<SCRIPT type='text/javascript'>	
			alert('$s');
        		location.replace('login.html')
    			</SCRIPT>";}
else
{
	echo "Please fill the form completely";
}
?>
</body>
</html>