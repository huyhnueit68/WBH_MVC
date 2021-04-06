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
                        <span class="btn btn-primary btn-sm glyphicon glyphicon-trash" id="delBtn"></span>
                        <span class="btn btn-success btn-sm" id="shippedBtn">Đã giao</span>
                        <span class="btn btn-warning btn-sm" id="unshippedBtn">Chưa giao</span>
                        <span class="btn btn-danger btn-sm" id="cancelBtn">Hủy</span><br>
                        <i style="color: red" id="error"></i>
                    </div>
                    <div class="container" style="width: 100%; margin-bottom: 20px; display: none" id="editOrderArea">
                        <form action="" method="POST" role="form">
                            <legend>Thay đổi giao dịch</legend>
                            <div class="form-group">
                                <label for="">Tên khách hàng</label>
                                <input type="text" class="form-control" id="orderNameCustomer">
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
                                <label for="">Địa chỉ cụ thể</label>
                                <input type="text" class="form-control" id="orderAddress">
                            </div>
                            <div class="form-group">
                                <label for="">SDT</label>
                                <input type="number" class="form-control" id="orderSdt">
                            </div>
                            <div class="form-group">
                                <label for="">Ngày</label>
                                <input type="date" class="form-control" id="orderDate">
                            </div>
                            <span class="btn btn-success" id="submitOrder">Xong</span>
                            <span class="btn btn-default" id="cancelEditBtn">Hủy</span>
                        </form>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr id="tbheader">
                            <th><input type="checkbox" id="check-all-gd"></th>
                            <th></th>
                            <th>STT</th>
                            <th>Tình trạng</th>
                            <th>Tên KH</th>
                            <th>Thành phố</th>
                            <th>DC cụ thể</th>
                            <th>SDT</th>
                            <th>Ngày</th>
                            <th>Mã sp</th>
                            <th>Tên sp</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  for($i = 0; $i < count($data); $i++){
                            $rsp = count($data[$i]['sp']) ?>
                            <tr>
                                <td><input type="checkbox" class="cbgd" value="<?php echo $data[$i]['magd'] ?>"></td>
                                <td><span class="glyphicon glyphicon-pencil btn btn-info editBtn" data-id="<?php echo $data[$i]['magd'] ?>"></span></td>
                                <td><?php echo $i+1 ?></td>
                                <td>
                                    <?php if($data[$i]['tinhtrang'] == 1){
                                        echo "<span class='label label-success'>Đã giao</span>";
                                    } elseif($data[$i]['tinhtrang'] == 0) {
                                        echo "<span class='label label-warning'>Chưa giao</span>";
                                    } else {
                                        echo "<span class='label label-danger'>Hủy</span>";
                                    } ?>

                                </td>
                                <td><?php echo $data[$i]['user_name'] ?></td>
                                <td><?php echo $data[$i]['user_dst'] ?></td>
                                <td><?php echo $data[$i]['user_addr'] ?></td>
                                <td><?php echo $data[$i]['user_phone'] ?></td>
                                <td><?php echo $data[$i]['date'] ?></td>
                                <td>
                                    <?php
                                    for($j=0;$j<count($data[$i]['sp']);$j++){
                                        echo $data[$i]['sp'][$j]['masp']."<br>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    for($j=0;$j<count($data[$i]['sp']);$j++){
                                        echo $data[$i]['sp'][$j]['tensp']."<br>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    for($j=0;$j<count($data[$i]['sp']);$j++){
                                        echo $data[$i]['sp'][$j]['dongia']."<br>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    for($j=0;$j<count($data[$i]['sp']);$j++){
                                        echo $data[$i]['sp'][$j]['soluong']."<br>";
                                    }
                                    ?>
                                </td>
                                <td><?php echo number_format($data[$i]['tongtien'], 0, ',', ' ') ?> &#8363;</td>
                            </tr>
                        <?php } ?>
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
    $('#gdtab').addClass('active');
    $(document).ready(function(){
        $('#example1 tr').not($('#tbheader')).click(function(event){
            if (event.target.type !== 'checkbox'){
                $(':checkbox', this).trigger('click');
            }
        })
        $('#example1').addClass('active');
        $('#check-all-gd').click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $('#shippedBtn').click(function(){
            action('shipped');
        });
        $('#unshippedBtn').click(function(){
            action('unshipped');
        });
        $('#cancelBtn').click(function(){
            action('cancel');
        });
        $('#delBtn').click(function(){
            action('del');
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
    function action(action, data = null){
        var selected = [];
        $('.cbgd').each(function(){
            if($(this).is(":checked")){
                selected.push($(this).val());
            }
        })
        if(selected == ''){
            alert("Bạn chưa chọn giao dịch muốn đổi trạng thái!");
            return ;
        }
        if (action == 'edit') {
            selected = data;
        }
        $.ajax({
            url: 'order/action',
            type: 'GET',
            dataType: 'text',
            data: {
                selected, action,
            },
            success: function(result){
                if(result == "success"){
                    location.reload();
                } else {
                    $('#error').html(result);
                }
            }
        })
    }
    $('#cancelEditBtn').on('click',function(){
        $('#example1').toggle();
        $('#editOrderArea').toggle(300);
    })
    /*Edit order*/
    $('.editBtn').click(function(){
        $('#submitOrder').attr('data-id',$(this).data('id'));
        $('#orderNameCustomer').val(($(this).closest('tr').children('td:nth-child(5)').text()).trim());
        $('#thanhPho').val($(this).closest('tr').children('td:nth-child(6)').text().trim());
        $('#orderAddress').val($(this).closest('tr').children('td:nth-child(7)').text().trim());
        $('#orderSdt').val($(this).closest('tr').children('td:nth-child(8)').text().trim());
        var dateTime = $(this).closest('tr').children('td:nth-child(9)').text().trim();
        $('#orderDate').val(dateTime.split(' ')[0]);
        $('#editOrderArea').toggle();
        $('#example1').toggle();
    })
    $('#submitOrder').on('click',function(){
        var id = $(this).data('id');
        var data = {
            orderId: id,
            orderNameCustomer: $('#orderNameCustomer').val(),
            thanhPho: $('#thanhPho').val(),
            orderAddress: $('#orderAddress').val(),
            orderSdt: $('#orderSdt').val(),
            orderDate: $('#orderDate').val()
        };
        action('edit',data);
    })
    function getOrderById(magd){
        $.ajax({
            url: 'order/gerOrderById',
            type: 'GET',
            dataType: 'text',
            data: {
                magd
            },
            success: function(result){
                /*data = result;*/
                $('#editName').val(result);
            }
        })
    }
</script>