<?php
require 'BaseController.php';
require 'model/TheLoai.php';
require 'model/LoaiTin.php';
require 'model/TinTuc.php';
require 'model/pager.php';

class LoaiTinController extends BaseController {
	public function getTheLoai() {
		$modelTheLoai = new TheLoai();
		return $modelTheLoai->getTheLoai();
	}

	public function getLoaiTinTheoTheLoai($idTheLoai) {
		$modelLoaiTin = new LoaiTin();
		return $modelLoaiTin->getLoaiTinTheoTheLoai($idTheLoai);
	}

	public function getLoaiTinTheoId($idLoaiTin) {
		$modelLoaiTin = new LoaiTin();
		return $modelLoaiTin->getLoaiTinTheoId($idLoaiTin);
	}

	public function getTinTucTheoLoaiTin($idLoaiTin, $page) {
		$modelTinTuc = new TinTuc();
		$pagination = new pagination(count($modelTinTuc->getTinTucTheoLoaiTin($idLoaiTin)), $page);
		$paginationHTML = $pagination->showPagination();

		$limit = $pagination->get_nItemOnPage();
		$pos = ($page - 1)*$limit;
		$tintucs = $modelTinTuc->getTinTucTheoLoaiTin($idLoaiTin, $pos, $limit);

		return array('tintucs' => $tintucs, 'pagination' => $paginationHTML);
	}
}

?>