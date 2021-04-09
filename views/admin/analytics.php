<section class="content-header">
  <h1>
    <?php echo $title ?>
    <small>Version 2.0</small>
  </h1>
</section>
<script src="public/script/canvasjs.min.js"></script>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <!-- AREA CHART -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sản phẩm bán chạy</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
              <div id="anaProductSell" style="height: 370px; width: 100%;"></div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- DONUT CHART -->
      <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Doanh số bán hàng (theo tháng)</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div id="salesChar" style="height: 370px; width: 100%;"></div>
        </div>
          <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col (LEFT) -->
    <div class="col-md-6">
      <!-- LINE CHART -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Khách hàng thân thiết</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
              <div id="memberChar" style="height: 370px; width: 100%;"></div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col (RIGHT) -->
  </div>
  <!-- /.row -->
</section>
<!-- jQuery 3 -->
<script src="views/admin/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="views/admin/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="views/admin/AdminLTE/bower_components/Chart.js/Chart.js"></script>

<script>
  window.onload = function () {
      var chart = new CanvasJS.Chart("anaProductSell", {
          animationEnabled: true,
          exportEnabled: true,
          title:{
              text: ""
          },
          subtitles: [{
              text: ""
          }],
          data: [{
              type: "pie",
              showInLegend: "true",
              legendText: "{label}",
              indexLabelFontSize: 16,
              indexLabel: "{label} - #percent% ",
              yValueFormatString: "Số lượng bán: #,##0",
              dataPoints: <?php echo json_encode($data['dataProductSell'], JSON_NUMERIC_CHECK); ?>
          }]
      });
      chart.render();
  }

  var chart = new CanvasJS.Chart("memberChar", {
      animationEnabled: true,
      theme: "light2",
      title: {
          text: ""
      },
      axisY: {
          suffix: " đồng",
          scaleBreaks: {
              autoCalculate: true
          }
      },
      data: [{
          type: "column",
          yValueFormatString: "#,##0\" đồng\"",
          indexLabel: "{y}",
          indexLabelPlacement: "inside",
          indexLabelFontColor: "white",
          dataPoints: <?php echo json_encode($data['dataMemberBuy'], JSON_NUMERIC_CHECK); ?>
      }]
  });
  chart.render();

  var chart = new CanvasJS.Chart("salesChar", {
      title: {
          text: ""
      },
      axisY: {
          title: ""
      },
      data: [{
          type: "line",
          yValueFormatString: "#,##0\" đồng\"",
          dataPoints: <?php echo json_encode($data['dataSaleMonth'], JSON_NUMERIC_CHECK); ?>
      }]
  });
  chart.render();
</script>
<script>
  $('#pttab').addClass('active');
</script>

