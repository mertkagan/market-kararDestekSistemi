<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Stok Güncelle</h1>
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
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
    <div class="container">
   <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <table  align="center">
<tr>
<td colspan="2" align="center">Stok Güncelleme</td>
 
</tr>
<tr>
<td>Ürün ID</td>
<td><input type="text" name="urunId"></td>
</tr>
<tr>
<td>Yeni Stok</td>
<td><input type="text" name="yenistok"></td>
</tr>
<tr>
<td></td>
<td><button type="submit" name="kontrol" class="btn btn-default" >GÜNCELLE</button></td>
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
                    $urunId= $_POST["urunId"];
                    $yeniStok= $_POST["yenistok"];
                    $query = "UPDATE stok SET stok = $yeniStok WHERE urun_id = $urunId ";
                    $result  = mysqli_query($baglan,$query);

                  if($result==0){
                    echo "<h1 class='text-info'>Stok Güncellenemedi Tekrar Deneyin!</h1>";
                    }else{
                    echo "<h1 class='text-info' align=center>Stok Başarıyla Güncellendi!</h1>";}
                  }
                  
                  
                    ?>
            </table>
               </div>
            </body>
        </html>