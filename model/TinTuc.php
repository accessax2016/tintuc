<?php 

class TinTuc extends database {
	function getMotTinTucTheoTheLoai($idTheLoai) {
		$sql = "SELECT tintuc.* 
				FROM theloai, loaitin, tintuc
				WHERE theloai.id = loaitin.idTheLoai
				AND loaitin.id = tintuc.idLoaiTin
				AND theloai.id = $idTheLoai
				ORDER BY tintuc.id DESC
				LIMIT 1";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getTinTucTheoLoaiTin($idLoaiTin, $pos = -1, $limit = 0) {
		$sql = "SELECT * 
				FROM tintuc
				WHERE idLoaiTin = $idLoaiTin
				ORDER BY id DESC";
		if ($pos > -1 && $limit > 0) {
			$sql .= " LIMIT $pos, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getTinTucTheoId($idTinTuc) {
		$sql = "SELECT *
				FROM tintuc
				WHERE id = $idTinTuc";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	public function getTinTucLienQuan($idLoaiTin) {
		$sql = "SELECT tintuc.*
				FROM tintuc, loaitin
				WHERE tintuc.idLoaiTin = loaitin.id
				AND tintuc.idLoaiTin = $idLoaiTin
				ORDER BY tintuc.id DESC
				LIMIT 0, 5";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getTinTucNoiBat($idLoaiTin) {
		$sql = "SELECT tintuc.*
				FROM tintuc, loaitin
				WHERE tintuc.idLoaiTin = loaitin.id
				AND tintuc.idLoaiTin = $idLoaiTin
				AND tintuc.NoiBat = 1
				ORDER BY tintuc.id DESC
				LIMIT 0, 5";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function timkiem($keyword, $pos = -1, $limit = 0) {
		$sql = "SELECT *
				FROM tintuc
				WHERE TieuDe like '%$keyword%'
				OR TomTat like '%$keyword%'
				ORDER BY id DESC";
		if ($pos > -1 && $limit > 0) {
			$sql .= " LIMIT $pos, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}

?>
