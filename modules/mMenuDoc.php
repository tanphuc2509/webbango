<div id="menu_Doc">
	<?php 
		$slHSX = "SELECT hangsanxuat.MaHangSanXuat, hangsanxuat.TenHangSanXuat
				  FROM hangsanxuat
				  WHERE HangSanXuat.BiXoa = FALSE";
		$qrHSX = DataProvider::execQuery($slHSX);
		while($rowHSX = mysqli_fetch_array($qrHSX))
		{?>	
			<div>
				<div class="menu_Doc_theloai"><?php echo $rowHSX["TenHangSanXuat"];?></div>
					<?php 
					$sqlLoaiSP = "SELECT loaisanpham.MaLoaiSanPham, loaisanpham.TenLoaiSanPham
								FROM loaisanpham
								WHERE loaisanpham.BiXoa = FALSE";
					$qrLSP = DataProvider::execQuery($sqlLoaiSP);
					while($rowLSP = mysqli_fetch_array($qrLSP))
					{?>
						<div class="loaitin">
							<a href="#"><?php echo $rowLSP["TenLoaiSanPham"];?></a>
						</div>
					<?php 	
					} 
					?>
			</div>
	<?php
		}
	?>
</div>
    	
        	
