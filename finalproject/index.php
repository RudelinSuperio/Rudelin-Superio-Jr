<?php 
	include "config.php";
	session_start();
	  
	include "cart.class.php";
	$cart=new Cart();
  
	$data=[];
	$sql="select * from products";
	$res=$con->query($sql);
	if($res->num_rows>0){
		while($row=$res->fetch_assoc()){
			$data[]=$row;
		}
	}
?>
<html>
	<head>
        <title>Products</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
		<?php include "navbar.php"; ?>
        <div class='container mt-5 pb-5'>
			<h2 class='text-muted mb-4 text-center'>Products</h2>
			<div class='row'>
				<?php foreach($data as $row): ?>
					<div class='col-md-3 mt-2'>
						<div class="card">
						  <img class="card-img-top" src="images/<?php echo $row["IMAGE"]; ?>" >
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row["PRODUCT"]; ?></h5>
							<p class="card-text">
								Price &#8377; <?php echo $row["PRICE"]; ?> 
							</p>
							<a href="view_details.php?id=<?php echo $row["PID"]; ?>" class='btn btn-primary  float-right' >View Details</a>
						  </div>
						</div>
					</div>	
				<?php endforeach; ?>
			</div>
		</div>
    </body>
</html> 