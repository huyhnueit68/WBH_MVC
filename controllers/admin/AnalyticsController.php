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
			header("Location: http://localhost/WBH_MVC/admin");
		}
	}

    /**
     *
     */
	function index(){
		require_once 'vendor/Model.php';
		/*require_once 'models/admin/memberModel.php';
		$md = new memberModel;
		$data = $md->getAllMembers();*/
		$this->render('analytics',null,'ANALYTICS','admin');
	}

    /**
     *
     */
	function memberAnalytics(){
		require_once 'vendor/Model.php';
		/*require_once 'models/admin/memberModel.php';
		$md = new memberModel;
		$data = $md->getAllMembers();*/
		$this->render('memberAnalytics',null,'MEMBER ANALYTICS','admin');
	}
}