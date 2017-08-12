
<?php
session_start();
    include './include/config.php';
    
    if (isset($_POST['submit'])) {
    	$Username=$_POST['Username'];
    	$Password=$_POST['Password'];
    	$Email=$_POST['Email'];
    	$Phone=$_POST['Phone'];

    	$sql= "INSERT INTO user (Username,Password,Email,PhoneNo) VALUES('$Username','$Password','$Email','$Phone');";
    	$query=mysqli_query($conn,$sql); 
    		if (!$query) {
    			echo "Registration is not saved";
    		}
    			else {
    				echo "Your Registration Is Completed";
    			}
    }
?>

