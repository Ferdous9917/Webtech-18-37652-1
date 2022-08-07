<?php
include 'home.php';
include 'function.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {

    background-color: red;
  padding: 2px 8px;
}


</style>
</head>
<body>

<h2>Card</h2>

<div class="card">
  
  <div class="container">
    <h4><b>Total Number Of Register Faculty:<?php echo get_user_count() ?></b></h4> 
   
  </div>
</div>

</body>
</html> 
