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
	function List($type = null){
		require_once 'vendor/Model.php';
		require_once 'models/default/productModel.php';
		require_once 'models/admin/categoryModel.php';
		$ctgr = new categoryModel;
		$allCtgrs = $ctgr->getAllCtgrs();
		$md = new productModel;

		$data = $title = null;
		switch ($type) {
			case 'BestSelling':
			$data = $md->getPrds('luotmua',0,8);
			$title = "<span id='contentTitle' data-type='bestselling'>Mua nhiều tuần qua</span>";
			break;
			case 'Newest':
			$data = $md->getPrds('ngay_nhap',0,8);
			$title = "<span id='contentTitle' data-type='newest'>Sản phẩm mới</span>";
			break;
			case 'OnSale':
			$data = $md->getPrds('khuyenmai',0,8);
			$title = "<span id='contentTitle' data-type='onsale'>Sản phẩm đang giảm giá</span>";
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