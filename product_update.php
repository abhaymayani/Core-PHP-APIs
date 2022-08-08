<?php
	$conn=mysqli_connect("fdb30.awardspace.net","3719554_dbdeveloper","abhaymayani0007","3719554_dbdeveloper");

	if ($conn) {
		echo "Connected";
	}else{
		echo "Not Connected";
	}

	$pro_id=$_REQUEST['pro_id'];
	$new_name=$_REQUEST['new_name'];
	$new_price=$_REQUEST['new_price'];
	$new_qty=$_REQUEST['new_qty'];
	$new_description=$_REQUEST['new_description'];
	$new_product_img=$_REQUEST['new_product_img'];
	$new_pro_name = $_REQUEST['new_new_pro_name'];
	$user_id=$_REQUEST['user_id'];

	$img = base64_decode($new_product_img);

	$imgpath = "product_photos/".$new_pro_name;

	file_put_contents($imgpath, $img);

	$imgurl = "f30-preview.awardspace.net/abhaymayani.atwebpages.com/product_photos/".$imgpath;

	$query = "update tbl_addproduct set name = '$new_name', price = '$new_price' , qty = '$new_qty', description = '$new_description' , product_img = '$imgurl' where id = '$pro_id'";

	$result = mysqli_query($conn,$query);

	if ($result) {
		echo "Updated";
	}
	else{
		echo "Not Updated";
	}
?>