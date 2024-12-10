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
<?php 
include "config.php";

if (isset($_POST['submit'])) {
    // Handle form submission if needed
}

include "config.php";

$sql = "SELECT * FROM users";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <?php include "navbar.php"; ?>
    <br><br>
    <div class="container">
        <h2>Customers Record</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>UID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Pincode</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['UID']; ?></td>
                            <td><?php echo $row['NAME']; ?></td>
                            <td><?php echo $row['EMAIL']; ?></td>
                            <td><?php echo $row['CONTACT']; ?></td>
                            <td><?php echo $row['ADDRESS']; ?></td>
                            <td><?php echo $row['CITY']; ?></td>
                            <td><?php echo $row['PINCODE']; ?></td>
                            <td>
                            <a class="btn btn-info" href="reupdate.php?id=<?php echo $row['UID']; ?>">Edit</a>
<a class="btn btn-danger" href="delete.php?id=<?php echo $row['UID']; ?>">Delete</a>

                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='8'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- jQuery and Bootstrap JS scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
