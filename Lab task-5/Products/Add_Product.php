
<?php 
	include 'Controller/ProductController.php';
?>

<fieldset>
	Add Product
	<div style="text-align: center;">
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action=""  method="post" enctype="multipart/form-data">

				<h4 class="text">Name:</h4> 
				<input type="text" name="name" id="name" value="<?php echo $name;?>"><br>
				<span id="nameErr" style="color : red;"><?php echo $nameErr; ?></span>
				<br>

                <h4 class="text">Buying Price:</h4> 
				<input type="text" name="bprice" value="<?php echo $bprice;?>" ><br>
				<span  style="color : red;"><?php echo $bpriceErr; ?></span>
				<br>
                
                <h4 class="text">Selling Price:</h4> 
				<input type="text" name="sprice" value="<?php echo $sprice;?>" ><br>
				<span  style="color : red;"><?php echo $spriceErr; ?></span>
				<br>
				<br>
				<input type="submit" name="add_product" class="btn btn-success" >

		</form>
	</div>
</fieldset>	

