<div class="content_PhanTrang" align="center"><a href="#">
    <?php 
        //Dem so dong cua bang tinh
        $sql = "select count(*) from SanPham";
        $result = DataProvider::execQuery($sql);
        $row = mysqli_fetch_array($result);
        $number_of_row = $row['0'];

        //Tinh so luong trang
        $number_of_page = ceil($number_of_row / $rowPerPage);
        if($curPage > 1)
        {       
    ?>
        <a href="index.php?page=1&a=3&id=<?php echo $id;?>">Đầu</a> <a href="index.php?page=<?php echo ($curPage - 1)?>">Trước</a>
<?php 
    }
?>
    <?php 
        for($page = 1; $page <= $number_of_page; $page++)
        {
            //Khong xuat hien lien ket cho trang hien tai
            if($page == $curPage) 
                echo "<strong>".$page."</strong>";
            else
                echo "<a href='index.php?a=3&id=".'<?php echo $id;?>'."page="."$page"."'>".$page."</a>";
        }
    ?>
    <?php 
        if($curPage < $number_of_page)
        {
    ?>
    <a href="index.php?a=3&id=<?php echo $id?>&page=<?php echo $curPage + 1?>">sau</a> <a href="index.php?a=3&id=<?php echo $id?>&page=<?php echo $number_of_page?>">Cuối</a>
    <?php 
        }
    ?>
</div>