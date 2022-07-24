<?php
require_once 'Model/db_config.php';
$profit="";
$name="";
  $nameErr="";


  $bprice="";
  $bpriceErr="";


  
  $sprice="";
  $spriceErr="";



  $err_db="";
  $hasError=false;


  if(isset($_POST["add_product"]))
  {
    if(empty($_POST["name"])){
      $hasError=true;
      $nameErr="&nbsp;&nbsp;*Product name Required";
    }

    else{
        $name = htmlspecialchars($_POST["name"]); 
    }

    if(empty($_POST["bprice"])){
        $hasError=true;
        $bpriceErr="&nbsp;&nbsp;*Buying price Required";
      }
  
      else
      {
        $bprice = htmlspecialchars($_POST["bprice"]);
      }


    if(empty($_POST["sprice"]))
    {
      $hasError=true;
      $spriceErr="&nbsp;&nbsp;*Selling Price Required";
    }
    
    else
    {
      $sprice = htmlspecialchars($_POST["sprice"]);
    }

   

     







if(!$hasError){
    
    $rs = insertProduct($_POST["name"],$_POST["bprice"],$_POST["sprice"]);
    if($rs === true){
        header("Location: Add_Product.php");
    }
    $err_db = $rs;

}
}
else if (isset($_POST["edit_product"])){
    //do validations
    //if no error
    $rs = updateProduct($_POST["name"],$_POST["profit"],$_POST["id"]);
    if($rs === true){
        header("Location: View_Product.php");
    }
    $err_db = $rs;
}

else if (isset($_POST["delete_product"])){
    //do validations
    //if no error
    $rs = delete_food($_POST["id"]);
    if($rs === true){
        header("Location: View_Products.php");
    }
    $err_db = $rs;
}


function insertProduct($name,$bprice,$sprice){
    $query="insert into product values (NULL,'$name','$bprice','$sprice')";
    return execute($query);
}
function getAllProduct(){
    $query= "select * from product";
    $rs = get($query);
    return $rs;
}
function getProduct($id){
    $query="select * from product where id=$id";
    $rs = get($query);
    return $rs[0];
}
/*	function updateProduct($name,$price,$code,$id){
    $query="update product set product_name='$name',product_price='$price',product_code='$code' where id=$id";
    return execute($query);  
    
}*/

function updateProduct($name,$profit,$id){

    $query="update product set name='$name',profit='$profit' where id = $id";
  
    return execute($query);
  }

  function delete_food($id)
  {
      $query = "delete from product where id = $id";
      return execute($query);
  }



function getReview(){
    $query="select * from review";
    $rs = get($query);
    return $rs;
}

function searchProduct($key){
    $query = "select p.id,p.product_name from employee_product p left join categories c on p.c_id=c.id where p.product_name like '%$key%' or c.name like '%$key%'";
    $rs = get($query);
    return $rs;
}

 ?>
