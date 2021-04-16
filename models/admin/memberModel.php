<?php

class memberModel extends Model
{
	function __construct()
	{
		parent::__construct();
	}

    /**
     * @return array
     */
	function getAllMembers(){
		return $mb = $this->select('*', 'thanhvien','quyen = 0', 'ORDER BY date DESC');
	}

    /**
     * @return mixed
     * @throws Exception
     */
	function memberToday(){
		$now = new DateTime(null, new DateTimeZone('ASIA/Ho_Chi_Minh'));
		$today = $now->format('Y-m-d');
		$beforeWeek = date("Y-m-d", strtotime("-1 week"));
		$rs = $this->select('count(id) as newmem','thanhvien',"DATE(date) <= '".$today."' AND DATE(date) >= '".$beforeWeek."'");
		return $rs[0]['newmem'];
	}

    /**
     * @return mixed
     */
	function allMember(){
		$rs = $this->select('count(id) as sum','thanhvien');
		return $rs[0]['sum'];
	}

    /**
     * @param $name
     * @param null $id
     * @return bool
     */
    function validateUserName($name, $id = null) {
        $name = "'".$name."'";
        $rs = $this->select('*','thanhvien','tentaikhoan = '.$name);
        if ($id) {
            if (!empty($rs)){
                if ($id == $rs[0]['id']) {
                    return false;
                } else {
                    return true;
                }
            } else {
                return false;
            }
        } else {
            if (count($rs) > 0){
                return true;
            }
            return false;
        }
    }
}