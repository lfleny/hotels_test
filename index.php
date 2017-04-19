<? 
	include_once('models/hotel_model.php');
	include_once('models/city_model.php');
	include_once('cms_helper.php');

	$city_m = new city_model();

	$city_list = $city_m->city_get_all();
	
	cms_helper::get_tpl('index',array('city_list' => $city_list));