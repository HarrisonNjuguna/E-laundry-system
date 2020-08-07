
<?php

	$conn = mysqli_connect('localhost', 'root', '');

	if(!$conn) {
		echo 'Failed to connect to server';
	}

	if(!mysqli_select_db($conn, 'hoteldb')) {
		echo 'Failed to connect to database';
	}

	$customer_name = $_POST['customer_name'];
	$customer_address = $_POST['customer_address'];
	$customer_email  = $_POST['customer_email'];
	$customer_number = $_POST['customer_number'];
	$customer_pickup = $_POST['customer_pickup'];

	$sql = "INSERT INTO tblApartment (customer_name, customer_address, customer_email, customer_number, customer_pickup)
	VALUES ('$customer_name' , '$customer_address' , '$customer_email' , '$customer_number' , '$customer_pickup')";

	$myquery = mysqli_query($conn, $sql);

	if(!$myquery) {
		echo 'Not submitted';
	}
	else {
		echo 'Submitted successfully';
	}

	header("refresh:2 url=http://localhost/e-laundry-master/");
?>
