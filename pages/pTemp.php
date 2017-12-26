<div class="content_LoaiSanPham">
    <h3>Sản phẩm bán chạy</h3>
</div>
<?php 
    $rowPerPage = 6;// Number rows on a page
    $curPage = 1; // present page
    
    if(isset($_GET['page'])) $curPage = $_GET['page']; // neu duong dan co truyen page thi dung tham so page duoc truyen
    $offset = ($curPage - 1)*$rowPerPage; //Tinh offset bat dau load
    //San pham ban chay
    $sql = "SELECT SanPham.TenSanPham, SanPham.MaSanPham, SanPham.HinhURL, SanPham.MoTa, SanPham.GiaSanPham
            FROM SanPham
            ORDER BY SanPham.SoLuongBan DESC
            LIMIT $offset,$rowPerPage";
    $qr = DataProvider::execQuery($sql);
    while($row = mysqli_fetch_assoc($qr))
    {
?>
<div class="content_NoiDungSanPham">
                <span><a href="#?idSP=<?php echo $row['MaSanPham'];?>"><img src="images/<?php echo $row['HinhURL'];?>" width="250px" height="280px" /></a></span><br/>
                <span><?php echo $row['TenSanPham'];?></span><br/>
                <span>Giá: <?php echo $row['GiaSanPham'];?> </span><br/>
                <span><b><a href="#?idSP=<?php echo $row['MaSanPham'];?>" style="color: blue;">Chi Tiết</a></b></span><br/>
</div>
<?php 
    }

    include("modules/mPhanTrang.php"); 
?>