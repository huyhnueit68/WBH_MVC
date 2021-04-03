<div class="container-fluid form" style="padding: 20px">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-6">
			<legend>Thông tin giao hàng</legend>
			<i>Giao hàng tận nhà chỉ áp dụng ở TP HN</i>
            </br></br>
            <p><i id="err" style="color: red"></i></p>
            <div class="form-group">
				<label for="">Tên: </label>
				<input type="text" class="form-control" id="ten" name="ten" value="">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại: </label>
				<input type="number" class="form-control" name="sodt" id="order_tel" value="">
			</div>
			<div class="form-group">
				<label for="">Thành phố: </label>
				<select class="form-control" name="thanhPho" id="thanhPho">
                    <option value="An Giang">An Giang
                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                    <option value="Bắc Giang">Bắc Giang
                    <option value="Bắc Kạn">Bắc Kạn
                    <option value="Bạc Liêu">Bạc Liêu
                    <option value="Bắc Ninh">Bắc Ninh
                    <option value="Bến Tre">Bến Tre
                    <option value="Bình Định">Bình Định
                    <option value="Bình Dương">Bình Dương
                    <option value="Bình Phước">Bình Phước
                    <option value="Bình Thuận">Bình Thuận
                    <option value="Bình Thuận">Bình Thuận
                    <option value="Cà Mau">Cà Mau
                    <option value="Cao Bằng">Cao Bằng
                    <option value="Đắk Lắk">Đắk Lắk
                    <option value="Đắk Nông">Đắk Nông
                    <option value="Điện Biên">Điện Biên
                    <option value="Đồng Nai">Đồng Nai
                    <option value="Đồng Tháp">Đồng Tháp
                    <option value="Đồng Tháp">Đồng Tháp
                    <option value="Gia Lai">Gia Lai
                    <option value="Hà Giang">Hà Giang
                    <option value="Hà Nam">Hà Nam
                    <option value="Hà Tĩnh">Hà Tĩnh
                    <option value="Hải Dương">Hải Dương
                    <option value="Hậu Giang">Hậu Giang
                    <option value="Hòa Bình">Hòa Bình
                    <option value="Hưng Yên">Hưng Yên
                    <option value="Khánh Hòa">Khánh Hòa
                    <option value="Kiên Giang">Kiên Giang
                    <option value="Kon Tum">Kon Tum
                    <option value="Lai Châu">Lai Châu
                    <option value="Lâm Đồng">Lâm Đồng
                    <option value="Lạng Sơn">Lạng Sơn
                    <option value="Lào Cai">Lào Cai
                    <option value="Long An">Long An
                    <option value="Nam Định">Nam Định
                    <option value="Nghệ An">Nghệ An
                    <option value="Ninh Bình">Ninh Bình
                    <option value="Ninh Thuận">Ninh Thuận
                    <option value="Phú Thọ">Phú Thọ
                    <option value="Quảng Bình">Quảng Bình
                    <option value="Quảng Bình">Quảng Bình
                    <option value="Quảng Ngãi">Quảng Ngãi
                    <option value="Quảng Ninh">Quảng Ninh
                    <option value="Quảng Trị">Quảng Trị
                    <option value="Sóc Trăng">Sóc Trăng
                    <option value="Sơn La">Sơn La
                    <option value="Tây Ninh">Tây Ninh
                    <option value="Thái Bình">Thái Bình
                    <option value="Thái Nguyên">Thái Nguyên
                    <option value="Thanh Hóa">Thanh Hóa
                    <option value="Thừa Thiên Huế">Thừa Thiên Huế
                    <option value="Tiền Giang">Tiền Giang
                    <option value="Trà Vinh">Trà Vinh
                    <option value="Tuyên Quang">Tuyên Quang
                    <option value="Vĩnh Long">Vĩnh Long
                    <option value="Vĩnh Phúc">Vĩnh Phúc
                    <option value="Yên Bái">Yên Bái
                    <option value="Phú Yên">Phú Yên
                    <option value="Tp.Cần Thơ">Tp.Cần Thơ
                    <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                    <option value="Tp.Hải Phòng">Tp.Hải Phòng
                    <option value="Tp.Hà Nội">Tp.Hà Nội
                    <option value="TP  HCM">TP HCM
				</select>
			</div>
			<div class="form-group">
				<label for="">Địa chỉ cụ thể: </label>
				<input type="text" class="form-control" name="dc" id="addr"  value="">
			</div>
			
		</div>
		<div class="col-sm-4">
			<h4><?php echo $title; ?></h4>
			<hr style="border: 1px solid #337ab7;">
			<form action="client/order" method="GET">
				<table class="table" style="font-size: 14px; background-color: #eaeaea">
					<thead>
						<tr>
							<th>Ảnh</th>
							<th>Tên sản phẩm</th>
							<th>Đơn giá</th>
							<th>Số lượng</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="<?php echo $data['anhchinh']; ?>" class='sanpham' data-masp='<?php echo $data['masp'] ?>' style="width: 80px"></td>
							<td><?php echo $data['tensp'] ?></td>
							<td class="prices" data-price='<?php echo $data['gia'] ?>'><?php echo $data['gia'] ?></td>
							<td><input type="number" class="num" data-type='buynow' name="num[]"  value="1" class="form-control" style="width: 80px;" min='1'></td>
						</tr>
						<tr>
							<td colspan="3" style="text-align: right;">
								<h3><b>Tổng tiền: </b><span id='totalPrice' style="color: red; font-size: 28px;"></span> VND</h3>
							</td>
							<td>
								<a id='orderCompleteBtn' class="btn btn-primary btn-lg pull-right">Xác nhận</a><br><br>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
<script>
	var price = 0;
	$('.prices').each(function(){
		price += parseInt($(this).data('price').replace(/\s/g,''));
	})
	price = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
	$('#totalPrice').text(price);
	countPrice();
</script>