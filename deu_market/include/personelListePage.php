<?php

$baglanti= mysqli_connect("localhost","root","","deu_market");
    mysqli_set_charset($baglanti, "utf8");
    $sorgu = mysqli_query($baglanti,"SELECT p.ID,p.TC,p.ad_soyad,s.sube,p.cinsiyet,p.tel from personeller p  JOIN subeler s on p.sube_id=s.ID");

?>

<div class="content-wrapper">
   
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Personel Listesi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           
            </ol>
          </div>
        </div>
      </div>
    </div>
   

   
    <div class="content">


   
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
            <th>ID</th><th>TC</th><th>AD SOYAD</th><th>ŞUBE</th><th>CİNSİYET</th><th>TELEFON</th>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>TC</th>
                <th>AD SOYAD</th>
                <th>ŞUBE</th>
                <th>CİNSİYET</th>
                <th>TELEFON</th>                     
              </tr>
              </tfoot>

            <?php

while($satir = mysqli_fetch_array($sorgu))
{
?>

<tr> 
    <td><?php echo $satir['ID']; ?></td>
    <td><?php echo $satir['TC']; ?></td>
    <td><?php echo $satir['ad_soyad']; ?></td>
    <td><?php echo $satir['sube']; ?></td>
    <td><?php echo $satir['cinsiyet']; ?></td>
    <td><?php echo $satir['tel']; ?></td>
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