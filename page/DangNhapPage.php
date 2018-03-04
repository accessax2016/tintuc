	<?php
	if (isset($_POST['dangnhap'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$user = $controller->dangnhap($email, md5($password));
		print_r($user);
	}
	?>
	<!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
    		<div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
				  	<div class="panel-heading">Đăng nhập</div>
				  	<div class="panel-body">
				  		<?php
				  		if (isset($_SESSION['success'])) {
				  			echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
				  		}
				  		?>
				  		<?php
				  		if (isset($_SESSION['error'])) {
				  			echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
				  		}
				  		?>
				    	<form method="POST" action="">
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" 
							  	>
							</div>
							<br>	
							<div>
				    			<label>Mật khẩu</label>
							  	<input type="password" class="form-control" name="password">
							</div>
							<br>
							<button type="submit" name="dangnhap" class="btn btn-success">Đăng nhập
							</button>
				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->