<!DOCTYPE html>
<html>
<head>
	<title>Estimasi</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <div class="wrap">

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>INCEKSPOR</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto " href="index.html">Home</a></li>
            <li><a class="nav-link scrollto" href="index.html">News</a></li>
            <li><a class="nav-link scrollto" href="index.html">Produk</a></li>
            <li><a class="nav-link scrollto " href="index.html">Team</a></li>
            <li><a class="estimasi.php">Price Estimation</a></li>
            <li><a class="nav-link scrollto" href="index.html">Contact</a></li>
          </ul>
        </nav>

      </div>
    </header>

    <main id="main">

      <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Check Estimation</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Check Estimation</li>
            </ol>
          </div>

        </div>
      </section>

      <section class="inner-page">
        <div class="container">
      
        <?php
        ini_set('display_errors',0);

        
        if(isset($_REQUEST['hitung'])){
          $totkon = $_REQUEST['totkon'];
          $bil2 = $_REQUEST['bil2'];
          $operasi = $_REQUEST['operasi'];
          $biayas = 15;
          $biayam = 25;
          $biayal = 30;
          $berat = 100;
          $biayaberat = 3;
          
        if($operasi == 'Small'){
          $beban = $berat / $bil2;
          round($beban);
            //        100    / 140
          $hasil1 = $totkon * $biayas;
          $hasil2 = $beban * $biayaberat;
          $hasil = $hasil1 + $hasil2;
        }           //10     * 15 =150 + 1* 3 =3
                                //  150 + 3
                                // 153
          
        if($operasi == 'Medium'){
          $beban = $berat / $bil2;
          round($beban);

          $hasil1 = $totkon * $biayam;
          $hasil2 = $beban * $biayaberat;
          $hasil = $hasil1 + $hasil2;
        }
        
        if($operasi == 'Big'){
          $beban = $berat / $bil2;
          round($beban);

          $hasil1 = $totkon * $biayal;
          $hasil2 = $beban * $biayaberat;
          $hasil = $hasil1 + $hasil2;
        }
        if($_REQUEST['totkon']==NULL || $_REQUEST['bil2']==NULL)
        {
        echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
        }
        }
     
        ?>
        <div class="kalkulator">
          <h2 class="judul">Check Estimation</h2>
          <p class="judul">Shipping type : Ship</p>
          <form>			
            <input type="text" name="totkon" class="bil"  placeholder="Input Total Container">
            <input type="text" name="bil2" class="bil" placeholder="Input Total Weight (kg)">
            
            <select class="opt" name="operasi">
              <option>Small</option>
              <option>Medium</option>
              <option>Big</option>
            </select>

            <input type="submit" name="hitung" value="Hitung" class="tombol">				

            <!-- Option name operasi
            <option value="small">Small (8 Feet)</option>
              <option value="medium">Medium (20 Feet)</option>
              <option value="Big">Big (40 Feet)</option>
             End #main -->
            <input type="text" value="<?php echo "Total Cost is : ","$",round($hasil); ?>" class="bil">
          </form>
          <a href="estimasi.php" class="tombolship"target="_blank">Ship</a>
          <a href="estimasi2.php" class="tombolplane"target="_blank">Plane</a>
          <!--
          <php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<_?php echo "Total Cost is : ","$",round($hasil); ?>" class="bil">
          <php }else{ ?>
            <input type="text" value="0" class="bil">
          <php } ?>			-->
        </div>
        <div class="desk">
          <h2>Description</h2>
          <p>Total container is multiplied by our fee serve each container</p>
          <p>For <i>Small (6 Feet)</i> Container we set a price at <b>15$</b><i class="bi bi-tag"></i></p>
          <p>For <i>Medium (10 Feet)</i> Container we set a price at <b>25$</b><i class="bi bi-tag"></i></p>
          <p>For <i>Large (20 Feet)</i> or <i>Big</i> Container we set a price at <b>30$</b><i class="bi bi-tag"></i></p>
          <p></p>
          <p>We also charge for each weight at 100Kg for <b>3$</b>
          <i class="bi bi-tag"></i></p>
          
        </div>
      </section>

    </main><!-- End #main -->


  </div>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>