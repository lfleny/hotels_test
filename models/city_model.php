<?
class city_model
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
		    echo "Can not connect to MySQL data base: (" . $this->db->connect_errno . ") " . $this->db->connect_error;
		}
		if ($this->db->query($this->db->query("CREATE TABLE IF NOT EXISTS city_list(id int NOT NULL AUTO_INCREMENT, city varchar(255), PRIMARY KEY (id))"))) {
		}
	}

	public function city_get_all()
	{
		if (!$city = $this->db->query('SELECT * FROM city_list WHERE 1')) {
			die('Can not get city list');
		} else {
			while ($row = $city->fetch_assoc()) {
				$res[] = $row['city'];
			}
			return $res;
		}
	}

	
}