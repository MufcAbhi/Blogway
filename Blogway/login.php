<?php include 'connection.php';?>
<html lang="en">
<head>
	<link rel="icon" href="../../favicon.ico">
	<title>Sign In </title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php
        if(isset($_POST['submit'])){
        	$uemail=$_POST['email'];
        	$upassword=$_POST['password'];
        	$query="select * from admin";
			$result=mysql_query($query);
			$datas=mysql_fetch_array($result);                       
			if($datas['Email']== $uemail && $datas['Password']== $upassword){
				header("Location: " . "myblogadmin.php");
			}
			else{
				echo '<h1 align="center">'.'Invalid!'.'</h1>';
			}
        }
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-lg-4"></div>
	</div>
	<div class="row-fluid">
		<div class="col-lg-4">
			<form class="form" method="POST">
				<h2 class="form-signin-heading">Please sign in.</h2>
				<div>
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
				</div>
				<div>
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" required>
				</div>
				<br>
				<div align="center">
					<button class="btn btn-lg btn-primary btn-block" type="submit"  name="submit">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>