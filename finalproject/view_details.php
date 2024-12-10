<?php 
	include "config.php";
	session_start();
	
	include "cart.class.php";
	$cart=new Cart();
	
	if(isset($_POST["submit"])){
		$item=[
			"id"=>$_POST["pid"],
			"name"=>$_POST["product"],
			"price"=>$_POST["price"],
			"qty"=>$_POST["qty"],
			"total"=>($_POST["qty"]*$_POST["price"]),
			"img"=>$_POST["img"],
		];
		$cart->add_to_cart($item);
		header("location:view_cart.php");
	}
	
	$data=[];
	$sql="select * from products where PID={$_GET["id"]}";
	$res=$con->query($sql);
	if($res->num_rows>0){
		$data=$row=$res->fetch_assoc();
	}
?>
<html>
	<head>
        <title>Products Details</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
	<?php include "navbar.php"; ?>
        <div class='container mt-5'>
			<div class='row'>
				<div class='col-md-9 mx-auto'>
					<h2 class='text-muted mb-4'>Product Details</h2><hr>
					<div class='row mt-5'>
						<div class='col-md-4'>
							  <img src="images/<?php echo $data["IMAGE"]; ?>" class='img-thumbnail'>
						</div>	
						<div class='col-md-8'>
							<h2 class='text-muted'><?php echo $data["PRODUCT"]; ?></h2>
							<p class="font-weight-bold">Price ₱ <?php echo $data["PRICE"]; ?></p>
							<p><?php echo $data["DESCRIPTION"]; ?></p>
							
							<form method='post' action='<?php echo $_SERVER["REQUEST_URI"];?>'>
								<input type='hidden' name='pid' value='<?php echo $data["PID"]; ?>'>
								<input type='hidden' name='product' value='<?php echo $data["PRODUCT"]; ?>'>
								<input type='hidden' name='price' value='<?php echo $data["PRICE"]; ?>'>
								<input type='hidden' name='img' value='<?php echo $data["IMAGE"]; ?>'>
									<p><input type='number' min='1' value='1' name='qty' required class='form-control col-md-5'></p>
								<input type='submit' name='submit' value='Add To Cart' class='btn btn-primary'>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html> 