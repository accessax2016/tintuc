<?php
require 'BaseController.php';
require 'model/TheLoai.php';
require 'model/LoaiTin.php';
require 'model/TinTuc.php';
require 'model/Comment.php';

class TinTucController extends BaseController {
	public function getTinTucTheoId($idTinTuc) {
		$modelTinTuc = new TinTuc();
		return $modelTinTuc->getTinTucTheoId($idTinTuc);
	}

	public function getCommentTheoTinTuc($idTinTuc) {
		$modelComment = new Comment();
		return $modelComment->getCommentTheoTinTuc($idTinTuc);
	}

	public function getTinTucLienQuan($idLoaiTin) {
		$modelTinTuc = new TinTuc();
		return $modelTinTuc->getTinTucLienQuan($idLoaiTin);
	}

	public function getTinTucNoiBat($idLoaiTin) {
		$modelTinTuc = new TinTuc();
		return $modelTinTuc->getTinTucNoiBat($idLoaiTin);
	}

	public function addComment($idUser, $idTinTuc, $NoiDung) {
		$modelComment = new Comment();
		$comment = $modelComment->addComment($idUser, $idTinTuc, $NoiDung);
		// print_r($comment);
		// die;
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}
}

?>