<?php
	$dbc = mysqli_connect("localhost", "root", "", "company") or die("Unable to Connect");
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$email=$_POST['email'];
	$comments=$_POST['comments'];
	if(!empty($fn)){
		if(!empty($ln)){
			if(!empty($email))
				{
if(!empty($comments)){
					$query="INSERT INTO feedback (First_name,Last_name,E_mail,Comments) VALUES('$fn','$ln','$email','$comments')";
					mysqli_query($dbc,$query) or die('Error in Connection');
					echo 'Thank you '.$fn.' for contacting us.';
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

else
{
echo "<script type='text/javascript'>	
			alert('Not Submitted Properly');
        		location.replace('Feedback.html')
    			</script>";
}
?>	