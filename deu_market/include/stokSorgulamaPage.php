<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Personel Ekle</h1>
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
      <table  align="left">
<tr>
<td colspan="2" align="center">Ürün Ekleme</td>
 
</tr>
</tr>
<tr>
<td>Ürün Adı</td>
<td><input type="text" name="baslangic"></td>
<td>-</td>
<td><input type="text" name="bitis"></td>
</tr>
<tr>

<div class="form-group">
                <td><label for="secim">Kategori</label></td>
                <td>
                    <select name="kategori" class="form-control">
                    <option value="muhtelif">MUHTELIF</option>
                    <option value="balik">BALIK</option>
                    <option value="sigaralar">SIGARALAR</option>
                    <option value="kumes">KUMES</option>
                    <option value="sarf">SARF</option>
                    <option value="deterjan">DETERJAN</option>
                    <option value="oyuncak">OYUNCAK</option>
                    <option value="sicakicecekler">SICAK ICECEKLER</option>
                    <option value="bebek">BEBEK</option>
                    <option value="sekerleme">SEKERLEME</option>
                    <option value="gida">GIDA</option>
                    <option value="ev">EV</option>
                    <option value="kozmetik">KOZMETIK</option>
                    <option value="sut">SUT</option>
                    <option value="sogukicecek">SOGUK ICECEKLER</option>
                    <option value="kagit">KAGIT</option>
                    <option value="caykahveseker">CAY-KAHVE-SEKER</option>
                    <option value="temizlik">TEMIZLIK</option>
                    <option value="kahvaltilik">KAHVALTILIK</option>
                    <option value="sebze">SEBZE</option>
                    <option value="et">ET</option>
                    <option value="karo">KARO</option>
                    <option value="kirtasiye">KIRTASIYE</option>
                </select>
                </td>
              </div>

</tr>

<tr>
<td></td>
<td><button type="submit" name="kontrol" class="btn btn-default" >EKLE</button></td>
</tr>
</table>
             
       
              
            </form>
        </div>

       
        <div class="container">
           
                <?php
                $baglan=mysqli_connect("localhost","root","","deu_market"); 
                mysqli_set_charset($baglan, "utf8");
                
                $urunId;
                $yeniStok;
                $query;
                
                if(isset($_POST["kontrol"])){
                  $baslangic = $_POST['baslangic'];
                  $bitis = $_POST['bitis'];
                  $kategori = $_POST['kategori'];
                  

                    $query = "SELECT urun_ad,stok from stok JOIN urunler ON stok.urun_id=urunler.ID WHERE kategori = '$kategori' AND stok  BETWEEN $baslangic AND $bitis ";

                    $result  = mysqli_query($baglan,$query);

                  

                  


                  

                  
                  
                    ?>
            
            </div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Ürün', 'Stok'],
          <?php 
            
            foreach($result as $row) {
            
                echo "['".$row["urun_ad"]."',".$row["stok"]."],";
            
            }
            
            
            ?>
          
        ]);

        var options = {
          width: 450,
          legend: { position: 'none' },
          chart: {
            title: 'Chess opening moves',
            subtitle: 'popularity by percentage' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
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
        
            </body>
        </html>