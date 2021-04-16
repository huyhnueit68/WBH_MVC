<?php

/**
* 
*/
class MemberController extends Controller
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
		require_once 'models/admin/memberModel.php';
		$md = new memberModel;
		$data = $md->getAllMembers();
		$this->render('member',$data,'THÀNH VIÊN','admin');
	}

	function validateUserName($userName, $id = null) {
        require_once 'models/admin/memberModel.php';
        $md = new memberModel;

        if ($md->validateUserName($userName, $id)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @throws Exception
     */
	function action(){
		$actionName = $id = '';
		if(isset($_POST['name'])){$actionName = $_POST['name'];}
		if(isset($_POST['id'])){$id = $_POST['id'];}
		require_once 'vendor/Model.php';
		require_once 'models/admin/memberModel.php';
		$md = new memberModel;
		$result = "";
		switch ($actionName) {
			case 'del':
                if ($md->delete('thanhvien','id = '.$id)) {
                    $result = "Successful";
                } else {
                    $result = "Error";
                }
                break;
			case 'addMember':
                $data = [];
                if(isset($_POST['name2'])){$data[] = $_POST['name2'];} else {$data[] = 'No info';}
                if(isset($_POST['username'])){$data[] = $_POST['username'];} else {$data[] = 'No info';}
                if(isset($_POST['password'])){$data[] = $_POST['password'];} else {$data[] = 'No info';}
                if(isset($_POST['addr'])){$data[] = $_POST['addr'];} else {$data[] = 'No info';}
                if(isset($_POST['tel'])){$data[] = $_POST['tel'];} else {$data[] = 'No info';}
                if(isset($_POST['email'])){$data[] = $_POST['email'];} else {$data[] = 'No info';}
                $now = new DateTime(null, new DateTimeZone('ASIA/Ho_Chi_Minh'));
                $now = $now->format('Y-m-d H:i:s');
                $data[] = $now; $data[] = '0';
                if (!$this->validateUserName($_POST['username'])) {
                    if ($md->insertPR('thanhvien',$data)) {
                        $result = "Successful";
                    } else {
                        $result = "Error";
                    }
                } else {
                    $result = "Đã tồn tại tên đăng nhập này";
                }
			break;
            case 'editMember':
                $data = [];
                if(isset($_POST['id'])){$id = $_POST['id'];} else {$data[] = 'No info';}
                if(isset($_POST['name2'])){$data[] = $_POST['name2'];} else {$data[] = 'No info';}
                if(isset($_POST['username'])){$data[] = $_POST['username'];} else {$data[] = 'No info';}
                if(isset($_POST['password'])){$data[] = $_POST['password'];} else {$data[] = 'No info';}
                if(isset($_POST['addr'])){$data[] = $_POST['addr'];} else {$data[] = 'No info';}
                if(isset($_POST['tel'])){$data[] = $_POST['tel'];} else {$data[] = 'No info';}
                if(isset($_POST['email'])){$data[] = $_POST['email'];} else {$data[] = 'No info';}
                $setRow = ['ten', 'tentaikhoan', 'matkhau', 'diachi', 'sodt', 'email'];
                if (!$this->validateUserName($_POST['username'], $_POST['id'])) {
                    if ($md->update('thanhvien',$setRow, $data, "id = ".$id)) {
                        $result = "Successful";
                    } else {
                        $result = "Error";
                    }
                } else {
                    $result = "Đã tồn tại tên đăng nhập này";
                }
                break;
			default:
                $result = "Error!";
                break;
		}
		echo $result;
	}
}