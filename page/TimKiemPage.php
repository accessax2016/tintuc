 <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <?php
                require 'block/menu.php';
                ?>
            </div>
            
            <?php
            if (isset($_GET['keyword'])) {
                $keyword = $_GET['keyword'];
            }
            else {
                $keyword = '';
            }

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            else {
                $page = 1;
            }

            $listTinTuc = $controller->timkiem($keyword, $page);
            $tintucs = $listTinTuc['tintucs'];
            ?>
            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Kết quả cho từ khóa <?=$keyword?></b></h4>
                    </div>
                    <?php
                    

                    foreach ($tintucs as $tt) {
                        ?>
                        <div class="row-item row">
                            <div class="col-md-3">
                                <a href="index.php?type=tintuc&id=<?=$tt->id?>">
                                    <br>
                                    <img width="200px" height="200px" class="img-responsive" src="public/image/tintuc/<?=$tt->Hinh?>" alt="<?=$tt->TieuDeKhongDau?>">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h3><?=$tt->TieuDe?></h3>
                                <p><?=$tt->TomTat?></p>
                                <a class="btn btn-primary" href="index.php?type=tintuc&id=<?=$tt->id?>">Chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                            <div class="break"></div>
                        </div>
                        <?php
                    }
                    ?>
                    

                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <?php
                            $pagination = $listTinTuc['pagination'];
                            echo $pagination;
                            ?>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
            </div> 

        </div>

    </div>
    <!-- end Page Content -->