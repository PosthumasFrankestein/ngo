<html>
  <head>
    <link rel="stylesheet" href="style/login.css">
    <title>login</title>
  </head>
  <body>
    <div class="main">
      <p class="sign" align="center"> Sign in</p>
      <form class="form1" action="" method="POST">
        <input type="email" class="username" name="email" placeholder="email">
        <input class="password" name="password" type="password" pattern="[a-zA-Z0-9]+" placeholder="password">
        <input class="submit" type="submit" name="Login" >
        <p class="Signup"> <a href="#"> Signup here</a></p>
      </form>
	<?php
		session_start();
			if(isset($_POST['Login'])){
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
					
				}
				echo '<p class="error"> Wrong email or password</p>';		
			}
		?>
    </div>
    
  </body>
</html>