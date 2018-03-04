<!-- Page Content -->
    <div class="container">

    	<!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        $slide = $controller->getSlide(); 

                        for ($i=0; $i < count($slide); $i++) { 
                            if ($i == 0) {
                                ?>
                                <div class="item active">
                                    <img class="slide-image" src="public/image/slide/<?=$slide[$i]->Hinh?>" alt="">
                                </div>
                                <?php
                            }
                            else {
                                ?>
                                <div class="item">
                                    <img class="slide-image" src="public/image/slide/<?=$slide[$i]->Hinh?>" alt="">
                                </div>
                                <?php
                            }
                        }

                        ?>
                        
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
            <div class="col-md-3 ">
                <?php
                require 'block/menu.php';
                ?>
            </div>

            <div class="col-md-9">
	            <div class="panel panel-default">
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
	            	</div>

	            	<div class="panel-body">
                        <?php
                        foreach ($theloais as $tl) {
                            ?>
                            <!-- item -->
                            <div class="row-item row">
                                <h3>
                                    <a href="#"><?=$tl->Ten?></a> |
                            
                            <?php
                            $loaitin = $controller->getLoaiTinTheoTheLoai($tl->id);
                            if (count($loaitin) > 0) {
                                foreach($loaitin as $lt) {
                                    ?>
                                    <small><a href="index.php?type=loaitin&id=<?=$lt->id?>"><i><?=$lt->Ten?></i></a>/</small>
                                    <?php
                                }
                            }
                            ?>
                                </h3>
                                <?php
                                $tintuc = $controller->getMotTinTucTheoTheLoai($tl->id);
                                // print_r($tintuc);
                                foreach($tintuc as $tt) {
                                    ?>
                                    <div class="col-md-12 border-right">
                                        <div class="col-md-3">
                                            <a href="index.php?type=tintuc&id=<?=$tt->id?>">
                                                <img class="img-responsive" src="public/image/tintuc/<?=$tt->Hinh?>" alt="<?=$tt->TieuDeKhongDau?>">
                                            </a>
                                        </div>

                                        <div class="col-md-9">
                                            <h3><?=$tt->TieuDe?></h3>
                                            <p><?=$tt->TomTat?></p>
                                            <a class="btn btn-primary" href="index.php?type=tintuc&id=<?=$tt->id?>">Chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                

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
    <!-- end Page Content -->