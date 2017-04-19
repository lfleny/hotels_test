<?
include_once('../models/hotel_model.php');
if(isset($_POST['city'])) {
	$hotels = new hotel_model();
	echo json_encode(array('hotels' => $hotels->get_all_by_city($_POST['city'])));
}