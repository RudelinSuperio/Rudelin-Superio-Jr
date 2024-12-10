<?php 
	include "config.php";
	session_start();
	
	include "cart.class.php";
	$cart=new Cart();

?>
<html>
	<head>
        <title>Checkout</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
		<?php include "navbar.php"; ?>
        <div class='container mt-5'>
			<h2 class='text-muted mb-4'>Order Placed Successfully</h2>
			<div class='row'>
				<div class='col-md-12'>
						<div class='alert alert-success'>Your Order no is #<?php echo $_GET["order_no"];?></div>
					</div>
					
				</div>
			</div>
		</div>
    </body>
</html> 