<?
class hotel_model
{
	public $host = 'localhost';
	public $username = 'uname';
	public $password = 'pass';
	public $name = 'dbname';
	public $db;
	
	public function __construct()
	{
		$this->db = new mysqli($this->host, $this->username, $this->password, $this->name);
		if ($this->db->connect_errno) {
		    die("Can not connect to MySQL data base: (" . $this->db->connect_errno . ") " . $this->db->connect_error);
		}
		if ($this->db->query("CREATE TABLE IF NOT EXISTS hotels_list(id int NOT NULL AUTO_INCREMENT, hotel_name varchar(255), city varchar(255), PRIMARY KEY (id))")) {
		}
	}

	public function get_all_by_city($city)
	{

		if (!$hotels = $this->db->query('SELECT * FROM hotels_list WHERE city ="'.$city.'"')) {
			die('Can not get hotels list by city name');
		} else {
			while ($row = $hotels->fetch_assoc()) {
				$res[] = $row['hotel_name'];
			}
			return $res;
		}
	}


}