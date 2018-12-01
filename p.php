<html>
<head>
</head>
<body>
<?php
$dbc = mysqli_connect("localhost", "root", "", "company") or die("Unable to Connect");
$a="Record Inserted Sucessfully"; 
$pi=$_POST['pi'];
$id=$_POST['id'];
$np=$_POST['np'];
$pm=$_POST['pm'];
$D=$_POST['D'];
if(!empty($pi) && !empty($id) && !empty($np) && !empty($pm) && !empty($D))
	{
	
$sql="insert into project(Project_id,Employee_id,Name_of_Project,P_Manager,Deadline) 
VALUES ('$pi','$id','$np','$pm','$D')";
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
