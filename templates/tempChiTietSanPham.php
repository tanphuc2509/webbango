<div class="content_ChiTietSanPham">
    <div class="content_ChiTietSanPham_Hinh">
        <img src="images/<?php echo $row['HinhURL'];?>"/>
    </div>
    <div class="content_ChiTietSanPham_ThongTin">
        <h3 class="TenSanPham"><?php echo $row['TenSanPham'];?></h3>
        <p>Thương hiệu: <a href="#" class="NhaSanXuat" style="text-decoration:  none;
    color: #f51010"><?php echo $row['TenHangSanXuat']?></a><p>
        <p>Giá: <?php echo number_format($row['GiaSanPham']);?> đ </p>
        <p>Loại sản phẩm:<a href="#" class="LoaiSanPham"> <?php echo $row['TenLoaiSanPham'];?></a></p>
        <p>Số lượng: <?php if($row['SoLuongTon']==0) echo "Hết hàng";
                            else echo $row["SoLuongTon"]." Sản phẩm";?></p>
        <span>
            <form name="frmDatHang" method="POST" action="#" id="frmDatHang">
                Số lượng: <input type="text" name="soluong" size="5"  value="1">
                <input name="datmua" type="submit" value="Đưa Vào">
                <img src="images/giohang.png" width="20px"/>
            </form>
        </span>
        <hr>
        <p>
            Mô tả sản phẩm: <br/>
            <?php 
                echo $row['MoTa'];
            ?>
        </p>
    </div>
