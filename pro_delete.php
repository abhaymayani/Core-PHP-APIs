<?php
	$conn=mysqli_connect("fdb30.awardspace.net","3719554_dbdeveloper","abhaymayani0007","3719554_dbdeveloper");

	if ($conn) {
		echo "Connected";
	}else{
		echo "Not Connected";
	}

	$pro_id = $_REQUEST['pro_id'];

	$query = "delete from tbl_addproduct where id = '$pro_id'";
	$result = mysqli_query($conn,$query);

	if ($result) {
		echo "Deleted SuccessFully";
	}
	else{
		echo "Not Deleted..!";
	}
?>