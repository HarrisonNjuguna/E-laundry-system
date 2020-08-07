
<?php

	$conn = mysqli_connect('localhost', 'root', '');

	if(!$conn) {
		echo 'Failed to connect to server';
	}

	if(!mysqli_select_db($conn, 'hoteldb')) {
		echo 'Failed to connect to database';
	}
	
	$HotelName = $_POST['hotel_name'];
	$HotelAddress = $_POST['hotel_address'];
	$HotelEmail = $_POST['hotel_email'];
	$HotelPhone = $_POST['hotel_phone'];
	$HotelManager = $_POST['hotel_manager'];
	$ManagerAddress = $_POST['hotel_manager_address'];
	$ManagerEmail = $_POST['hotel_manager_email'];
	$ManagerNumber = $_POST['hotel_manager_number'];

	$sql = "INSERT INTO tblHotel (hotel_name, hotel_address, hotel_email, hotel_phone, hotel_manager, hotel_manager_address, hotel_manager_email, hotel_manager_number)
	VALUES ('$HotelName' , '$HotelAddress' , '$HotelEmail' , '$HotelPhone' , '$HotelManager' , '$ManagerAddress' , '$ManagerEmail' , '$ManagerNumber')";

	$myquery = mysqli_query($conn, $sql);

	if(!$myquery) {
		echo 'Not submitted';
	}
	else {
		echo 'Submitted successfully';
	}

	header("refresh:2 url=http://localhost/e-laundry-master/");


?>
