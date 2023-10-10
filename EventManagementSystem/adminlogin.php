<!DOCTYPE html>
<?php session_start();
$_session['email']="";
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    
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
        <a href="index2.html"><b>Event Management System</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <form method="post">
          <div class="form-group has-feedback">
            UserId<input type="text" class="form-control" placeholder="Admin" name="n"><br><br>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
           Password <input type="password" class="form-control" placeholder="Password" name="pas"><br><br>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
			<input type="submit" class="btn btn-primary btn-block btn-flat" value="Cancel" name="Cancel">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="Login" name="login">
            </div>
          </div>
        </form>
<?php
		if(isset($_POST["login"]))
		{
			$a=$_POST["n"];
			$b=$_POST["pas"];
			
			$selectlogin="select * from admin where email='$a' and password='$b'";
			$reslogin=mysqli_query($conn,$selectlogin);
			$rc=mysqli_num_rows($reslogin);
			
			if($rc==1)
			{
				$_SESSION['email']=$a;
				echo"<script>alert('login successfull');window.location.href='adminsignup.php'</script>";
			}
			else
			{
				echo"<script>alert('login unsuccessfull');</script>";
			}
		}
	?>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>












