<!DOCTYPE html>
<?php session_start();
?>
<html>
  <head>
  </head>
  <?php
  $conn=mysqli_connect("localhost","root","","eventmanagementsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
?>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <p>Event Management System</p>
      </div>
      <div class="login-box-body">
        <form method="post">
          <div class="form-group has-feedback">
            UserId<input type="text" class="form-control" placeholder="admin" name="n">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            Password<input type="password" class="form-control" placeholder="Password" name="pas">
	         <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
           
            <div class="col-xs-4">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="Login" name="login">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="Cancel" name="Cancel">
            </div>
          </div>
        </form>
<?php
		if(isset($_POST["login"]))
		{
			$e=$_POST["n"];
			$f=$_POST["pas"];
			$selectlogin="select * from user where email='$e' and password='$f'";
			$reslogin=mysqli_query($conn,$selectlogin);
			$rc=mysqli_num_rows($reslogin);
			
			if($rc==1)
			{
				echo"<script>alert('login successfull');window.location.href='usersignup.php'</script>";
			}
			else
			{
				echo"<script>alert('login unsuccessfull');</script>";
			}
		}
	?>

      </div>
    </div>
  </body>
</html>