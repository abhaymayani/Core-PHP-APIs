<?php
	$conn = mysqli_connect("fdb30.awardspace.net","3719554_dbdeveloper","abhaymayani0007","3719554_dbdeveloper");

	if ($conn) {
		echo "Connection is successfully done..!";
	}else{
		echo "Connection not successfully..!";
	}

	$name=$_REQUEST['name'];
	$price=$_REQUEST['price'];
	$qty=$_REQUEST['qty'];
	$description=$_REQUEST['description'];
	$product_img = $_REQUEST['product_img'];
	$user_id=$_REQUEST['user_id'];

	$img = base64_decode($product_img);

	$imgpath="product_photos/".$name.rand(0,1000).rand(0,1000)."image.jpeg";

	file_put_contents($imgpath, $img);

	//$imgurl = "http://f30-preview.awardspace.net/abhaymayani.atwebpages.com/".$imgpath;
	$imgurl = "http://f30-preview.awardspace.net/abhaymayani.atwebpages.com/".$imgpath;

	$query = "insert into tbl_addproduct (name,price,qty,description,product_img,user_id) values ('$name','$price','$qty','$description','$imgurl','$user_id')";
	$result=mysqli_query($conn,$query);

	if ($result) {
		echo "Insert";
	}else{
		echo "Not Inserted";
	}
?>
