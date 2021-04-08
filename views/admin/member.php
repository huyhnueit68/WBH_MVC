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
            <span class="btn btn-primary glyphicon glyphicon-plus btn-sm" id="addBtn"></span>
          </div>
            <i id="addError" style="color: red"></i>
            <div class="container" style="margin-bottom: 15px; display: none" id="addArea">
              <form action="" method="POST" role="form">
              <legend>Thêm thành viên</legend>
            
              <div class="form-group">
                <label for="">Tên</label>
                <input type="text" class="form-control" id="name" >
              </div>
              <div class="form-group">
                <label for="">Tên tài khoản</label>
                <input type="text" class="form-control" id="username" >
              </div>
              <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="password" >
              </div>
              <div class="form-group">
                <label for="">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="cpassword" >
              </div>
              <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="addr" >
              </div>
              <div class="form-group">
                <label for="">SDT</label>
                <input type="number" class="form-control" id="tel" >
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="email" >
              </div>
            
              <span class="btn btn-success" id="addMember">Thêm</span>
              <span class="btn btn-default" id="cancelBtn">Hủy</span>
            </form>
          </div>
            <div class="container" style="margin-bottom: 15px; display: none" id="editArea">
                <form action="" method="POST" role="form">
                    <legend>Sửa thành viên</legend>
                    <div class="form-group">
                        <label for="">Tên</label>
                        <input type="text" class="form-control" id="name2" >
                    </div>
                    <div class="form-group">
                        <label for="">Tên tài khoản</label>
                        <input type="text" class="form-control" id="username2" >
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" class="form-control" id="password2" >
                    </div>
                    <div class="form-group">
                        <label for="">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" id="cpassword2" >
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" class="form-control" id="addr2" >
                    </div>
                    <div class="form-group">
                        <label for="">SDT</label>
                        <input type="number" class="form-control" id="tel2" >
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" id="email2" >
                    </div>
                    <span class="btn btn-success" id="editMember">Sửa</span>
                    <span class="btn btn-default" id="cancelEditBtn">Hủy</span>
                </form>
            </div>
            <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Tên thành viên</th>
                <th>Tên tài khoản</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Ngày tham gia</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                for ($i=0; $i < count($data); $i++) { ?>
                  <tr>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $data[$i]['id'] ?></td>
                    <td><?php echo $data[$i]['ten'] ?></td>
                    <td><?php echo $data[$i]['tentaikhoan'] ?></td>
                    <td><?php echo $data[$i]['diachi'] ?></td>
                    <td><?php echo $data[$i]['sodt'] ?></td>
                    <td><?php echo $data[$i]['email'] ?></td>
                    <td><?php echo $data[$i]['date'] ?></td>
                    <td style="display: none"><?php echo $data[$i]['matkhau'] ?></td>
                    <td class="text-center">
                        <span class="btn btn-primary btn-sm editMemberBtn" data-id="<?php echo $data[$i]['id']?>">Chỉnh sửa</span>
                        <span class="btn btn-danger btn-sm delBtn" data-id="<?php echo $data[$i]['id'] ?>">Xóa</span>
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
  $('#tvtab').addClass('active');
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
</script>
<script>
  $('.delBtn').on('click',function(){
    var cf = confirm('Hãy cân nhắc kỹ! Bạn có chắc muốn xóa tài khoản này?');
    if(cf){
      action('del',$(this).data('id'));
    }
  })
  $('#addBtn').click(function(){
    $('#addArea').toggle(300);
    $('#example1').toggle();

  })
  $('#addMember').click(function(){
    action('addMember');
  })
  $('#cancelBtn').click(function(){
    $('#addArea').toggle(300);
    $('#example1').toggle();
  })
  $('#cancelEditBtn').click(function(){
    $('#editArea').toggle(300);
    $('#example1').toggle();
  })
  $('.editMemberBtn').on('click', function () {
      $('#editMember').attr('data-id',$(this).data('id'));

      $('#name2').val($(this).closest('tr').children('td:nth-child(3)').text().trim());
      $('#username2').val($(this).closest('tr').children('td:nth-child(4)').text().trim());
      $('#password2').val($(this).closest('tr').children('td:nth-child(9)').text().trim());
      $('#cpassword2').val($(this).closest('tr').children('td:nth-child(9)').text().trim());
      $('#addr2').val($(this).closest('tr').children('td:nth-child(5)').text().trim());
      $('#tel2').val($(this).closest('tr').children('td:nth-child(6)').text().trim());
      $('#email2').val($(this).closest('tr').children('td:nth-child(7)').text().trim());

      $('#editArea').toggle(300);
      $('#example1').toggle();
  })
  $('#editMember').on('click', function () {
      action('editMember', $(this).data('id'));
  })
  function action(name, id=null){
      var name2 = username = cpassword = password = addr = tel = email = '';
    if(name == 'addMember'){
      name2 = $('#name').val();
      username = $('#username').val();
      password = $('#password').val();
      cpassword = $('#cpassword').val();
      addr = $('#addr').val();
      tel = $('#tel').val();
      email = $('#email').val();
        if(username == '' || password == ''){
        alert('Không được để trống!');
        return;
      }
      if(password != cpassword){
        alert('Mật khẩu nhập lại không trùng khớp!');
        return;
      }
    } else {
        if (name == "editMember") {
            name2 = $('#name2').val();
            username = $('#username2').val();
            password = $('#password2').val();
            cpassword = $('#cpassword2').val();
            addr = $('#addr2').val();
            tel = $('#tel2').val();
            email = $('#email2').val();
            if(username == '' || password == ''){
                alert('Không được để trống!');
                return;
            }
            if(password != cpassword){
                alert('Mật khẩu nhập lại không trùng khớp!');
                return;
            }
        }
    }
      $.ajax({
      url: 'member/action',
      type: 'POST',
      dataType: 'text',
      data: {name, id, name2, username, password, addr, tel, email},
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
</script>