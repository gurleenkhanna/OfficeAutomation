<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Attendance</title>
    
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
          <img src='img/logo.png' alt='logo'>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
    <div align="right"><a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a></div>
  </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src='' class='user-image img-responsive'/>
					</li>
				
					
                   <li>
                        <a class='active-menu'  href='Admin1.php'><i class='fa fa-dashboard fa-3x'></i> Users</a>
                    </li>
                    
		<li>
                        <a  href='attendance.php'><i class='fa fa-square-o fa-3x'></i>Attendance</a>
                    </li>

                      <li>
                        <a  href='project.php'><i class='fa fa-table fa-3x'></i>Projects</a>
                    </li>
			
                      
<li>
                        <a  href='sal.php'><i class='fa fa-square-o fa-3x'></i>Assign Salary</a>
                    </li>
			
                     
                   <li>
                    
                        <a  href='salary.php'><i class='fa fa-square-o fa-3x'></i>Update Salary</a>
                    </li>
<li>
                        <a  href='department1.php'><i class='fa fa-table fa-3x'></i>Department</a>
                    </li>
 <li>
                        <a  href='feedback.php'><i class='fa fa-square-o fa-3x'></i>Feedback</a>
                    </li>
	
<li>
                        <a  href='co.php'><i class='fa fa-square-o fa-3x'></i>Contact</a>
                    </li>

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Attendance of the Employee</h2>   
                        <h5>&nbsp;</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                <form action="Ea.php" method="post">
    		<div class="form-group">
               <input type="text" placeholder="Employee ID" name="ID">
            </div>
            <div class="form-group">
              <input type="text" placeholder="First Name" name="Fn">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Last Name" name="Ln">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Month" name="M">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Presents" name="P">
            </div>
<div class="form-group">
              <input type="text" placeholder="Absents" name="A">
            </div>
<div class="form-group">
              <input type="text" placeholder="Type of Leave" name="L">
            </div>
<div class="form-group">
              <input type="text" placeholder="Leave Left" name="LL">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Submit</button>
            </div>
            </form>
            
             
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row"></div>
                <!-- /. ROW  -->
            <div class="row"></div>
                <!-- /. ROW  -->
            <div class="row"></div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
