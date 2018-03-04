<?php 
require 'BaseController.php';
require 'model/TheLoai.php';
require 'model/LoaiTin.php';
require 'model/TinTuc.php';
require 'model/pager.php';

class SearchController extends BaseController {
	public function getTheLoai() {
		$modelTheLoai = new TheLoai();
		return $modelTheLoai->getTheLoai();
	}

	public function getLoaiTinTheoTheLoai($idTheLoai) {
		$modelLoaiTin = new LoaiTin();
		return $modelLoaiTin->getLoaiTinTheoTheLoai($idTheLoai);
	}
	
	public function timkiem($keyword, $page) {
		$modelTinTuc = new TinTuc();
		$pagination = new pagination(count($modelTinTuc->timkiem($keyword)), $page);
		$paginationHTML = $pagination->showPagination();

		$limit = $pagination->get_nItemOnPage();
		$pos = ($page - 1)*$limit;
		$tintucs = $modelTinTuc->timkiem($keyword, $pos, $limit);

		return array('tintucs' => $tintucs, 'pagination' => $paginationHTML);return $result;
	}
}

?>