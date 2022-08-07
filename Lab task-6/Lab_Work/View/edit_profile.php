<?php

//include  '../Model/db_config.php';
include 'home.php';

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"library");

$username="";
$email="";

$mobile="";

$address="";


$query="Select * from users where id='$_SESSION[id]'";

$query_run=mysqli_query($connection,$query);
while ($row=mysqli_fetch_assoc($query_run)){

      $username=$row['username'];
      $email=$row['email'];
      $mobile=$row['mobile'];
      $address=$row['address'];
}




?>

<!DOCTYPE html>
<html>
<head>
<style> 
input[type=text] {
    text-align: center;
  width: 20%;
  padding: 10px 20px;
  margin: 2px 0;
  box-sizing: border-box;
}
</style>
</head>
<body>

<h2>Update Profile</h2>

<form action="update_profile.php" method="post" enctype="multipart/form-data">
  <label for="fname">Username</label>
  <input type="text" id="fname" name="username" value="<?php echo $username ?>"><br>
  <label for="lname">Email</label>
  <input type="text" id="lname" name="email" value="<?php echo $email ?>"><br>

  <label for="lname">Mobile</label>
  <input type="text" id="lname" name="mobile" value="<?php echo $mobile ?>"><br>

  <label for="lname">Address</label>
  <input type="text" id="lname" name="address" value="<?php echo $address ?>"><br>

  <button type="submit" name="update">Update</button>
</form>

</body>
</html>






