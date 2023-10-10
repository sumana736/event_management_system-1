 <?php
  $conn=mysqli_connect("localhost","root","","eventmanagementsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
?>
      <div class="content-wrapper">

        <section class="content">
          <div class="row">
           
            <div class="col-md-12">
            
              <div class="box box-primary">
             <p><b>Welcome User</b></p>
				
	<form role="form" name="frm" method="post">
				<div class="form-group">
                     <label for="exampleInputName">Vendor</label>
						<select class="form-control" id="exampleInputName" name="c">
							<option>Select </option>
							<option>Catering</option>
							<option>Florist</option>
							<option>Decoration</option>
							<option>Lighting</option>
							<option>others</option>
						</select>
                    </div>
                    
				<div class="box-footer">
                    <input type="submit" value="cart" name="item" onclick="return show();">
                  </div>
				  <div class="box-footer">
                    <input type="submit" value="guest list" name="newitem" onclick="return show();">
                  </div>
				  <div class="box-footer">
                    <input type="submit" value="order status" name="t" onclick="return show();">
                  </div>
				  <div class="box-footer">
                    <input type="submit" value="Log Out" name="l" onclick="return show();">
                  </div>
                </form>
	<?php
		if(isset($_POST["item"]))
		{
			
				echo"<script>window.location.href='addadmin.php'</script>";

		}
	?>	
	<?php
		if(isset($_POST["newitem"]))
		{
			
				echo"<script>window.location.href='addadmin.php'</script>";

		}
	?>	
	<?php
		if(isset($_POST["t"]))
		{
			
				echo"<script>window.location.href='addadmin.php'</script>";

		}
	?>	
	<?php
		if(isset($_POST["l"]))
		{
				echo"<script>alert ('Logged out successfully')</script>";
		}			
					
	?>
				
				
              </div><!-- /.box -->

              
              
              
                  
                  

                 
                  
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            

        </section><!-- /.content -->
 
  

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
