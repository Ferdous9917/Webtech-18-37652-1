<?php 
	include 'Controller/ProductController.php';
	
	$categories = getAllProduct();
	$id = $_GET["id"]; //get hyperlink 
	$c = getProduct($id);
?>
<!--edit category starts -->



<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<h4 style="color: red;" >Are you sure to Delete?</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="name" value="<?php echo $c["name"];?>" class="form-control" disabled>
			<input type="text" name="profit" value="<?php echo $c["profit"];?>" class="form-control" disabled>
			
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="delete_product" class="btn btn-danger" value="Delete Food" &tab;>

			<a href="allproducts.php"> Cancel</a>
		</div>
	</form>
</div>
  
