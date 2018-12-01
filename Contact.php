<?php
	$dbc = mysqli_connect("localhost", "root", "", "company") or die("Unable to Connect");
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$S=$_POST['S'];
	$comments=$_POST['comments'];
	if(!empty($first_name)){
		if(!empty($last_name)){
			if(!empty($email)){
				if(!empty($S)){
if(!empty($comments)){
					$query="INSERT INTO Contacts (First_name,Last_name,E_mail,Subject,Comments) VALUES('$first_name','$last_name','$email','$S','$comments')";
					mysqli_query($dbc,$query) or die('Error in Connection');
					echo 'Thank you '.$first_name.' for contacting us.';
					echo 'We will surely contact to you through email i.e. '.$email;
                                       echo "<script type='text/javascript'>	
			alert('Done');
        		location.replace('index.html')
    			</script>";
  				mysqli_close($dbc);
				}
			}
		}
	}
}
else
{
echo "<script type='text/javascript'>	
			alert('Not Submitted Properly');
        		location.replace('Contact.html')
    			</script>";
}
?>	