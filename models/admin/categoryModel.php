<?php

class categoryModel extends Model
{
	/*private $masp, $tensp, $gia;*/
	function __construct()
	{
		parent::__construct();
	}

    /**
     * @return array
     */
	function getAllCtgrs(){
		$rs = $this->select('*','danhmucsp',null, 'ORDER BY madm DESC');
		for ($i=0; $i < count($rs); $i++){
			$tmp = $this->select('count(masp)','danhmucsp dm, sanpham sp','dm.madm = sp.madm AND dm.madm = '.$rs[$i]['madm']);
			$sum[] = $tmp[0]['count(masp)'];
		}
		for ($i=0; $i < count($rs); $i++) { 
			$rs[$i]['tongsp'] = $sum[$i];
		}
		return $rs;
	}

    /**
     * @param $name
     * @return bool
     */
	function validateName($name, $id = null){
	    $name = "'".$name."'";
        $rs = $this->select('*','danhmucsp','tendm = '.$name.' ');
        if ($id) {
            if (!empty($rs)){
                if ($id == $rs[0]['madm']) {
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