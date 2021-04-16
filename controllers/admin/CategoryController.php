<?php

/**
* 
*/
class CategoryController extends Controller
{
	
	function __construct()
	{
		$this->folder = "admin";
		if(!isset($_SESSION['admin'])){
			header("Location: http://localhost/phamquanghuy/admin");
		}
	}
	function index(){
		require_once 'vendor/Model.php';
		require_once 'models/admin/categoryModel.php';
		$md = new categoryModel;
		$data = $md->getAllCtgrs();
		$this->render('category',$data,'DANH MỤC SẢN PHẨM','admin');
	}

    /**
     * @return bool
     */
	function validateCategory($nameCategory, $id = null){
        require_once 'models/admin/categoryModel.php';
        $md = new categoryModel;
        if ($md->validateName($nameCategory, $id)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     *
     */
	function action(){
		$actionName = $id = $cname = $ccountry = '';
		if(isset($_GET['name'])){$actionName = $_GET['name'];}
		if(isset($_GET['id'])){$id = $_GET['id'];}
		require_once 'vendor/Model.php';
		require_once 'models/admin/categoryModel.php';
		$md = new categoryModel;
		
		switch ($actionName) {
			case 'add':
                if(isset($_GET['cname'])){$cname = $_GET['cname'];}
                if(isset($_GET['ccountry'])){$ccountry = $_GET['ccountry'];}
                if($cname == ''){echo "Bạn chưa điền tên danh mục!";return;}
                $data = array($cname, $ccountry);
                if (!$this->validateCategory($cname)){
                    if($md->insertPR('danhmucsp',$data)){
                        echo "OK";
                    }
                } else {
                    echo "Tên danh mục đã tồn tại";
                }
                break;

			case 'del':
                $md->delete('danhmucsp','madm = '.$id);
                echo "OK";
                break;

			case 'edit':
                $c4edit = $n4edit = '';
                $setRow = array('tendm','xuatsu');
                if(isset($_GET['country4edit'])){$c4edit = $_GET['country4edit'];}
                if(isset($_GET['name4edit'])){$n4edit = $_GET['name4edit'];}
                $setVal = array($n4edit, $c4edit);
                if (!$this->validateCategory($n4edit,$id)){
                    if ($md->update('danhmucsp',$setRow, $setVal, 'madm = '.$id)) {
                        echo "OK";
                    }
                } else {
                    echo "Tên danh mục đã tồn tại";
                }
                break;
            default:
                echo "";
                break;
		}
	}
}