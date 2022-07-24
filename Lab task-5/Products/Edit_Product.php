<?php 
	require_once 'Controller/ProductController.php';

	$categories = getAllProduct();
	$id = $_GET["id"];
	$pr= getProduct($id);
?>
<!--editproduct starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material" enctype="multipart/form-data">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $pr["id"];?>">
			<input type="text" name="name" value="<?php echo $pr["name"];?>" class="form-control">
           
            <input type="text" name="profit" value="<?php echo $pr["profit"];?>" class="form-control">
          
            
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_product" class="btn btn-success" value="Edit Product" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
