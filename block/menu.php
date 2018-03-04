<ul class="list-group" id="menu">
    <li href="#" class="list-group-item menu1 active">
       Menu
   </li>
   <?php
   $theloais = $controller->getTheLoai();
   
   foreach ($theloais as $tl) {
    ?>
    <li href="#" class="list-group-item menu1">
        <?=$tl->Ten?>
    </li>
    <?php
    $loaitins = $controller->getLoaiTinTheoTheLoai($tl->id);
    if (count($loaitins) > 0) {
        ?>
        <ul>
            <?php
            foreach($loaitins as $lt) {
                ?>
                <li class="list-group-item">
                    <a href="index.php?type=loaitin&id=<?=$lt->id?>"><?=$lt->Ten?></a>
                </li>
                <?php
            }
            ?>
        </ul>
        <?php
    }
}                   
?>
</ul>