<?php session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>RMS|Log-in</title>

  
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="mybutton.css" media="screen" type="text/css" />


  <style type="text/css">
  .auto-style1 {
	color: #666666;
}

  </style>
</head>

<body>
<br><br>
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form method="post" action="dashboard.php">
    <input type="text" name="user" placeholder="Username" required>
    <input type="password" name="pass" placeholder="Password" required>
    <input type="submit" name="login" class="mybutton" value="login">
  </form>

  <div class="login-help">
      <a href="registration.php"><span class="auto-style1">Sign up</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="hmm">Forgot Password</a></div>
</div>


</body>

</html>