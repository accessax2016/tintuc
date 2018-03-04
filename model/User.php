<?php 

class User extends database {
	public function getUser($id) {
		$sql = "SELECT *
				FROM users
				WHERE id = $id";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	public function dangky($name, $email, $password) {
		$sql = "INSERT INTO users(name, email, password)
				VALUES (?, ?, ?)";
		$this->setQuery($sql);
		$result = $this->execute(array($name, $email, md5($password)));
		if ($result) {
			return $this->getLastId();
		}
		else {
			return false;
		}
	}

	public function dangnhap($email, $password) {
		$sql = "SELECT *
				FROM users
				WHERE email = '$email'
				AND password = '$password'";
		$this->setQuery($sql);
		return $this->loadRow();
	}
}

?>
