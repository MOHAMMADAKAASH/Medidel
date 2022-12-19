<?php
$con = mysqli_connect('localhost','root')

mysqli_select_db($con,'medicine_delivery_data');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address_1'];
$address2 = $_POST['address_2'];
$phone = $_POST['p_number'];
$city = $_POST['city'];
$zip = $_POST['zip'];

$query = " insert into userinfodata ( first_name, last_name, email, password, address_1, address_2, p_number, city, zip)
values ('$first_name', '$last_name', '$email', '$password', '$address_1', '$address_2', '$p_number', '$city', '$zip' )";
mysqli_query($con,$query );
?>
