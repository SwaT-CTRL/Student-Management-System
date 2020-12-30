<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>School Management System</title>
</head>
<body>
<div class="login-box">
          <h1 class="font-weight-bold text-white">Welcome Admin</h1>
          <form action="login.php" method="post">
              <div class="form-group">
                <label class="text-white">Username</label>
                <input type="text" name="username" class="form-control text-white" required>
              </div>
              <div class="form-group">
                <label class="text-white">Password</label>
                <input type="password" name="password" class="form-control text-white" required>
              </div>
              <button class="btn" type="submit" name="login" value="Login">Login</button>
          </form>
</div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>


<?php
				session_start();
				if(isset($_POST['login'])){
					include("dbcon.php");
					$query = "select * from admin where username = '$_POST[username]'";
					$query_run = mysqli_query($con,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['username'] == $_POST['username']){
							if($row['password'] == $_POST['password']){
								$_SESSION['username'] = $row['username'];
								$_SESSION['password'] = $row['password'];
								$_SESSION['id'] = $row['id'];
								header("Location:admindash.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>