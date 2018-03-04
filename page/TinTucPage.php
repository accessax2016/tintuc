    <?php
    if (isset($_POST['binhluan'])) {
        if (isset($_SESSION['user_id'])) {
            $idUser = $_SESSION['user_id'];
            $idTinTuc = $_POST['idTinTuc'];
            $NoiDung = $_POST['noidung'];

            $comment = $controller->addComment($idUser, $idTinTuc, $NoiDung);
        }
    }
    ?>    
    <!-- Page Content --> 
    <div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->
                <?php
                if (isset($_GET['id'])) {
                    $idTinTuc = $_GET['id'];
                }
                else {
                    $idTinTuc = '';
                }
                
                $tintuc = $controller->getTinTucTheoId($idTinTuc);
                ?>
                <!-- Title -->
                <h1><?=$tintuc->TieuDe?></h1>

                <!-- Author -->
                <!-- <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p> -->

                <!-- Preview Image -->
                <img class="img-responsive" src="public/image/tintuc/<?=$tintuc->Hinh?>" alt="<?=$tintuc->TieuDeKhongDau?>">

                <!-- Date/Time -->
                <!-- <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p> -->
                <hr>

                <!-- Post Content -->
                <p class="lead"><?=$tintuc->TomTat?></p>
                <p><?=$tintuc->NoiDung?></p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form method="POST" action="" role="form">
                        <input type="text" name="idTinTuc" hidden="" value="<?=$tintuc->id?>">
                        <div class="form-group">
                            <textarea class="form-control" name="noidung" rows="3"></textarea>
                        </div>
                        <button type="submit" name="binhluan" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <?php
                $comments = $controller->getCommentTheoTinTuc($idTinTuc);
                ?>
                <?php
                foreach ($comments as $cmt) {
                    ?>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?=$cmt->name?>
                                <!-- <small>August 25, 2014 at 9:30 PM</small> -->
                            </h4>
                            <?=$cmt->NoiDung?>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">
                        
                        <?php
                        $tintuclienquans = $controller->getTinTucLienQuan($tintuc->idLoaiTin);
                        // print_r($tintuclienquans);
                        ?>
                        <?php
                        foreach($tintuclienquans as $ttlq) {
                            ?>
                            <!-- item -->
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-5">
                                    <a href="index.php?type=tintuc&id=<?=$ttlq->id?>">
                                        <img class="img-responsive" src="public/image/tintuc/<?=$ttlq->Hinh?>" alt="<?=$ttlq->TieuDeKhongDau?>">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="index.php?type=tintuc&id=<?=$ttlq->id?>"><b><?=$ttlq->TieuDe?></b></a>
                                </div>
                                <p><?=$ttlq->TomTat?></p>
                                <div class="break"></div>
                            </div>
                            <!-- end item -->
                            <?php
                        }
                        ?>
                    
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">

                        <?php
                        $tintucnoibats = $controller->getTinTucNoiBat($tintuc->idLoaiTin);
                        ?>
                        <?php
                        foreach($tintucnoibats as $ttnb) {
                            ?>
                            <!-- item -->
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-5">
                                    <a href="index.php?type=tintuc&id=<?=$ttnb->id?>">
                                        <img class="img-responsive" src="public/image/tintuc/<?=$ttnb->Hinh?>" alt="<?=$ttnb->TieuDeKhongDau?>">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="index.php?type=tintuc&id=<?=$ttnb->id?>"><b><?=$ttnb->TieuDe?></b></a>
                                </div>
                                <p><?=$ttnb->TomTat?></p>
                                <div class="break"></div>
                            </div>
                            <!-- end item -->
                            <?php
                        }
                        ?>
                        
                    </div>
                </div>
                
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content