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
    
    // Delete user based on ID
    $delete_sql = "DELETE FROM users WHERE UID='$user_id'";
    $delete_result = $con->query($delete_sql);
    
    if($delete_result) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user: " . $con->error;
    }
} else {
    echo "User ID not provided.";
}
?>
