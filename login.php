
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
<?php
$conn = mysqli_connect("localhost","root","","foodies");
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
	$email = $_POST['email'];
    $password = $_POST['password'];
	$query = "SELECT * FROM user WHERE email = '$email' and pw= '$password';";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) == 1) {
		while($row = mysqli_fetch_assoc($result)) {
			//store database username and password into new variables
			$dbusername = $row['email']; // database column heading
			$dbpassword = $row['pw']; // database column heading
		} 
		 /*Check username and password submitted by the user against stored username and password*/
		if($email == $dbusername && $password == $dbpassword) {
			header("Location: login2.php");
		} 
	} else {
		echo "Account not found" . "<br>";
	}}
	
?>
<SCRIPT type="text/javascript">
function validate()
{
	var email=document.getElementById("email");
	var pass=document.getElementById("password");
	if(email.value==" " || email.value=="")
	{
		alert("The field is empty");
		email.focus();
		return false;
	}
	if(pass.value==null || pass.value==" ")
	{
		alert("Please Enter Password");
		pass.focus();
		return false;
	}}
	</script>
	    <form id="login-form" class="login-form" name="form1" method="post" action="login.php" onsubmit="return validate()">
	    	<input type="hidden" name="is_login" value="1">
	        <div class="h1">Login</div>
	        <div id="form-content">
	            <div class="group">
	                <label for="email">Email</label>
	                <div><input id="email" name="email" class="form-control required" type="email" placeholder="Email"></div>
	            </div>
	           <div class="group">
	                <label for="name">Password</label>
	                <div><input id="password" name="password" class="form-control required" type="password" placeholder="Password"></div>
	            </div>
	                <em>
		<label class="err" for="password" generated="true" style="display: block;"></label>
					</em>
				
	            <div class="group submit">
	                <label class="empty"></label>
	                <div><input name="submit" type="submit" value="Submit"/></div>
	            </div>
	        </div>
	        <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
	    </form>
	 
    </body>
</html>