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
                  <h3 class="box-title">Welcome Vendor</h3>
                </div>
                <form role="form" name="frm" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputName1">Product name</label> 
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter name" name="n1" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputprice1">Product price</label>
                      <input type="text" class="form-control" id="exampleInputprice1" name="price" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputimage1">Product image</label>
                      <input type="file" class="form-control" id="exampleInputimage1" name="i">
                    </div>
                    
                    
                  </div>

                  <div class="box-footer">
                    <center><input type="submit" class="btn btn-primary" value="Add" name="btn" onclick="return show();"></center>
                  </div>
                </form>
<?php
 function getExtension($str)
	 {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
		if(isset($_POST["btn"]))
	{
			$x=$_POST["n1"];
			$z=$_POST["price"];
			$image=$_FILES['i'];
 	if ($image) 
			{
				$filename = stripslashes($_FILES['i']['name']);
				$extension = getExtension($filename);
				$extension = strtolower($extension);
 	
				if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif") && ($extension != "bmp")) 
				{
		
					echo '<h1>Unknown extension!</h1>';
					$errors=1;
				}
				else
				{

				$image_name=time().'.'.$extension;

				$newname="upload/".$image_name;

				$copied = copy($_FILES['i']['tmp_name'], $newname);
				if (!$copied) 
				{
					echo '<h1>Copy unsuccessfull!</h1>';
				$errors=1;
			}
			}
			}
				
				$queryinsert="insert into product values('','$x','$z','$image_name')";
				if(mysqli_query($conn,$queryinsert))
				{
					echo"<script>alert('Registered Successfully')</script>";
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
			 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" border="1px">
                    <thead>
                        <tr>
						<th>Slno.</th>
						<th>Image</th>
						<th>Product Name</th>
                        <th>Product Price</th>
						<th>Update</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						$c=1;
						$queryselect="select * from product";
						$res=mysqli_query($conn,$queryselect);
						while($row=mysqli_fetch_assoc($res))
						{
							$b=$row['productid'];
							$x=$row['name'];
							$y=$row['price'];
							$s=$row['image'];
							?>
						<tr>
						<td><?php echo $c;?></td>
						<td><img src="upload/<?php echo $s;?>" width="100px" height="100px"</td>
						<td><?php echo $s;?></td>
						<td><?php echo $y;?></td>
						<td><img src="editicon.png" width="30px" height="30px"></td>
						<td><img src="delete-icon.jpg" width="30px" height="30px"></td>
						</tr>
						<?php
						$c++;
						}
						?>
					</tbody>
                  </table>
                </div><!-- /.box-body -->
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