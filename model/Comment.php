<?php 

class Comment extends database {
	function getCommentTheoTinTuc($idTinTuc) {
		$sql = "SELECT comment.*, users.* 
				FROM comment, users
				WHERE comment.idUser = users.id 
				AND comment.idTinTuc = $idTinTuc";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function addComment($idUser, $idTinTuc, $NoiDung) {
		$sql = "INSERT INTO comment(idUser, idTinTuc, NoiDung)
				VALUES (?, ?, ?)";
				echo $sql;
		$this->setQuery($sql);
		return $this->execute(array($idUser, $idTinTuc, $NoiDung));
	}
}

?>
