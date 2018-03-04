<?php 

class TheLoai extends database {
	function getTheLoai() {
		$sql = "SELECT * 
				FROM theloai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}

?>
