<?php 

class LoaiTin extends database {
	function getLoaiTinTheoTheLoai($idTheLoai) {
		$sql = "SELECT * 
				FROM loaitin
				WHERE idTheLoai = $idTheLoai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getLoaiTinTheoId($idLoaiTin) {
		$sql = "SELECT * 
				FROM loaitin
				WHERE id = $idLoaiTin";
		$this->setQuery($sql);
		return $this->loadRow();
	}
}

?>
