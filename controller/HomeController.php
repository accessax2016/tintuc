<?php
require 'BaseController.php';
require 'model/Slide.php'; 
require 'model/TheLoai.php';
require 'model/LoaiTin.php';
require 'model/TinTuc.php';

class HomeController extends BaseController {
	public function getTheLoai() {
		$modelTheLoai = new TheLoai();
		return $modelTheLoai->getTheLoai();
	}

	public function getLoaiTinTheoTheLoai($idTheLoai) {
		$modelLoaiTin = new LoaiTin();
		return $modelLoaiTin->getLoaiTinTheoTheLoai($idTheLoai);
	}

	public function getSlide() {
		$modelSlide = new Slide();
		return  $modelSlide->getSlide();
	}

	public function getMotTinTucTheoTheLoai($idTheLoai) {
		$modelTinTuc = new TinTuc();
		return $modelTinTuc->getMotTinTucTheoTheLoai($idTheLoai);
	}
}

?>