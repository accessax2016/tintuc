<?php 

class Slide extends database {
	function getSlide() {
		$sql = "SELECT * FROM slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}

?>
