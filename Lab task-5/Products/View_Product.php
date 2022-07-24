
<?php 


?>
<?php 
	include 'Controller/ProductController.php';
	$products = getAllProduct();
	
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table border="1" style="border-collapse: collapse;">
		<thead>
			<th>Sl#</th>
			<th>ID</th>
			<th> Name</th>
            <th>Profit</th>
           

			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			<?php
				$i=1;

				//var_dump($categories);
				foreach($products as $p){
					$id = $p["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$p["id"]."</td>";
						echo "<td>".$p["name"]."</td>";
                        echo "<td>".$p["profit"]."</td>";
                   
						echo '<td><a href="Edit_Product.php?id='.$id.'" class="btn btn-success">Edit</a></td>';
						echo '<td><a href="Delete_Product.php?id='.$id.'" class="btn btn-danger">Delete</a></td>';
						 
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
