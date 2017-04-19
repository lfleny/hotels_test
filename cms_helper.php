<? 
/**
* 
*/
class cms_helper 
{
	
	function __construct()
	{
		# code...
	}

	public function get_tpl($tpl_name, $vars)
	{
		foreach ($vars as $key => $value) {
			$data[$key] = $value;
		}
		include_once('view/'.$tpl_name.'.tpl');
	}
}