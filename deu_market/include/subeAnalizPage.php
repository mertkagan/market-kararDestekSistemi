<?php

$baglan= mysqli_connect("localhost","root","","deu_market");
$query = "SELECT * from vw_toplam_satis_kar";
$result  = mysqli_query($baglan,$query);


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>A Şubesi Raporları</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">




          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Şubelere Göre Toplam Gelir</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                <div id="columnchart_material" style="width: 500px; height: 500px;"></div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">

          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">TAHMİN</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
              <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
<body>
  <div class="container">
            
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <table  align="left">
       
        
          <div class="form-group">
              <tr>
            <td><label for="sayi1">Satış Sayısı</label></td>
            <td><input type="text" class="form-control" name="satissayisi"></td>
            </tr>
          </div>
          <div class="form-group">
              <tr>
            <td><label for="secim">Şube</label></td>
            <td>
            <select name="sube" class="form-control">
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
            </select>
            </td>
            </tr>   
          </div>
          <tr>
          <td><button type="submit" name="kontrol" class="btn btn-default">HESAPLA</button></td>
            </tr>
          </table>
        </form>

    </div>
    <!-- PHP KODLARI -->
    <div class="container">
       <table class="table table-striped">
            <?php
            

            $baglan=mysqli_connect("localhost","root","","deu_market"); 
            mysqli_set_charset($baglan, "utf8"); 

            $aOrtlama = 10.45899485382678;
            $bOrtalama = 7.552084584885258;
            $cOrtalama = 2.228403237674761;
            $kar;

            
            if(isset($_POST["kontrol"])){
                $satis = $_POST['satissayisi'];
                $sube = $_POST['sube'];

                $satisF = (float) $satis;


                if($sube=='a'){
                    $kar = $satisF*$aOrtlama;
                }elseif($sube=='b'){
                    $kar = $satisF*$aOrtlama;
                }else{
                    $kar = $satisF*$cOrtalama;
                }

                echo "<h1 class='text-info'>$kar</h1>";
              
                



                }
            
            
            

            ?>
        </table>
   </div>
</body>
</html>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          <div class="content">



 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Şube', 'Toplam Satılan Ürün', 'Kar'],
          <?php
          foreach($result as $row) {
            
            echo "['".$row["sube"]."',".$row["toplamadet"].",".$row["kar"]."],";
        
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

