<?php

$baglanti= mysqli_connect("localhost","root","","deu_market");
    mysqli_set_charset($baglanti, "utf8");
    $sorgu = mysqli_query($baglanti,"SELECT urunler.ID as ID,urun_ad ,kategori,marka,stok FROM stok JOIN urunler on stok.urun_id = urunler.ID ");

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Stok Sayıları</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Stok Sayıları</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">


    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <th>Ürün ID</th><th>Ürün</th><th>Kategori</th><th>Marka</th><th>Stok Sayısı</th>
                

                <?php

while($satir = mysqli_fetch_array($sorgu))
{
    ?>

    <tr> 
        <td><?php echo $satir['ID']; ?></td>
        <td><?php echo $satir['urun_ad']; ?></td>
        <td><?php echo $satir['kategori']; ?></td>
        <td><?php echo $satir['marka']; ?></td>
        <td><?php echo $satir['stok']; ?></td>
        
        
        
    </tr>

    
    

    <?php
}
?>

      
                </table>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->




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

  
