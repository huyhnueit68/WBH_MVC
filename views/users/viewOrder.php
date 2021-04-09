<div class="container-fluid form" style="padding: 20px">
    <div class="row">
        <div class="col-sm-10" style="width: 65%">
            <h4><?php echo $title; ?></h4>
            <hr style="border: 1px solid #337ab7;">
            <form action="client/order" method="GET">
                <table id="example1" class="table table-bordered table-striped" style="font-size:100%">
                    <thead>
                    <tr id="tbheader">
                        <th>STT</th>
                        <th>Tình trạng</th>
                        <th>DC cụ thể</th>
                        <th>SDT</th>
                        <th>Ngày</th>
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
                            <td><?php echo $data[$i]['user_addr'] ?></td>
                            <td><?php echo $data[$i]['user_phone'] ?></td>
                            <td><?php echo $data[$i]['date'] ?></td>
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
            </form>
        </div>
    </div>
</div>