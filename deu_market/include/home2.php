<?php
$baglan=mysqli_connect("localhost","root","","deu_market");
  mysqli_set_charset($baglan, "utf8");

$subelerToplamSatilanUrun = mysqli_query($baglan,"SELECT COUNT(*) FROM personeller");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ANASAYFA</h1>
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

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>24251</h3>

                <p>Toplam Satış</p>
              </div>
              <div class="icon">
              <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="./satilanUrunler.php" class="small-box-footer">Detay<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>240908</h3>

                <p>Toplam Stok</p>
              </div>
              <div class="icon">
                <i class="fas fa-inbox"></i>
              </div>
              <a href="./stokListe.php" class="small-box-footer">Detay<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>14</h3>

                <p>Personel</p>
              </div>
              <div class="icon">
              <i class="fas fa-users"></i>
              </div>
              <a href="./personelListe.php" class="small-box-footer">Detay<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>4414</h3>

                <p>Toplam Ürün Sayısı</p>
              </div>
              <div class="icon">
                <i class="fas fa-cubes"></i>
              </div>
              <a href="./urunListe.php" class="small-box-footer">Detay<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <script type="text/javascript">
    window.onload = function(){
        new JsDatePick({
            useMode:2,
            target:"text-box-ismi",
            dateFormat:"%Y-%m-%d"
        });


    };
</script>


    </div>
                <!-- /.d-flex -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>


  <!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>