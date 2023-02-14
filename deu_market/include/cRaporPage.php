<?php
  $baglan=mysqli_connect("localhost","root","","deu_market");
  mysqli_set_charset($baglan, "utf8");

$cSubesiAylikSatis = mysqli_query($baglan,"SELECT * FROM vw_csubesi_aylik_toplamsatistutari");
$cKategorikSatis = mysqli_query($baglan,"SELECT * FROM vw_csubesi_kategoribazli_toplamsatistutari");
$cEncokSatanBesUrun = mysqli_query($baglan,"SELECT * FROM vw_csubesi_encok_toplamtutar5urun");
$cEnCokKazandiranTopUcPersonel = mysqli_query($baglan,"SELECT * FROM vw_csubesi_ilkuc_encokkazandiranpersonel");



  
  
  ?>


<div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>C Şubesi Raporları</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div>
    </section>

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">



            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kategorilere Göre Toplam Satış Tutarları</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                <div id="piechart" style="width: 500px; height: 500px;"></div>
                </div>
              </div>
              
            </div>
            


            
         <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Aylık Toplam Satış Tutarları</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                <div id="top_x_div" style="width: 500px; height: 500px;"></div>
                </div>
              </div>
              
            </div>
            


            </div>
          
          <div class="col-md-6">
            
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">En Çok Satan 5 Ürün</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                <div id="chart_div" style="width: 800px; height: 500px;"></div>
                </div>
              </div>
              
            </div>
            

            
            
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">En Çok Kazandıran 3 Personel (A Şubesi)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
                </div>
              </div>
              
            </div>
            


         



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Kategori', 'Toplam Satış'],
          <?php 
            
            foreach($cKategorikSatis as $row) {
            
                echo "['".$row["kategori"]."',".$row["toplam_tutar"]."],";
            
            }
            
            
            ?>
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['AY', 'TOPLAM SATIŞ'],
          <?php 
            
            foreach($cSubesiAylikSatis as $row) {
            
                echo "['".$row["ay_adi"]."',".$row["toplam_tutar"]."],";
            
            }
            
            
            ?>
        ]);

        var options = {
          width: 450,
          legend: { position: 'none' },
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


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Ürün', 'Adet'],
          <?php 
            
            foreach($cEncokSatanBesUrun as $row) {
            
                echo "['".$row["urun_ad"]."',".$row["toplam_tutar"]."],";
            
            }
            
            
            ?>
         
        ]);

        var materialOptions = {
          width: 450,
          chart: {
            title: '',
            subtitle: ''
          },
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: ''}, // Left y-axis.
              brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

        var classicOptions = {
          width: 900,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Nearby galaxies - distance on the left, brightness on the right',
          vAxes: {
            // Adds titles to each axis.
            0: {title: ''},
            1: {title: ''}
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          button.innerText = 'Change to Classic';
          button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
          button.innerText = 'Change to Material';
          button.onclick = drawMaterialChart;
        }

        drawMaterialChart();
    };
    </script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Personel', 'Satılan Ürünlerin Toplam Fiyatı' ],
          <?php 
            
            foreach($cEnCokKazandiranTopUcPersonel as $row) {
            
                echo "['".$row["ad_soyad"]."',".$row["toplam_satis_tutari"]."],";
            
            }
            
            
            ?>
          
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
