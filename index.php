<?php
session_start();
require 'model/database.php';

if (isset($_GET['type'])) {
    $type = $_GET['type'];
}
else {
    $type = '';
}
switch ($type) {
    case 'loaitin':
        require 'controller/LoaiTinController.php';
        $controller = new LoaiTinController();
        break;
    case 'tintuc':
        require 'controller/TinTucController.php';
        $controller = new TinTucController();
        break;
    case 'dangky':
        require 'controller/AuthController.php';
        $controller = new AuthController();
        break;
    case 'dangnhap':
        require 'controller/AuthController.php';
        $controller = new AuthController();
        break;
    case 'timkiem':
        require 'controller/SearchController.php';
        $controller = new SearchController();
        break;
    
    default:
        require 'controller/HomeController.php';
        $controller = new HomeController();
        break;
}



// print_r($theloai);

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tin Tức</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.public/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php 
    require 'block/navbar.php';
    ?>

    <?php
    switch ($type) {
        case 'loaitin':
            require 'page/LoaiTinPage.php';
            break;
        case 'tintuc':
            require 'page/TinTucPage.php';
            break;
        case 'dangky':
            require 'page/DangKyPage.php';
            break;
        case 'dangnhap':
            require 'page/DangNhapPage.php';
            break;
        case 'timkiem':
            require 'page/TimKiemPage.php';
            break;
        
        default:
            require 'page/HomePage.php';
            break;
    }
    ?>

    <?php
    require 'block/footer.php';
    ?>
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>