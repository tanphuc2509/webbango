<div class="content_ChiTiet_SanPhamLienQuan">
    <img src="images/<?php echo $row['HinhURL']?>">
    <p><?php echo $row['TenSanPham'];?></p>
    <p><?php echo number_format($row['GiaSanPham']);?> đ</p>
    <a href="index.php?a=4&id=<?php echo $row['MaSanPham'];?>">Chi tiết sản phẩm</a>
</div>