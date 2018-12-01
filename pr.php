<?php
session_start();
?>
<html>
<head>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Emp_Profile</title>

    <link rel='stylesheet' type='text/css' href='css/bootstrap/css/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='css/font-awesome/css/font-awesome.min.css' />
    <link rel='stylesheet' type='text/css' href='css/css/local.css' />

    <script type='text/javascript' src='js/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='bootstrap/js/bootstrap.min.js'></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel='stylesheet' type='text/css' href='http://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css' />
    <link rel='stylesheet' type='text/css' href='http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css' />
    <link id='gridcss' rel='stylesheet' type='text/css' href='http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css' />

    <script type='text/javascript' src='http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js'></script>
    <script type='text/javascript' src='http://prepbootstrap.com/Content/js/gridData.js'></script>
</head>
</head>
<body>
<?php

echo"<div id='wrapper'>
          <nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
<div class='navbar-header'>
<img src='img/logo.png' alt='logo'></div>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand'>Employee Panel</a>
            </div>
            <div class='collapse navbar-collapse navbar-ex1-collapse'>
                <ul id='active' class='nav navbar-nav side-nav'>
                    <li class='selected'><a><i class='fa fa-bullseye'></i> Details</a></li>
<li><a href='ss.php'><i class='fa fa-tasks'></i> Salary</a></li>
                    <li><a href='a.php'><i class='fa fa-tasks'></i> Attendance</a></li>
                    <li><a href='pr.php'><i class='fa fa-globe'></i> Project</a></li>
                    <li><a href='de.php'><i class='fa fa-list-ol'></i> Department</a></li>
                    <li><a href='password.php'>Change Password</a></li>
                    <li><a href='login.html'>Logout</a></li>
                </ul>
                 
                    <li class='divider-vertical'></li>
                    <li>
                        
                    </li>
                </ul>
            </div>
        </nav>

        <div id='page-wrapper'>
            <div class='row'>
                <div class='col-lg-12'>
        <div id='page-wrapper'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1>Dashboard </h1>
                    <div class='alert alert-dismissable alert-warning'>
                        <button data-dismiss='alert' class='close' type='button'>&times;</button>
                        Project Details 

                    </div>
                </div>
            </div>";

include_once("C:\wamp\www\Final project 1\conn.php");
$iD=$_SESSION['a'];
$sql = "SELECT Project_id,Employee_id,Name_of_Project,P_Manager from project where Employee_id=$iD";
$connection = connect();
$result = mysqli_query($connection,$sql);
if($result->num_rows>0) {
    
    while($row = $result->fetch_assoc()) {
   echo"<table align='center' border='5' CELLPADDING='7' CELLSPACING='0.9'>
<tr><th>Project_Id</th>
<th>Employee_Id</th>
<th>Name_of_Project</th>
<th>P_Manager</th>
</tr>

<tr align='center'>
<th>$row[Project_id]</th>
<th>$row[Employee_id]</th>
<th>$row[Name_of_Project]</th>
<th>$row[P_Manager]</th>

</tr>
</table>";
        
}} 

?>
</body>
</html>