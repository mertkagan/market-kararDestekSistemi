<div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Yeni Ürün Ekleme</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div>
    </div>
    

    
    <div class="content">

    <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ürün Ekle</title>
        
    </head>
    <body>
    <div class="container">
   <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <table  align="center">
<tr>
<td colspan="2" align="center">Ürün Ekleme</td>
 
</tr>
</tr>
<tr>
<td>Ürün Adı</td>
<td><input type="text" name="urunadi"></td>
</tr>
<tr>
<td>Alış Fiyatı(0.00)</td>
<td><input type="text" name="alisfiyati"></td>
</tr>
<tr>
<td>Satış Fiyatı(0.00)</td>
<td><input type="text" name="satisfiyati"></td>
</tr>
<tr>
<td>Kategori</td>
<td><input type="text" name="kategori"></td>
</tr>
<tr>
<td>Marka</td>
<td><input type="text" name="marka"></td>
</tr>
<tr>
<td></td>
<td><button type="submit" name="kontrol" class="btn btn-default" >EKLE</button></td>
</tr>
</table>
             
       
              
            </form>
        </div>

        <div class="container">
           <table class="table table-striped">
                <?php
                $baglan=mysqli_connect("localhost","root","","deu_market"); 
                mysqli_set_charset($baglan, "utf8");
                
                $urunId;
                $yeniStok;
                $query;
                
                if(isset($_POST["kontrol"])){
                  $urunAd = $_POST['urunadi'];
                  $alisFiyat = $_POST['alisfiyati'];
                  $satisFiyat = $_POST['satisfiyati'];
                  $kategori = $_POST['kategori'];
                  $marka = $_POST['marka'];

                    $query = "INSERT INTO urunler( urun_ad, alis_fiyat, satis_fiyat, kategori, marka) 
                    VALUES ('$urunAd','$alisFiyat','$satisFiyat','$kategori','$marka')";

                    $result  = mysqli_query($baglan,$query);

                  if($result==0){
                    echo "<h1 class='text-info'>Ürün Eklenemedi Tekrar Deneyin!</h1>";
                    }else{
                    echo "<h1 class='text-info' align=center>Ürün Başarıyla Eklendi!</h1>";}
                  }
                  
                  
                    ?>
            </table>
               </div>
            </body>
        </html>





