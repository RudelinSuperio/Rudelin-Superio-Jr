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

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <title>Funda Of Web IT</title>
</head>

<?php include "navbar.php"; ?>
        
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4> </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <thead>
 <thead>

        <tr>

        <th>PID</th>

        <th>PRODUCT</th>
        
        <th>PRICE</th>

        <th>IMAGE</th>


       

       

       
       

    </tr>

    
 <?php

   $db = mysqli_connect("localhost","root","","db_shopping_cart");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM products WHERE CONCAT(PID,PRODUCT,PRODUCT) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($db, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                <td><?= $items['PID']; ?></td>
                                                    <td><?= $items['PRODUCT']; ?></td>
                                                    <td><?= $items['PRICE']; ?></td>
                                                    <td><?= $items['IMAGE']; ?></td>
                                                   
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>