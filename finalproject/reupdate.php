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

if(isset($_GET['id'])) {
    $user_id = $_GET['id'];
    
    // Fetch user data based on the ID
    $sql = "SELECT * FROM users WHERE UID='$user_id'";
    $result = $con->query($sql);
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['NAME'];
        $email = $row['EMAIL'];
        // Similarly, fetch other fields as needed
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "User ID not provided.";
    exit;
}

if(isset($_POST['submit'])) {
    // Handle form submission for updating user data
    $new_name = $_POST['name'];
    $new_email = $_POST['email'];
    // Similarly, get other fields
    
    $update_sql = "UPDATE users SET NAME='$new_name', EMAIL='$new_email' WHERE UID='$user_id'";
    $update_result = $con->query($update_sql);
    
    if($update_result) {
        echo "User updated successfully.";
    } else {
        echo "Error updating user: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit User</h2>
        <form method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <!-- Add other fields as needed -->
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
