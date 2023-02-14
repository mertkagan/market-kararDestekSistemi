<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Yeni Ürün Analizi</h1>
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
              <div class="form-group">
                <label for="sayi1">Ürün Adı</label>
                <input type="text" class="form-control" name="urunad">
              </div>
              <div class="form-group">
                <label for="sayi2">Öngördüğünüz Alış Tutarı</label>
                <input type="text" class="form-control" name="alis">
              </div>
              <div class="form-group">
                <label for="sayi2">Öngördüğünüz Satış Tutarı</label>
                <input type="text" class="form-control" name="satis">
              </div>
              <div class="form-group">
                <label for="secim">Ürünün Satılacağı Şube</label>
                <select name="sube" class="form-control">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                </select>
              </div>
              <div class="form-group">
                <label for="secim">Ürünün Satılacağı Kategori</label>
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
              </div>
              <button type="submit" name="kontrol" class="btn btn-default" >HESAPLA</button>
            </form>
        </div>
        <!-- PHP KODLARI -->
        <div class="container">
           <table class="table table-striped">
                <?php
                

                $baglan=mysqli_connect("localhost","root","","deu_market"); 
                mysqli_set_charset($baglan, "utf8"); 
                
                if(isset($_POST["kontrol"])){
                    $urunAd= $_POST["urunad"];
                    $alis= $_POST["alis"];
                    $satis= $_POST["satis"];
                    $sube= $_POST["sube"];
                    $kategori= $_POST["kategori"];

                    $alisf = (float) $alis;
                    $satisf= (float) $satis;


                    

                    $baglan= mysqli_connect("localhost","root","","deu_market");
                    // $query = "call sp_ortalamaSatisSayisi('$sube','$kategori'); ";
                    // $result  = mysqli_query($baglan,$query);

                    $aBebek = 5.6923;
                    $aCayKahveSeker = 5.2857;
                    $aDeterjan = 5.9000;
                    $aEt = 4.9677;
                    $aEv = 5.3975;
                    $aGida = 5.0280    ;
                    $aKagit = 5.2857;
                    $aKahvaltilik = 5.4390;
                    $aKirtasiyeler = 10.0000;
                    $aKozmetik = 5.1612;
                    $aKumes =   5.6486     ;
                    $aMeyve = 5.6556;
                    $aOyuncak = 5.9167;
                    $aSarf = 3.5000;
                    $aSebze = 6.1023;
                    $aSekerleme = 5.3659;
                    $aSicakIcecekler = 7.0000;
                    $aSigaralar = 6.0000;
                    $aSogukIcecekler = 5.2308;
                    $aSut = 6.9231;
                    $aTemizlik =5.0417;
                    $aYesillik = 5.5185;

                    $bBebek = 5.5333;
                    $bCayKahveSeker = 4.6000;
                    $bDeterjan = 5.8442;
                    $bEt = 8.1429;
                    $bEv = 5.6116;
                    $bGida =5.2778    ;
                    $bKagit = 4.5714;
                    $bKahvaltilik = 5.1818;
                    //$aKirtasiyeler = 10.0000;
                    $bKozmetik = 5.5677;
                    //$aKumes =   5.6486     ;
                    //$aMeyve = 5.6556;
                    $bOyuncak = 5.5223;
                    $bSarf = 3.5000;
                    $bSebze = 4.5000;
                    $bSekerleme = 5.3247;
                    $bSicakIcecekler = 6.7000;
                    $bSigaralar = 5.0000;
                    $bSogukIcecekler = 4.8919;
                    $bSut = 5.3889;
                    $bTemizlik =6.3333;
                    //$aYesillik = 5.5185;

                    $cBebek = 5.4167;
                    $cCayKahveSeker = 6.0909;
                    $cDeterjan = 5.1111;
                    $cEt = 8.5000;
                    $cEv = 5.6440;
                    $cGida =5.5862    ;
                    $cKagit = 6.0714;
                    $cKahvaltilik = 6.2857;
                    //$aKirtasiyeler = 10.0000;
                    $cKozmetik = 5.7281;
                    $cKumes =  4.0000     ;
                    //$aMeyve = 5.6556;
                    $cOyuncak = 5.3378;
                    $cSarf = 4.1667;
                    $cSebze = 7.0000;
                    $cSekerleme = 5.5000;
                    $cSicakIcecekler = 5.4000;
                    $cSigaralar = 3.0000;
                    $cSogukIcecekler = 5.8636;
                    $cSut = 5.7368;
                    $cTemizlik =6.1951;
                    //$aYesillik = 5.5185;
                    
                    $kar=($satisf-$alisf); 
                    $sonuc = 0;

                    if($sube == 'a')
                    {
                        if($kategori=='bebek'){
                          $sonuc= $kar * $aBebek;
                        }elseif($kategori=='caykahveseker'){
                          $sonuc= $kar * $aCayKahveSeker;
                        }elseif($kategori=='deterjan'){
                          $sonuc= $kar * $aDeterjan;
                        }elseif($kategori=='et'){
                          $sonuc= $kar * $aEt;
                        }elseif($kategori=='ev'){
                          $sonuc= $kar * $aEv;
                        }elseif($kategori=='gida'){
                          $sonuc= $kar * $aGida;
                        }elseif($kategori=='kagit'){
                          $sonuc= $kar * $aKagit;
                        }elseif($kategori=='kahvaltilik'){
                          $sonuc= $kar * $aKahvaltilik;
                        }elseif($kategori=='kirtasiye'){
                          $sonuc= $kar * $aKirtasiyeler;
                        }elseif($kategori=='kozmetik'){
                          $sonuc= $kar * $aKozmetik;
                        }elseif($kategori=='kumes'){
                          $sonuc= $kar * $aKumes;
                        }elseif($kategori=='meyve'){
                          $sonuc= $kar * $aMeyve;
                        }elseif($kategori=='oyuncak'){
                          $sonuc= $kar * $aOyuncak;
                        }elseif($kategori=='sarf'){
                          $sonuc= $kar * $aSarf;
                        }elseif($kategori=='sebze'){
                          $sonuc= $kar * $aSebze;
                        }elseif($kategori=='sekerleme'){
                          $sonuc= $kar * $aSekerleme;
                        }elseif($kategori=='sicakicecekler'){
                          $sonuc= $kar * $aSicakIcecekler;
                        }elseif($kategori=='sigara'){
                          $sonuc= $kar * $aSigaralar;
                        }elseif($kategori=='sogukicecek'){
                          $sonuc= $kar * $aSogukIcecekler;
                        }elseif($kategori=='sut'){
                          $sonuc= $kar * $aSut;
                        }elseif($kategori=='temizlik'){
                          $sonuc= $kar * $aTemizlik;
                        }else {
                          $sonuc= $kar * $aYesillik;
                        }

                    } 
                    if($sube == 'b')
                    {
                        if($kategori=='bebek'){
                          $sonuc= $kar * $bBebek;
                        }elseif($kategori=='caykahveseker'){
                          $sonuc= $kar * $bCayKahveSeker;
                        }elseif($kategori=='deterjan'){
                          $sonuc= $kar * $bDeterjan;
                        }elseif($kategori=='et'){
                          $sonuc= $kar * $bEt;
                        }elseif($kategori=='ev'){
                          $sonuc= $kar * $bEv;
                        }elseif($kategori=='gida'){
                          $sonuc= $kar * $bGida;
                        }elseif($kategori=='kagit'){
                          $sonuc= $kar * $bKagit;
                        }elseif($kategori=='kahvaltilik'){
                          $sonuc= $kar * $bKahvaltilik;
                        }elseif($kategori=='kozmetik'){
                          $sonuc= $kar * $bKozmetik;
                        }elseif($kategori=='oyuncak'){
                          $sonuc= $kar * $bOyuncak;
                        }elseif($kategori=='sarf'){
                          $sonuc= $kar * $bSarf;
                        }elseif($kategori=='sebze'){
                          $sonuc= $kar * $bSebze;
                        }elseif($kategori=='sekerleme'){
                          $sonuc= $kar * $bSekerleme;
                        }elseif($kategori=='sicakicecekler'){
                          $sonuc= $kar * $bSicakIcecekler;
                        }elseif($kategori=='sigara'){
                          $sonuc= $kar * $bSigaralar;
                        }elseif($kategori=='sogukicecek'){
                          $sonuc= $kar * $bSogukIcecekler;
                        }elseif($kategori=='sut'){
                          $sonuc= $kar * $bSut;
                        }elseif($kategori=='temizlik'){
                          $sonuc= $kar * $bTemizlik;
                        }

                    }

                    if($sube == 'c')
                    {
                        if($kategori=='bebek'){
                          $sonuc= $kar * $cBebek;
                        }elseif($kategori=='caykahveseker'){
                          $sonuc= $kar * $cCayKahveSeker;
                        }elseif($kategori=='deterjan'){
                          $sonuc= $kar * $cDeterjan;
                        }elseif($kategori=='et'){
                          $sonuc= $kar * $cEt;
                        }elseif($kategori=='ev'){
                          $sonuc= $kar * $cEv;
                        }elseif($kategori=='gida'){
                          $sonuc= $kar * $cGida;
                        }elseif($kategori=='kagit'){
                          $sonuc= $kar * $cKagit;
                        }elseif($kategori=='kahvaltilik'){
                          $sonuc= $kar * $cKahvaltilik;
                        }elseif($kategori=='kozmetik'){
                          $sonuc= $kar * $cKozmetik;
                        }elseif($kategori=='kumes'){
                          $sonuc= $kar * $cKumes;
                        }elseif($kategori=='oyuncak'){
                          $sonuc= $kar * $cOyuncak;
                        }elseif($kategori=='sarf'){
                          $sonuc= $kar * $cSarf;
                        }elseif($kategori=='sebze'){
                          $sonuc= $kar * $cSebze;
                        }elseif($kategori=='sekerleme'){
                          $sonuc= $kar * $cSekerleme;
                        }elseif($kategori=='sicakicecekler'){
                          $sonuc= $kar * $cSicakIcecekler;
                        }elseif($kategori=='sigara'){
                          $sonuc= $kar * $cSigaralar;
                        }elseif($kategori=='sogukicecek'){
                          $sonuc= $kar * $cSogukIcecekler;
                        }elseif($kategori=='sut'){
                          $sonuc= $kar * $cSut;
                        }elseif($kategori=='temizlik'){
                          $sonuc= $kar * $cTemizlik;
                        }

                    }
                   


                    echo "<h1 class='text-info'>$sube şubesi için $urunAd ürünü $kategori kategorisindeki tahmini kâr :  $sonuc </br></h1>";
                    echo "<h1 class='text-info'>Sonucun Tahmini Olduğunu Unutmayın..!</h1>";
                    



                    }
                
                
                

                ?>
            </table>
       </div>
    </body>
</html>