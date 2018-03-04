    <?php
    if (isset($_POST['dangxuat'])) {
        session_destroy();
        header('location: index.php');
    }
    ?>
    <?php
    if (isset($_POST['search'])) {
        $keyword = $_POST['keyword'];
        $controller->redirectSearch($keyword);
    }
    ?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Tin Tức</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="gioithieu.html">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="lienhe.html">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search" method="POST" action="">
			        <div class="form-group">
			          <input type="text" name="keyword" class="form-control" placeholder="Nhập nội dung tìm kiếm ...">
			        </div>
			        <button type="submit" name="search" class="btn btn-default">Tìm kiếm</button>
			    </form>

			    <ul class="nav navbar-nav pull-right">
                    <?php
                    if (!isset($_SESSION['user_id'])) {
                        ?>
                        <li>
                            <a href="index.php?type=dangky">Đăng ký</a>
                        </li>
                        <li>
                            <a href="index.php?type=dangnhap">Đăng nhập</a>
                        </li>
                        <?php
                    }
                    else {
                        $auth = $controller->user($_SESSION['user_id'])
                        ?>
                        <li>
                            <a>
                                <span class ="glyphicon glyphicon-user"></span>
                                <?=$auth->name?>
                            </a>
                        </li>

                        <li>
                            <form id="dangxuat" method="POST" action="">
                                <button type="submit" name="dangxuat" class="btn btn-link" style="margin-top: 8px; color: white; text-decoration: none;">Đăng xuất
                                </button>
                            </form>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
            </div>



            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>