<?php 
  session_start();
  $id=$_GET["id"];
  
  include "cart.class.php";
  $cart=new Cart();
  $cart->remove($id);
  header("location:view_cart.php");
?>