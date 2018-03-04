<?php
require 'BaseController.php';

class AuthController extends BaseController {
	public function dangky($name, $email, $password) {
		if ($name != NULL || $email != NULL || $password != NULL) {
			$modelUser = new User();
			$result = $modelUser->dangky($name, $email, $password);
			
			if ($result) {
				$_SESSION['success'] = 'Đăng ký thành công';
				if (isset($_SESSION['error'])) {
					unset($_SESSION['error']);
				}
				header('Location: index.php?type=dangnhap');
			}
			else {
				$_SESSION['error'] = 'Đăng ký không thành công';
				header('location: index.php?type=dangky');
			}
		}
		else {
			$_SESSION['error'] = 'Đăng ký không thành công';
			header('location: index.php?type=dangky');
		}
		
	}

	public function dangnhap($email, $password) {
		$modelUser = new User();
		$user = $modelUser->dangnhap($email, $password);
		print_r($user);
		if ($user) {
			$_SESSION['user_id'] = $user->id;
			if (isset($_SESSION['error'])) {
				unset($_SESSION['error']);
			}
			header('Location: index.php');
		}
		else {
			$_SESSION['error'] = 'Sai thông tin tài khoản hoặc mật khẩu';
			header('location: index.php?type=dangnhap');
		}
	}
}

?>