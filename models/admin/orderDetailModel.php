<?php

/**
 * Class orderModel
 */
class orderDetailModel extends Model
{
    /**
     * orderModel constructor.
     */
	function __construct()
	{
		parent::__construct();
	}

    /**
     * @return array
     */
	function getAllOrdersDetail(){
        try {
            //SELECT SP.tensp, RESULT.TONG FROM sanpham AS SP, (SELECT CTGD.masp, SUM(CTGD.soluong) AS TONG FROM chitietgd AS CTGD GROUP BY CTGD.masp) AS RESULT WHERE SP.masp = RESULT.masp
            return $this->select('SP.tensp, RESULT.TONG','sanpham AS SP, (SELECT CTGD.masp, SUM(CTGD.soluong) AS TONG FROM chitietgd AS CTGD GROUP BY CTGD.masp) AS RESULT','SP.masp = RESULT.masp',"");
        } catch (\Exception $ce) {
            return $ce;
        }
    }

    /**
     * @return array
     */
    function getAllMemberBuy(){
	    //SELECT TV.ten, RESULT.tongtien FROM thanhvien AS TV, (SELECT GD.user_id, SUM(GD.tongtien) AS tongtien FROM giaodich AS GD GROUP BY GD.user_id) AS RESULT WHERE TV.id = RESULT.user_id
        $sql = $this->select('TV.ten, RESULT.tongtien', 'thanhvien AS TV, (SELECT GD.user_id, SUM(GD.tongtien) AS tongtien FROM giaodich AS GD GROUP BY GD.user_id) AS RESULT', 'TV.id = RESULT.user_id');
        $dataMemberBuy = [];
        foreach ($sql as $key => $value) {
            $temp = [];
            foreach ($value as $key2 => $value2) {
                if ($key2 == "ten"){
                    $temp["label"] = $value2;
                }
                if ($key2 == "tongtien"){
                    $temp["y"] = $value2;
                }
            }
            array_push($dataMemberBuy, array("label"=> $temp["label"], "y"=> $temp["y"]));
        }
        return $dataMemberBuy;
    }

    /**
     * @return array
     */
    function getAllSaleMonth(){
        //SELECT MONTH(GD.date) AS THANG, YEAR(GD.date) AS NAM, SUM(GD.tongtien) AS TONGTIEN FROM giaodich AS GD GROUP BY THANG, NAM
        $sql = $this->select('MONTH(GD.date) AS THANG, YEAR(GD.date) AS NAM, SUM(GD.tongtien) AS TONGTIEN', 'giaodich AS GD', '', 'GROUP BY THANG, NAM');
        $dataSaleMonth = [];
        foreach ($sql as $key => $value) {
            $temp = [];
            $temp2 = "";
            foreach ($value as $key2 => $value2) {
                if ($key2 == "THANG"){
                    $temp2 = $temp2.$value2;
                }
                if ($key2 == "NAM") {
                    $temp2 = $temp2."/".$value2;
                }
                if ($key2 == "TONGTIEN"){
                    $temp["y"] = $value2;
                }
                $temp['label'] = $temp2;
            }
            array_push($dataSaleMonth, array("label"=> $temp["label"], "y"=> $temp["y"]));
        }
        return $dataSaleMonth;
    }

    /**
     * @return array
     */
    function getAllInfoAnalytis(){
        $dataProductSell = $this->getProductSell();
        $dataMemberBuy = $this->getAllMemberBuy();
        $dataSaleMonth = $this->getAllSaleMonth();
        return [
            "dataProductSell" => $dataProductSell,
            "dataMemberBuy" => $dataMemberBuy,
            "dataSaleMonth" => $dataSaleMonth
        ];
    }

    /**
     * @return array
     */
    function getProductSell(){
        $dataProductSell = [];
	    $allOrder = $this->getAllOrdersDetail();
        foreach ($allOrder as $key => $value) {
            $temp = [];
            foreach ($value as $key2 => $value2) {
                if ($key2 == "tensp"){
                    $temp["label"] = $value2;
                }
                if ($key2 == "TONG"){
                    $temp["y"] = $value2;
                }
            }
            array_push($dataProductSell, array("label"=> $temp["label"], "y"=> $temp["y"]));
        }
        return $dataProductSell;
    }

    /**
     * @return mixed
     * @throws Exception
     */
	function orderToday(){
		$now = new DateTime(null, new DateTimeZone('ASIA/Ho_Chi_Minh'));
		$today = $now->format('Y-m-d');
		$rs = $this->select('count(magd) as neworder','giaodich',"DATE(date) = '".$today."'");
		return $rs[0]['neworder'];
	}

    /**
     * @return array
     */
	function gerOrderById(){
		$magd = 44;
		$rs = $this->select('*','giaodich',"magd = '".$magd."'");
		return $rs;
	}
}