<?php 
  session_start();
  
  $id=$_POST["id"];
  $qty=$_POST["qty"];
  
  include "cart.class.php";
  $cart=new Cart();

  $cart->update_cart(["id"=>$id,"qty"=>$qty]);
  
  $result=[
	"row_total"=>$cart->get_item($id)["total"],
	"total"=>$cart->get_cart_total(),
  ];
  echo json_encode($result);
  
?>