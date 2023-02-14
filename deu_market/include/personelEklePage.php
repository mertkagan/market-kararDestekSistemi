<div class="content-wrapper">
   
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Personel Ekle</h1>
          </div>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
    <div class="container">
   <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <table  align="center">
<tr>
<td colspan="2" align="center">Personel Ekleme</td>
 
</tr>
</tr>
<tr>
<td>TC</td>
<td><input type="text" name="tc"></td>
</tr>
<tr>
<td>Ad Soyad</td>
<td><input type="text" name="adsoyad"></td>
</tr>
<tr>
<td>Sube ID</td>
<td><input type="text" name="subeId"></td>
</tr>
<tr>
<td>Cinsiyet</td>
<td><input type="text" name="cinsiyet"></td>
</tr>
<tr>
<td>Telefon(Başında Sıfır Olmadan)</td>
<td><input type="text" name="tel"></td>
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
                
                
                
                if(isset($_POST["kontrol"])){
                  $tc = $_POST['tc'];
                  $adSoyad = $_POST['adsoyad'];
                  $subeId = $_POST['subeId'];
                  $cinsiyet = $_POST['cinsiyet'];
                  $tel = $_POST['tel'];

                    $query = "INSERT INTO personeller(TC, ad_soyad, sube_id, cinsiyet, tel) 
                    VALUES ('$tc','$adSoyad','$subeId','$cinsiyet','$tel')";

                    $result  = mysqli_query($baglan,$query);

                  if($result==0){
                    echo "<h1 class='text-info'>Personel Eklenemedi Tekrar Deneyin!</h1>";
                    }else{
                    echo "<h1 class='text-info' align=center>Personel Başarıyla Eklendi!</h1>";}
                  }
                  
                  
                    ?>
            </table>
               </div>
            </body>
        </html>







