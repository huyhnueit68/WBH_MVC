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

    /**
     * @param $customerID
     * @return array
     */
	function getOrderByCustomerID($customerID){
        $gd = $this->select('*', 'giaodich',"user_id = ".$customerID, '');
        for ($i=0; $i < count($gd); $i++) {
            $magdArr[] = $gd[$i]['magd'];
        }
        for ($i=0; $i < count($gd); $i++){
            $sp = $this->select('*','chitietgd as ctgd, sanpham as sp',"ctgd.masp = sp.masp AND ctgd.magd = ".$magdArr[$i]."");
            for ($j=0; $j < count($sp); $j++) {
                $cart[$j] = array('masp'=> $sp[$j]['masp'], 'tensp' => $sp[$j]['tensp'],'dongia'=> $sp[$j]['gia'], 'soluong'=>$sp[$j]['soluong']);
            }
            $gd[$i]['sp'] = $cart; $cart = null;
        }
        return $gd;
    }
}