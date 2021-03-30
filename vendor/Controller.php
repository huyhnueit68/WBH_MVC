<?php

/**
 * Class Controller
 */
class Controller
{
	protected $folder;

    /**
     * @param $file
     * @param array $data
     * @param null $title
     * @param null $admin
     */
	function render($file, $data = array(), $title = null, $admin = null){
		$file_path = "views/".$this->folder."/".$file.".php";
		if(file_exists($file_path)){

			ob_start();//start output buffering
			require_once($file_path);
			$content = ob_get_clean();// gui toan bo code len server va luu vao bien content
			if($admin == null){
				require_once('views/layouts/application.php');	
			} else {
				require_once('views/layouts/admin.php');
			}
			
		} else {
			echo "Can not find view";
			echo "<br>".$file_path;
		}
	}
}