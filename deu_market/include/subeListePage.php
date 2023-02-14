<?php

$baglanti= mysqli_connect("localhost","root","","deu_market");
    mysqli_set_charset($baglanti, "utf8");
    $sorgu = mysqli_query($baglanti,"SELECT s.ID,s.sube,seh.sehir,s.tel,s.acik_adres from subeler s JOIN sehirler seh on s.sehir_id=seh.ID");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Şube Listesi</h1>
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
            <th>ID</th><th>Şube</th><th>Şehir</th><th>Telefon</th><th>Açık Adres</th>
           

            <?php

while($satir = mysqli_fetch_array($sorgu))
{
?>

<tr> 
    <td><?php echo $satir['ID']; ?></td>
    <td><?php echo $satir['sube']; ?></td>
    <td><?php echo $satir['sehir']; ?></td>
    <td><?php echo $satir['tel']; ?></td>
    <td><?php echo $satir['acik_adres']; ?></td>
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