<?php

/**
 * Class userModel
 */
class userModel extends Model
{
    /**
     * userModel constructor.
     */
	function __construct()
	{
		parent::__construct();
	}

    /**
     * @param $username
     * @return array|bool
     */
	function getUserByUsername($username)
	{
		$result = array();
		$sql = "SELECT * FROM thanhvien WHERE tentaikhoan = '".$username."'";
		if($this->conn->query($sql)->rowCount() == 0){
			return false;
		} else {
			foreach($this->conn->query($sql) as $row){
				$result = $row;
			}
			return $result;
		}
	}

    /**
     * @param $name
     * @param $un
     * @param $pw
     * @param $addr
     * @param $phone
     * @param $email
     * @return bool
     * @throws Exception
     */
	function addUser($name, $un, $pw, $addr, $phone, $email){
		$now = new DateTime(null, new DateTimeZone('ASIA/Ho_Chi_Minh'));
		$now = $now->format('Y-m-d H:i:s');
		$sql = "INSERT INTO thanhvien VALUES ('','".$name."','".$un."','".$pw."','".$addr."','".$phone."','".$email."','".$now."','0')";
		if(!$this->conn->query($sql)){
			return false;
		} else {
			return true;
		}
	}
}