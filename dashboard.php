<?php
error_reporting(0);
#session_cache_limiter('private_no_expire');
#session_start(); 
if(!isset($_SESSION['user'])){

	$user = $_POST['user'];
	$pwd = $_POST['pass'];

	$_SESSION['user']=$_POST['user'];

$_SESSION['errors'] = "";
$_SESSION['search'] = 'no';
include './auxphp/connect.php';
include_once './auxphp/usercheck.php';

}
include './auxphp/connect.php';
?>


<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
<link rel="stylesheet" href="header.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="mybutton.css" media="screen" type="text/css" />


<style type="text/css">
body{
font-family:Arial, Helvetica, sans-serif;}
p{
color: white;}



	
}

.sb:hover{
color: #ffffff !important;
background: #19699c;
border-color: #000000 !important;
transition: all 0.4s ease 0s;
	
	
	
}
.auto-style1 {
	margin-left: 75px;
}
</style>



</head>

<body>
<?php include 'header.php'; ?>
<hr>

<div style="background-color:#0d2834; height: 52px; width: 732px;margin-left:auto;margin-right:auto" class="auto-style1"></div>	
<h1 style="color:white;position:relative; left: 286px; top: -68px;">Student Database Management System</h1>
</body>

</html>

