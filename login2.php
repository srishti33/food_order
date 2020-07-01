<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        
		<style type="text/css">
		a:link {color: #ffffff}
		a:visited {color: #ffffff}
		a:hover {color: #ffffff}
		a:active {color: #ffffff}
		</style>
    </head>
    <body>
	<?php include("header.php"); ?>


    <form id="login-form" class="login-form" name="form1" method="post" action="index.php">

<div id="form-content">
    <div class="welcome">
        Welcome, you are logged in. 
        <br />
        Thank you for choosing us.
        <br />
        <center><a href="http://localhost/software/payment.php" style="color:#3ec038">Place an order</a></center>
        
        <section align="right"><a href="login.php?ac=logout" style="color:#3ec038">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</section>
    </div>	
</div>
</form>
	 
    </body>
</html>