<?php
  $conn=mysqli_connect("localhost","root","","eventmanagementsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
?>
<script>
function show()
{
	pas=frm.pas.value;
	repas=frm.repas.value;
	if(repas!=pas)
	{
	alert("password not matched");
	frm.pas.focus();
	return false;
	}
}
</script>

      <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Event Management System</h3>
                </div>
                <form role="form" name="frm" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputName1">User name</label> 
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter name" name="n1" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}' title="please fill the requested format" name="pas" required>
                    </div>   
                  </div>

                  <div class="box-footer">
                    <center><input type="submit" class="btn btn-primary" value="Sign Up" name="btn" onclick="return show();"></center>
                  </div>
                </form>
<?php
		if(isset($_POST["btn"]))
	{
			$t=$_POST["n1"];
			$u=$_POST["email"];
			$v=$_POST["pas"];
 	
				$queryinsert="insert into user values('','$t','$u','$v')";
				if(mysqli_query($conn,$queryinsert))
				{
					echo"<script>alert('User Registered Successfully')</script>";
				}
				else
				{
					echo"<script>alert('Register Failed')</script>";
				}
			
		}
			
				
	
	?>	
				
              </div>
			</div>
			</div>
			

            </div>

            

        </section>
 
    

    <!-- jQuery 2.1.3 -->
	<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src=plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->

   
  </body>
</html>