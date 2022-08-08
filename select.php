<?php
	//Login vala Form mate

	$conn = mysqli_connect("fdb30.awardspace.net","3719554_dbdeveloper","abhaymayani0007","3719554_dbdeveloper");

	$email = $_REQUEST['email'];	
	$password = $_REQUEST['password'];

	$query = "select * from tbl_registration where email='$email' and password='$password' ";
	$data=mysqli_query($conn,$query);

	$num = mysqli_num_rows($data);
	$temp = array();

	if ($num==1) {
		$temp['result']=1;
		$temp['data']=mysqli_fetch_assoc($data);
	}
	else{
		$temp['result']=0;
	}

	echo json_encode($temp);
?>