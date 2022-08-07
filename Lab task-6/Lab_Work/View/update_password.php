
<?php

include 'home.php';

	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div class="form">

    <h1 align="center">Update Password</h1>
    <hr>
    <br>

    <div id="error"> </div>
    <form id="form" action="update_password_db.php"  method="post" enctype="multipart/form-data">
      
      <table align="center">
        <tr>
          <td>Enter Current Password</td>
          <td>: <input id="product_name" type="password" name="old_password"   ><br>
          <span  style="color:red;"></span></td>
        </tr>

       <tr>
        <td>Enter New Password</td>
          <td>: <input id="product_name" type="password" name="new_password">  <br>
          <td><span  style="color:red;"></span></td>
        </tr>

       

		
      


    
    



      <tr>
       
       <td><button type="submit" name="update">Update Password</button></td> 
      </tr>


    </table>


    </form>
  
</div>



    





</body>
</html>