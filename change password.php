<?php
session_start();
?>
<!Doctype html>
<html>
<head>
<title>Edit Profile</title>

</head>
<body>
<?php
	$dbc=mysqli_connect('localhost','root','','company')
	or die('Unable to Connect');
	$output_form=false;
	$emp_id=$_POST['ID'];
	$pass=$_POST['P'];
	$newpass=$_POST['np'];
	if(!empty($emp_id) && !empty($pass) && !empty($newpass))
	{
$p=$_SESSION['b'];
if($pass==$p){

		$query="Update emp set Password = '$newpass' where Employee_id = '$emp_id' and Password='$pass'";
		mysqli_query($dbc,$query) or die('Error in Connection');
		echo "<script type='text/javascript'>	
			alert('Password has been changed');
        		location.replace('login.html')
    			</script>";
}
else if($pass!==$p)
{
echo "<script type='text/javascript'>	
			alert('Password has not been changed');
        		location.replace('password.php')
    			</script>";
}
}
else
{
echo "<script type='text/javascript'>	
 alert('Please fill the form completely')
  location.replace('password.php')
   </script>";
	
}
?>
</body>
</html>