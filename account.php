<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Login Page</title>
   <link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body style="background-color:skyblue;">>
	<center>
	<div class="container">
		<br>
		<h3>Login Page</h3>
		<div class="text">
	<form action="" method="POST">
		Email: <input type="email" name="email" required><br><br>
		Password: <input type="password" name="password" minlength="8"required><br><br>
        <input class="send" type="submit" name="Login" >
	</form>
</div>
</div>
    <?php
		session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"lonee_list");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email'] && $row['perm']==1){
						if($row['password'] == $_POST['password']){
							$_SESSION['email']=$row['email'];
							$_SESSION['name']=$row['name'];
                            header("Location: admin_login.html");
						}
					}
					elseif($row['email'] == $_POST['email'] && $row['perm']==2){
						if($row['password'] == $_POST['password']){
							$_SESSION['email']=$row['email'];
							$_SESSION['name']=$row['name'];
                            header("Location:user_login.php");
						}
					}
					echo "Wrong email or password";
				}		
			}
		?>
	</center>
</body>
</html>
