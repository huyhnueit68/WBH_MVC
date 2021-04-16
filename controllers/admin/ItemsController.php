<?php

/**
* 
*/
class ItemsController extends Controller
{
	
	function __construct()
	{
		$this->folder = "admin";
		if(!isset($_SESSION['admin'])){
			header("Location: http://localhost/phamquanghuy/admin");
		}
	}

    /**
     *
     */
	function index(){
        require_once 'vendor/Model.php';
        require_once 'models/admin/productModel.php';
        $md = new productModel;
        $data = $md->getAllPrds();
        $this->render('product',$data,'SẢN PHẨM','admin');
	}

    /**
     *
     */
	function gerOrderById(){
		require_once 'vendor/Model.php';
		require_once 'models/admin/orderModel.php';
		$md = new orderModel;
		$magd = "";
		if(isset($_GET['magd'])){$magd = $_GET['magd'];}
		$data = $md->gerOrderById();
		$tmp = array_values($data[0]);
		$rs = "array(";
		$x='';
		foreach ($tmp as $key => $value) {
			if($key%2 != 0){continue;}
			$rs .= "'".$key."'=>'".$value."',";
		}
		echo $rs;
	}
}