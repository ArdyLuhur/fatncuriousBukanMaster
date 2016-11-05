<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Fast 'n Curious</title>
  <link href="<?php echo base_url('/vendors/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('/vendors/css/animate.min.css');?>" rel="stylesheet"> 
  <link href="<?php echo base_url('/vendors/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('/vendors/css/lightbox.css');?>" rel="stylesheet">
  
  <link id="css-preset" href="<?php echo base_url('/vendors/css/presets/preset1.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('/vendors/css/main.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('/vendors/css/responsive.css');?>" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo base_url('/vendors/images/favicon.ico');?>">
    
    <style>
        body
        {
			background-image: url('<?php echo base_url('/vendors/images/Background/337094-zero.jpg');?>');
            background-color:red;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    
</head><!--/head-->

<body>
<div id="asd">FilterBy</div>    
  <header id="home">
    <div class="main-nav navbar-fixed-top berubah">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <img class="img-responsive" src="<?php echo base_url('/vendors/images/logo.png');?>" alt="logo">
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="<?php echo site_url('/fatncurious') ?>">Home</a></li>
            <li class="scroll"><a href="#services">Service</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#blog">Blog</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div>
  </header><!--/#home-->
    <br>
    <div class='container navbarSpace diperkecil'>
	<?php
		foreach($kartu as $r){
			echo "<div class='media warnaFilterByGanjil img-rounded'>";
				echo "<div class='media-left'>";
					echo '<a href = '.site_url('/fatncurious/profilRestoran/'.$r->KODE_RESTORAN).'>';
	?>
						<img class='media-object img-circle gambarRestoran' src='<?php echo base_url('/vendors/images/portfolio/1.jpg');?>' alt='...'>
	<?php
					echo "</a>";
				echo "</div>";
				echo "<div class='media-body jarakMedia'>";
					echo "<h3 class='media-heading jarakMedia'>".$r->RESTORAN.', '.$r->ALAMAT."</h3>";
					echo "<h5 class='jarakMedia'>"."Kartu Kredit : ".$r->KARTU."</h5>";
					echo "<h5 class='jarakMedia'>"."Nama Promo : ".$r->NAMA_PROMO."</h5>";
					echo "<h5 class='jarakMedia'>"."Deskripsi Promo : ".$r->DESKRIPSI_PROMO."</h5>";
					echo "<h5 class='jarakMedia'>"."Jumlah Diskon : ".$r->PERSENTASE_PROMO."</h5>";
					echo "<h5 class='jarakMedia'>"."Masa Berlaku : ".$r->MASABERLAKU_PROMO."</h5>";
				echo "</div>";
			echo "</div>";
		}
		echo $links;
	?>
    </div>
   
  <script type="text/javascript" src="<?php echo base_url('/vendors/js/jquery.js');?>">
  </script>
  <script type="text/javascript" src="<?php echo base_url('/vendors/js/bootstrap.min.js');?>"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="<?php echo base_url('/vendors/js/jquery.inview.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/vendors/js/wow.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/vendors/js/mousescroll.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/vendors/js/smoothscroll.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/vendors/js/jquery.countTo.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/vendors/js/lightbox.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/vendors/js/main.js');?>"></script>
</body>
</html>