<?php
	//Registration vala page mate

	$conn = mysqli_connect("fdb30.awardspace.net","3719554_dbdeveloper","abhaymayani0007","3719554_dbdeveloper");

	if ($conn) {
		echo "Connection is successfully done..!";
	}else{
		echo "Connection not successfully..!";
	}
	
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$contact = $_REQUEST['contact'];
	$password = $_REQUEST['password'];
	$profileimg = $_REQUEST['profileimg'];

	$img = base64_decode($profileimg);

	$imgpath="photos/".$name.rand(0,1000).rand(0,1000)."image.jpeg";

	file_put_contents($imgpath, $img);
	
	$imgurl = "http://f30-preview.awardspace.net/abhaymayani.atwebpages.com/".$imgpath;

	$query = "insert into tbl_registration (name,email,contact,password,profileimg) values ('$name','$email','$contact','$password','$imgurl')";
	$result=mysqli_query($conn,$query);

	if ($result) {
		echo "Insert Success";
	}
	else{
		echo "insert Not Success..!";
	}
?>