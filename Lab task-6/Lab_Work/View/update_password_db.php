<?php


$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"library");


$password="";


$query="SELECT * FROM users WHERE id='$_SESSION[id]'";



$query_run=mysqli_query($connection,$query);


while ($row=mysqli_fetch_assoc($query_run)){

      $password=$row['password'];
}

if($password == $row['old_password']){

    $query="UPDATE users SET $password='$_POST[new_password]' WHERE id='$_SESSION[id]'";
}


?>


<script type="text/javascript">

alert("Updated Successfully");

window.location.href="home.php";

</script>

