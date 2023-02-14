<?php
  $baglan=mysqli_connect("localhost","root","","deu_market");
  mysqli_set_charset($baglan, "utf8");

$subelerToplamSatilanUrun = mysqli_query($baglan,"SELECT * FROM subeler_toplamsatilan_urunmiktari");

  
  
  ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Satılan Toplam Ürün Sayıları</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Şube', 'Satılan Toplam Ürün'],
          <?php 
            
            foreach($subelerToplamSatilanUrun as $row) {
            
                echo "['".$row["sube"]."',".$row["toplam_miktar"]."],";
            
            }
            
            
            ?>
        ]);

        var options = {
          width: 450,
          legend: { position: 'center' },
          chart: {
            title: '',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>


<div id="top_x_div" style="width: 500px; height: 500px;"></div>