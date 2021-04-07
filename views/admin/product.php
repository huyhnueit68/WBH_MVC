<section class="content-header">
  <h1>
    <?php echo $title ?>
    <small>Version 2.0</small>
  </h1>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="container" style="margin: 10px 0;">
            <span class="btn btn-primary glyphicon glyphicon-plus btn-sm" id="addNewProduct"></span>
            <span class="btn btn-primary glyphicon glyphicon-trash btn-sm" id="delProduct"></span>
          </div>
            <i id="addError" style="color: red"></i>
            <div class="container" id="addProductArea" style="width: 100%; display: none; padding-bottom: 10px;">
            <form action="" method="POST" role="form">
                <legend>Thêm sản phẩm</legend>
                <i id="addError" style="color: red"></i>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="productName">
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" class="form-control" id="productPrice">
                </div>
                <div class="form-group">
                    <label for="">Bảo hành(tháng)</label>
                    <input type="number" class="form-control" id="productBH">
                </div>
                <div class="form-group">
                    <label for="">Trọng lượng</label>
                    <input type="number" class="form-control" id="productWeight">
                </div>
                <div class="form-group">
                    <label for="">Chất liệu</label>
                    <input type="text" class="form-control" id="productCL">
                </div>
                <div class="form-group">
                    <label for="">Chống nước</label>
                    <select class="form-control" name="productCN" id="productCN">
                        <option value="1">Có
                        <option value="0">Không
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Năng lượng</label>
                    <input type="text" class="form-control" id="productNL">
                </div>
                <div class="form-group">
                    <label for="">Loại bảo hành</label>
                    <input type="text" class="form-control" id="productLBH">
                </div>
                <div class="form-group">
                    <label for="">Kích thước</label>
                    <input type="text" class="form-control" id="productSize">
                </div>
                <div class="form-group">
                    <label for="">Màu</label>
                    <input type="text" class="form-control" id="productColor">
                </div>
                <div class="form-group">
                    <label for="">Dành cho</label>
                    <input type="text" class="form-control" id="productDC">
                </div>
                <div class="form-group">
                    <label for="">Phụ kiện</label>
                    <input type="text" class="form-control" id="productPK">
                </div>
                <div class="form-group">
                    <label for="">Khuyến mãi (%)</label>
                    <input type="number" class="form-control" id="productKM">
                </div>
                <div class="form-group">
                    <label for="">Tình trạng</label>
                    <select class="form-control" name="productTT" id="productTT">
                        <option value="new">Mới
                        <option value="old">Cũ
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mã danh mục</label>
                    <input type="number" class="form-control" id="productDM">
                </div>
                <div class="form-group">
                    <label for="">Đường dẫn ảnh chính</label>
                    <input type="text" class="form-control" id="productLink">
                </div>
                <div class="form-group">
                    <label for="">Lượt mua</label>
                    <input type="number" class="form-control" id="productBuy" value="0" disabled>
                </div>
                <div class="form-group">
                    <label for="">Lượt xem</label>
                    <input type="number" class="form-control" id="productView" value="0" disabled>
                </div>
                <div class="form-group">
                    <label for="">Ngày Nhập</label>
                    <input type="date" class="form-control" id="productDate">
                </div>
                <span class="btn btn-success" id="addProductBtn">Thêm</span>
                <span class="btn btn-default" id="cancelAddBtn">Hủy</span>
            </form>
        </div>
        <div class="container" id="editProductArea" style="width: 100%; display: none; padding-bottom: 10px;">
            <form action="" method="POST" role="form">
                <legend>Sửa sản phẩm</legend>
                <i id="addError" style="color: red"></i>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="productName2">
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" class="form-control" id="productPrice2">
                </div>
                <div class="form-group">
                    <label for="">Bảo hành(tháng)</label>
                    <input type="number" class="form-control" id="productBH2">
                </div>
                <div class="form-group">
                    <label for="">Trọng lượng(g)</label>
                    <input type="number" class="form-control" id="productWeight2">
                </div>
                <div class="form-group">
                    <label for="">Chất liệu</label>
                    <input type="text" class="form-control" id="productCL2">
                </div>
                <div class="form-group">
                    <label for="">Chống nước</label>
                    <select class="form-control" name="productCN" id="productCN2">
                        <option value="1">Có
                        <option value="0">Không
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Năng lượng</label>
                    <input type="text" class="form-control" id="productNL2">
                </div>
                <div class="form-group">
                    <label for="">Loại bảo hành</label>
                    <input type="text" class="form-control" id="productLBH2">
                </div>
                <div class="form-group">
                    <label for="">Kích thước</label>
                    <input type="text" class="form-control" id="productSize2">
                </div>
                <div class="form-group">
                    <label for="">Màu</label>
                    <input type="text" class="form-control" id="productColor2">
                </div>
                <div class="form-group">
                    <label for="">Dành cho</label>
                    <input type="text" class="form-control" id="productDC2">

                </div>
                <div class="form-group">
                    <label for="">Phụ kiện</label>
                    <input type="text" class="form-control" id="productPK2">
                </div>
                <div class="form-group">
                    <label for="">Khuyến mãi (%)</label>
                    <input type="number" class="form-control" id="productKM2">
                </div>
                <div class="form-group">
                    <label for="">Tình trạng</label>
                    <select class="form-control" name="productTT" id="productTT2">
                        <option value="new">Mới
                        <option value="old">Cũ
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mã danh mục</label>
                    <input type="number" class="form-control" id="productDM2">
                </div>
                <div class="form-group">
                    <label for="">Đường dẫn ảnh chính</label>
                    <input type="text" class="form-control" id="productLink2">
                </div>
                <div class="form-group">
                    <label for="">Lượt mua</label>
                    <input type="number" class="form-control" id="productBuy2" value="0" disabled>
                </div>
                <div class="form-group">
                    <label for="">Lượt xem</label>
                    <input type="number" class="form-control" id="productView2" value="0" disabled>
                </div>
                <div class="form-group">
                    <label for="">Ngày Nhập</label>
                    <input type="date" class="form-control" id="productDate2">
                </div>
                <span class="btn btn-success" id="editProductBtn">Sửa</span>
                <span class="btn btn-default" id="cancelEditBtn">Hủy</span>
            </form>
        </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr id="tbheader">
                <th><input type="checkbox" id="check-all-gd"></th>
                <th>STT</th>
                <th>Mã sp</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Bảo hành</th>
                <th>Lượt mua</th>
                <th>Lượt xem</th>
                <th>Ngày nhập</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                for ($i=0; $i < count($data); $i++) { ?>
                  <tr>
                    <td><input type="checkbox" class="cbsp" value="<?php echo $data[$i]['masp'] ?>"></td>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $data[$i]['masp'] ?></td>
                    <td><?php echo $data[$i]['tensp'] ?></td>
                    <td><img style="width: 50px" src="<?php echo $data[$i]['anhchinh'] ?>"></td>
                    <td><?php echo $data[$i]['gia'] ?></td>
                    <td><?php echo $data[$i]['baohanh'] ?> tháng</td>
                    <td><?php echo $data[$i]['luotmua'] ?></td>
                    <td><?php echo $data[$i]['luotxem'] ?></td>
                    <td><?php echo $data[$i]['ngay_nhap'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['trongluong'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['mau'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['chatlieu'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['chongnuoc'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['nangluong'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['loaibh'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['kichthuoc'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['danhcho'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['phukien'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['khuyenmai'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['anhchinh'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['tinhtrang'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['madm'] ?></td>
                    <td class="text-center">
                      <span class="btn btn-primary btn-sm editProduct" data-id="<?php echo $data[$i]['masp']?>">Chỉnh sửa</span>
                      <span class="btn btn-danger btn-sm delOnlyProduct" data-id="<?php echo $data[$i]['masp']?>">Xóa</span>
                    </td>
                  </tr>
                <?php }
               ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<!-- jQuery 3 -->
<script src="views/admin/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="views/admin/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="views/admin/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="views/admin/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="views/admin/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="views/admin/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="views/admin/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/admin/AdminLTE/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $('#sptab').addClass('active');
  $(document).ready(function(){
      $('#example1 tr').not($('#tbheader')).click(function(event){
        if (event.target.type !== 'checkbox') {
          $(':checkbox', this).trigger('click');
        }
      })
      $('#example1').addClass('active');
      $('#check-all-gd').click(function() {
       $('input:checkbox').not(this).prop('checked', this.checked);
     });
    })
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

  $('.editProduct').on('click',function(){
      $('#editProductBtn').attr('data-id',$(this).data('id'));
      $('#example1').toggle();
      $('#editProductArea').toggle(300);
      $('#productName2').val($(this).closest('tr').children('td:nth-child(4)').text().trim());
      $('#productPrice2').val($(this).closest('tr').children('td:nth-child(6)').text().trim().replace(/\s/g, ''));
      $('#productBH2').val($(this).closest('tr').children('td:nth-child(7)').text().replace(" tháng", "").trim());
      $('#productWeight2').val($(this).closest('tr').children('td:nth-child(11)').text().trim());
      $('#productCL2').val($(this).closest('tr').children('td:nth-child(13)').text().trim());
      $('#productCN2').val($(this).closest('tr').children('td:nth-child(14)').text().trim());
      $('#productNL2').val($(this).closest('tr').children('td:nth-child(15)').text().trim());
      $('#productLBH2').val($(this).closest('tr').children('td:nth-child(16)').text().trim());
      $('#productSize2').val($(this).closest('tr').children('td:nth-child(17)').text().trim());
      $('#productDC2').val($(this).closest('tr').children('td:nth-child(18)').text().trim());
      $('#productColor2').val($(this).closest('tr').children('td:nth-child(12)').text().trim());
      $('#productPK2').val($(this).closest('tr').children('td:nth-child(19)').text().trim());
      $('#productKM2').val($(this).closest('tr').children('td:nth-child(20)').text().trim());
      $('#productTT2').val($(this).closest('tr').children('td:nth-child(22)').text().trim());
      $('#productDM2').val($(this).closest('tr').children('td:nth-child(23)').text().trim());
      $('#productLink2').val($(this).closest('tr').children('td:nth-child(21)').text().trim());
      $('#productBuy2').val($(this).closest('tr').children('td:nth-child(8)').text().trim());
      $('#productView2').val($(this).closest('tr').children('td:nth-child(9)').text().trim());
      var dateTime = $(this).closest('tr').children('td:nth-child(10)').text().trim();
      $('#productDate2').val(dateTime.split(' ')[0]);
  })

  $('#editProductBtn').on('click', function () {
      var productId = $(this).data('id');
      action('editProduct', productId);
  })

  $('#cancelEditBtn').on('click',function(){
      $('#example1').toggle();
      $('#editProductArea').toggle(300);
  })
  $('#cancelAddBtn').on('click',function(){
      $('#addProductArea').toggle();
      $('#example1').toggle(300);
  })
  $('#addNewProduct').on('click',function(){
      $('#addProductArea').toggle();
      $('#example1').toggle(300);
  })
  $('#addProductBtn').on('click',function(){
      action('addNewProduct');
  })

  $('#delProduct').on('click',function(){
      action('delProduct');
  })

  $('.delOnlyProduct').on('click',function(){
      var cf = confirm('Bạn chắc chứ?');
      if(cf){
          var id = $(this).data('id');
          action('delOnlyProduct', id);
      }
  })


  function action(name, id = null) {
      if (name == "addNewProduct") {
          var data = {
              productName: $('#productName').val(),
              productPrice: $('#productPrice').val(),
              productBH: $('#productBH').val(),
              productWeight: $('#productWeight').val(),
              productCL: $('#productCL').val(),
              productCN: $('#productCN').val(),
              productNL: $('#productNL').val(),
              productLBH: $('#productLBH').val(),
              productSize: $('#productSize').val(),
              productColor: $('#productColor').val(),
              productDC: $('#productDC').val(),
              productPK: $('#productPK').val(),
              productKM: $('#productKM').val(),
              productTT: $('#productTT').val(),
              productDM: $('#productDM').val(),
              productLink: $('#productLink').val(),
              productBuy: '0',
              productView: '0',
              productDate: $('#productDate').val()
          };
      } else {
          if (name == "editProduct") {
              var data = {
                  productId: id,
                  productName: $('#productName2').val(),
                  productPrice: $('#productPrice2').val(),
                  productBH: $('#productBH2').val(),
                  productWeight: $('#productWeight2').val(),
                  productCL: $('#productCL2').val(),
                  productCN: $('#productCN2').val(),
                  productNL: $('#productNL2').val(),
                  productLBH: $('#productLBH2').val(),
                  productSize: $('#productSize2').val(),
                  productColor: $('#productColor2').val(),
                  productDC: $('#productDC2').val(),
                  productPK: $('#productPK2').val(),
                  productKM: $('#productKM2').val(),
                  productTT: $('#productTT2').val(),
                  productDM: $('#productDM2').val(),
                  productLink: $('#productLink2').val(),
                  productBuy: $('#productBuy2').val(),
                  productView: $('#productView2').val(),
                  productDate: $('#productDate2').val()
              };
          } else {
              if (name == "delProduct") {
                  var selected = [];
                  $('.cbsp').each(function(){
                      if($(this).is(":checked")){
                          selected.push($(this).val());
                      }
                  })
                  data = selected;
                  if (selected.length == 0) {
                      alert("Vui lòng chọn sản phẩm cần xóa!");
                      return;
                  }
              } else {
                  if (name == "delOnlyProduct") {
                      data = id;
                  } else {
                      alert("Error!");
                      return;
                  }
              }
          }
      }

      var flag = true;
      for (const [key, value] of Object.entries(data)) {
          if (value == ""){
              flag = false;
          }
      }
      if (!flag){
          alert("Xin mời nhập đầy đủ thông tin!");
      } else {
          $.ajax({
              url: 'product/action',
              type: 'GET',
              dataType: 'text',
              data: {name, data},
              success: function(result){
                  if(result == 'Successful'){
                      alert("Successful!");
                      location.reload();
                  } else {
                      $('#addError').html(result);
                  }
              }
          })
      }
  }
</script>