<?php

/**
 * Class AnalyticsController
 */
class AnalyticsController extends Controller
{
    /**
     * AnalyticsController constructor.
     */
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
        /**
         * get data ana product sell
         */
		require_once 'models/admin/orderDetailModel.php';
		$mdOrderDetail = new orderDetailModel();
        $dataProductSell = $mdOrderDetail->getAllInfoAnalytis();

		$this->render('analytics',$dataProductSell,'ANALYTICS','admin');
	}

    /**
     *
     */
	function memberAnalytics(){
		require_once 'vendor/Model.php';
		require_once 'models/admin/memberModel.php';
		$md = new memberModel;
		$data = $md->getAllMembers();
		$this->render('memberAnalytics',null,'MEMBER ANALYTICS','admin');
	}

	function anaProductSell(){
        require_once 'vendor/Model.php';
        require_once 'models/admin/orderDetailModel.php';
        $this->render('memberAnalytics',null,'MEMBER ANALYTICS','admin');
        $md = new orderDetailModel();
        $md->getAllOrdersDetail();
    }
}