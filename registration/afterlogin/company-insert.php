
<?php

	$conn = mysqli_connect('localhost', 'root', '');

	if(!$conn) {
		echo 'Failed to connect to server';
	}

	if(!mysqli_select_db($conn, 'hoteldb')) {
		echo 'Failed to connect to database';
	}

	$company_name = $_POST['company_name'];
	$company_address = $_POST['company_address'];
	$company_email = $_POST['company_email'];
	$company_phone = $_POST['company_phone'];
	$company_manager = $_POST['company_manager'];
	$company_manager_address = $_POST['company_manager_address'];
	$company_manager_email = $_POST['company_manager_email'];
	$company_manager_number = $_POST['company_manager_number'];

	$sql = "INSERT INTO tblCompany (company_name, company_address, company_email, company_phone, company_manager, company_manager_address, company_manager_email, company_manager_number)
	VALUES ('$company_name' , '$company_address' , '$company_email' , '$company_phone' , '$company_manager' , '$company_manager_address' , '$company_manager_email' , '$company_manager_number')";

	$myquery = mysqli_query($conn, $sql);

	if(!$myquery) {
		echo 'Not submitted';
	}
	else {
		echo 'Submitted successfully';
	}

	header("refresh:2 url=http://localhost/e-laundry-master/");


?>
