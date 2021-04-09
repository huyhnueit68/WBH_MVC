<?php 

/**
* 
*/
class ProductController extends Controller
{
	
	function __construct()
	{
		$this->folder = "default";
	}
	function index(){
		$this->List();
	}

    /**
     * @param null $type
     */
	function List($type = null){
		require_once 'vendor/Model.php';
		require_once 'models/default/productModel.php';
		require_once 'models/admin/categoryModel.php';

		$ctgr = new categoryModel;
		$allCtgrs = $ctgr->getAllCtgrs();
		$md = new productModel;

		$data = $title = null;
		switch ($type) {
			case 'Female':
                $data = $md->getPrds('masp',0,8, 'danhcho LIKE \'%Nữ%\'');
                $title = "<span id='contentTitle' data-type='bestselling'>Sản phẩm đồng hồ nữ</span>";
                break;

			case 'Male':
                $data = $md->getPrds('masp', 0, 8, 'danhcho LIKE \'%Nam%\'');
                $title = "<span id='contentTitle' data-type='newest'>Sản phẩm đồng hồ nam</span>";
                break;

			case 'OnSale':
                $data = $md->getPrds('khuyenmai', 0, 8, 'khuyenmai > 0');
                $title = "<span id='contentTitle' data-type='onsale'>Sản phẩm đang giảm giá</span>";
                break;

            case 'ForSport':
                $data = $md->getPrds('masp', 0, 8, 'madm = 10');
                $title = "<span id='contentTitle' data-type='onsale'>Sản phẩm dành cho thể thao</span>";
                break;
            case 'Apple':
                $data = $md->getPrds('masp', 0, 8, 'madm = 7');
                $title = "<span id='contentTitle' data-type='onsale'>Sản phẩm Apple</span>";
                break;
            case 'Xiaomi':
                $data = $md->getPrds('masp', 0, 8, 'madm = 9');
                $title = "<span id='contentTitle' data-type='onsale'>Sản phẩm xiaomi</span>";
                break;
            case 'SamSungFit':
                $data = $md->getPrds('masp', 0, 8, 'madm = 8');
                $title = "<span id='contentTitle' data-type='onsale'>Sản phẩm samsung</span>";
                break;
            case 'Couple':
                $data = $md->getPrds('masp', 0, 8, 'madm = 11');
                $title = "<span id='contentTitle' data-type='onsale'>Sản phẩm cho cặp đôi</span>";
                break;

            case '':
            case 'All':
                $data = $md->getPrds('gia',0,8);
                $title = "<span id='contentTitle' data-type='all'>Sản phẩm đang giảm giá</span>";
                break;

            default:
                for ($i=0; $i < count($allCtgrs); $i++) {
                    $case = preg_replace('/\s+/', '', ucfirst($allCtgrs[$i]['tendm']));
                    switch ($type) {
                        case $case:
                        $data = $md->getPrds('gia',0,8,'madm = '.$allCtgrs[$i]['madm']);
                        $title = "<span id='contentTitle' data-type='".$case."'>Thương hiệu: ".$allCtgrs[$i]['tendm']."</span>";
                        break;
                    }
                }
		}
		$this->render('Products',$data, $title);
	}

    /**
     * @param $masp
     */
	function PrdDetail($masp){
		require_once 'vendor/Model.php';
		require_once 'models/default/productModel.php';
		$md = new productModel;
		$data = $md->getPrdById($masp);
		$title = $data['tensp'];
		require_once 'views/default/ProductDetail.php';
	}

	function action(){
	    $action = $result = "";
	    $data = [];
        if (isset($_GET['name'])) {
            $action = $_GET['name'];
            $data = $_GET['data'];
        }
        require_once 'vendor/Model.php';
        require_once 'models/admin/productModel.php';
        $md = new productModel();
        switch ($action) {
            case 'addNewProduct':
                if ($md->insertPR('sanpham', $data, '')) {
                    $result = "Successful";
                } else {
                    $result = " Error!";
                }
                break;
            case 'editProduct':
                $c4edit = $n4edit = '';
                $setRow = array(
                    'tensp', 'gia', 'baohanh', 'trongluong', 'chatlieu', 'chongnuoc',
                    'nangluong', 'loaibh', 'kichthuoc', 'mau', 'danhcho', 'phukien',
                    'khuyenmai', 'tinhtrang', 'madm', 'anhchinh', 'luotmua', 'luotxem', 'ngay_nhap'
                );
                $productId = $data['productId'];
                array_shift($data);
                $setVal = $data;
                $i = 0;
                foreach ($setVal as $key => $value) {
                    $setVal[$i] = $setVal[$key];
                    ++$i;
                }
                if ($md->update('sanpham',$setRow, $setVal, 'masp = '.$productId)) {
                    $result = "Successful";
                } else {
                    $result = " Error!";
                }
                break;
            case 'delProduct':
                foreach ($data as $value) {
                    if ($md->delete('sanpham','masp = '.$value)){
                        $result = "Successful";
                    } else {
                        $result = " Error!";
                    }
                }
                break;
            case 'delOnlyProduct':
                if ($md->delete('sanpham','masp = '.$data)) {
                    $result = "Successful";
                } else {
                    $result = " Error!";
                }
                break;
            default:
                $result = " Error!";
                break;
        }
        echo $result;
    }
}