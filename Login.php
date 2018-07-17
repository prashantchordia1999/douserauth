<?php  //Start the Session
 session_start();
 $connect = mysqli_connect("localhost", "root", "", "mucoehregistration");  
//3. If the form is submitted or not.
//3.1 If the form is submitted

 if(isset($_POST["insert"]))
 {
if (isset($_POST['University_Name']) and isset($_POST['Department_Email']) and isset($_POST['Department_Password'])){
//3.1.1 Assigning posted values to variables.
$University_Name = $_POST['University_Name'];
$Department_Email = $_POST['Department_Email'];
$Department_Password = $_POST['Department_Password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `departmentlogin` WHERE University_Name='$University_Name' and Department_Email='$Department_Email' and Department_Password='$Department_Password'";
 
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count>= 1){

$_SESSION['user'] = $Department_Name;

header('Location:./Mucoeh-Home/index.php');
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
	echo "<h2>Invalid Credentials</h2>";
	echo "<h4>Please input correct details.</h4>";
   	
	
$fmsg = "Invalid Login Credentials.";

}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['Department_Email'])){
$Department_Email = $_SESSION['Department_Email'];
        echo '
<script type="text/javascript">
window.location = "./Mucoeh-Home/index.php";
</script> ';

echo "<a href='logout.php'>Logout</a>";
 
$_SESSION['login'] = true;
}
else{
//3.2 When the user visits the page first time, simple login form will be displayed.
}
}
?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Mucoeh-For The New Era | University Signup</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body>

			<script src="assets/js/main.js"></script>
		<!-- Header -->
			<header id="header">
					<h1 style="text-decoration: underline;">Mucoeh Login</h1>
				<p><strong>MU&nbsp;</strong>-&nbsp;Multiple&nbsp;<strong>CO&nbsp;</strong>-&nbsp;College&nbsp;<strong>E&nbsp;</strong>-&nbsp;Event&nbsp;<strong>H&nbsp;</strong>-&nbsp;Hoster<br />
				"For The New Era of Competitons"</p>
		</header>
		<!-- Signup Form -->
		 <form id="signup-form" autocomplete="on" action="./Login.php" method="POST" ">
	     		<input type="text" name="University_Name" id="University_Name" placeholder="University Name"  pattern="[A-Za-z0-9]+"
        title="University Name should only contain letters. E.g. Munshi College of Engineering" required="">
				<input type="email" name="Department_Email" id="Department_Email" placeholder="Department_Email" 
				 required="">
				<input type="text" name="Department_Password" id="Department_Password" placeholder="Department_Password" pattern="[0-9]+" 
				title="Password should only contain numbers. E.g. 4, 5 etc." required="">
			    <input type="submit" name="insert" id="insert" value="Submit" />	
			</form>
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Mucoeh 2018 | All rights reserved.</a>
				</ul>
			</footer>
	</body>
</html>