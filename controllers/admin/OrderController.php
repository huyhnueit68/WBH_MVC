<?php

/**
 *
 */
class OrderController extends Controller
{

    function __construct()
    {
        $this->folder = "admin";
        if(!isset($_SESSION['admin'])){
            header("Location: http://localhost/WBH_MVC/indexadmin");
        }
    }

    /**
     *
     */
    function index(){
        require_once 'vendor/Model.php';
        require_once 'models/admin/orderModel.php';
        $md = new orderModel;
        $data = $md->getAllOrders();
        $this->render('order',$data,'GIAO DỊCH','admin');
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

    /**
     *
     */
    function action(){
        $slt = $action = '';
        $countEdit = 0;
        $data = [];
        if(isset($_GET['action'])){
            $action = $_GET['action'];
        }

        if ($action != 'edit') {
            if(isset($_GET['selected'])){
                $slt = $_GET['selected'];
                $countEdit = count($slt);
            }
            if($slt == ''){
                echo "Bạn chưa chọn giao dịch!";
            }
        } else {
            $data = $_GET['selected'];
            $countEdit = 1;
        }

        require_once 'vendor/Model.php';
        require_once 'models/admin/orderModel.php';
        $md = new orderModel;
        try {
            $flag = false;

            for ($i = 0; $i < $countEdit; $i++) {
                switch ($action) {
                    case 'shipped':
                        $md->update('giaodich','tinhtrang','1',"magd = '".$slt[$i]."'");
                        $flag = true;
                        break;
                    case 'unshipped':
                        $md->update('giaodich','tinhtrang','0',"magd = '".$slt[$i]."'");
                        $flag = true;
                        break;
                    case 'del':
                        $md->delete('chitietgd',"magd = '".$slt[$i]."'");
                        $md->delete('giaodich',"magd = '".$slt[$i]."'");
                        $flag = true;
                        break;
                    case 'cancel':
                        $md->update('giaodich','tinhtrang','2',"magd = '".$slt[$i]."'");
                        $flag = true;
                        break;
                    case 'edit':
                        foreach ($data as $key => $value) {
                            switch ($key){
                                case 'orderNameCustomer':
                                    $md->update('giaodich','user_name',$value,"magd = '".$data['orderId']."'");
                                    break;
                                case 'thanhPho':
                                    $md->update('giaodich','user_dst',$value,"magd = '".$data['orderId']."'");
                                    break;
                                case 'orderAddress':
                                    $md->update('giaodich','user_addr',$value,"magd = '".$data['orderId']."'");
                                    break;
                                case 'orderSdt':
                                    $md->update('giaodich','user_phone',$value,"magd = '".$data['orderId']."'");
                                    break;
                                case 'orderDate':
                                    $md->update('giaodich','date',$value,"magd = '".$data['orderId']."'");
                                    break;
                            }
                        }
                        $flag = true;
                }
            }
            if ($flag) {
                echo "success";
            } else {
                echo "Error!";
            }
        } catch (\Exception $ce) {
            echo $ce;
        }
    }
}