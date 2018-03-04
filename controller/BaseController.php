<?php 
require 'model/User.php';

class BaseController {
	public function user($id) {
		$modelUser = new User();
		return $modelUser->getUser($id);
	}

	public function redirectSearch($keyword) {
		header('Location: index.php?type=timkiem&keyword='.$keyword)
;	}
}

?>