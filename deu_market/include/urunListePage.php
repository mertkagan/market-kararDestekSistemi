<?php

$baglanti= mysqli_connect("localhost","root","","deu_market");
    mysqli_set_charset($baglanti, "utf8");
    $sorgu = mysqli_query($baglanti,"SELECT * FROM urunler");

?>
<div class="content-wrapper">
    
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ürün Listesi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div>
    </section>
    

    
    <div class="content">


    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <th>Ürün ID</th><th>Ürün</th><th>ALIŞ</th><th>SATIŞ</th><th>KATEGORİ</th><th>MARKA</th>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Ürün</th>
                    <th>Alış</th>
                    <th>Satş</th>
                    <th>Kategori</th>
                    <th>Marka</th>
                    
                  </tr>
                  </tfoot>

                <?php

while($satir = mysqli_fetch_array($sorgu))
{
    ?>

    <tr> 
        <td><?php echo $satir['ID']; ?></td>
        <td><?php echo $satir['urun_ad']; ?></td>
        <td><?php echo $satir['alis_fiyat']; ?></td>
        <td><?php echo $satir['satis_fiyat']; ?></td>
        <td><?php echo $satir['kategori']; ?></td>
        <td><?php echo $satir['marka']; ?></td>
    </tr>

    
    

    <?php
}
?>

      
                </table>


              </div>
              
            </div>
            




    </div>
                
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>
  
  </div>

  
