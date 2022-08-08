<?php
	$conn = mysqli_connect("fdb30.awardspace.net","3719554_dbdeveloper","abhaymayani0007","3719554_dbdeveloper");

	/*$name = $_REQUEST['name'];
	$price=$_REQUEST['price'];
	$qty=$_REQUEST['qty'];
	$description=$_REQUEST['description'];
	$product_img=$_REQUEST['product_img'];*/
	$user_id=$_REQUEST['user_id'];

	$query = "select * from tbl_addproduct where user_id = '$user_id'";
	$data = mysqli_query($conn,$query);

	$total = mysqli_num_rows($data);

	$temp = array();

	if ($total>0) {

		while ($arr=mysqli_fetch_assoc($data)) {
			$temp[]=$arr;
		}

	}
	
	echo json_encode($temp);
?>