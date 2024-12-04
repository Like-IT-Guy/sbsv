<?php  $username = $this->session->userdata('user_name'); ?>

<!DOCTYPE html>
<html lang="eng" class="no-js">
<head>
     <link rel="stylesheet" href="<?php echo base_url().'assets/web/tel/build/css/intlTelInput.css' ?>">
	<meta name="google-site-verification" content="On-S8kyouC9PjcHDK_Cj7uh-NvTJr7kc9JZZlyL2bJ8" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KLMC2DG');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141121588-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141121588-1');
</script>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url().'assets/web/img/fav.png' ?>">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="Using a Canadian Immigration Consultant (Membership no. R530743), Immigrate to Canada from Dubai through a smooth, hassle free process. Regulated by ICCRC our Immigration Consultant will help you Immigrate to Canada in 6 months or less. 
	Free Assessment! Free Consultancy! Is and will always be FREE.">
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Step By Step Visas | Immigrate to Canada or Australia </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!-- CSS ============================================= -->
			 <link rel="stylesheet" href="<?php echo base_url().'assets/web/css/calculator.css' ?>">
			<link rel="stylesheet" href="<?php echo base_url().'assets/web/css/linearicons.css' ?>">
			<link rel="stylesheet" href="<?php echo base_url().'assets/web/css/font-awesome.min.css' ?>">
			<link rel="stylesheet" href="<?php echo base_url().'assets/web/css/bootstrap.css' ?>">
			<link rel="stylesheet" href="<?php echo base_url().'assets/web/css/magnific-popup.css' ?>">
			<link rel="stylesheet" href="<?php echo base_url().'assets/web/css/nice-select.css' ?>">					
			<link rel="stylesheet" href="<?php echo base_url().'assets/web/css/animate.min.css' ?>">
			<link rel="stylesheet" href="<?php echo base_url().'assets/web/css/owl.carousel.css' ?>">
			<link rel="stylesheet" href="<?php echo base_url().'assets/web/css/main.css' ?>">
			<link rel="stylesheet" href="<?php echo base_url().'assets/web/css/extra.css '?>">
			<script src="<?php echo base_url().'assets/web/js/osamabootjquery.js' ?>"></script>
            <link href="<?php echo base_url().'assets/web/css/osamaboot.css" rel="stylesheet" type="text/css' ?>" />
            <script src="<?php echo base_url().'assets/web/js/osamaboot.js' ?>"></script>
		</head>
		<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLMC2DG"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->			
			<h1 visibility: hidden>Step By Step Visas</h1>
		<header id="header">
			<?php foreach ($contact_us as $key => $value) { ?>	
			    <div class="container">
			    	<div class="row header-top align-items-center">
			    		<div class="col-lg-4 col-sm-4 menu-top-left">
			    	<a target="_blank" href="https://iccrc-crcic.ca/find-a-professional-frame/"><img style="width: 160px; height: 62px;" src="<?php echo base_url().'assets/web/img/affiliated.jpg' ?>" alt="Affilated to ICCRC" /></a>	
			    		</div>
			    		<div class="col-lg-4 menu-top-middle justify-content-center d-flex">
							<a href="<?= base_url().'Home' ?>">
								<img class="img-fluid" src="<?php echo base_url().'assets/web/img/logo.png" '?>alt="">	
							</a>			    			
			    		</div>
			    		<div class="col-lg-4 col-sm-4 menu-top-right">
			    			<a class="tel" style="margin-right: 90px;"><?php echo  $value->phone_no1; ?> </a> <br>  <a class="tel"> <?php echo  $value->phone_no2; ?></a> <span class="lnr lnr-phone-handset"></span>
			    			
			    		</div>
			    	</div>
			    </div>	
			    	<hr>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
			    		<div class="col-md-2"></div>
			    		<div class="col-md-8 ">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="<?php echo base_url().'Home '?>">Home</a></li>
				          <li ><a href="<?= base_url().'About' ?>">About</a></li>
				          <li class="menu-has-children"><a href="">Immigration Services</a>
				            <ul>
				              <li><a href="<?= base_url().'Canada' ?>">Canada</a></li>
				              <li><a href="<?= base_url().'Australia' ?>">Australia</a></li>
				              <li><a href="<?= base_url().'US' ?>">USA</a></li>
				              <li><a href="<?= base_url().'UK' ?>">United Kingdom</a></li>
				              <li><a href="<?= base_url().'NZ' ?>">New Zeland</a></li>
				              <li><a href="<?= base_url().'Schengen' ?>">Schengen</a></li>
				            </ul>
				          </li>
				          <li><a href="<?php echo base_url().'Faq '?>">FAQ's</a></li>				          
				          <li><a href="<?php echo base_url().'Testimonials '?>">Testimonials</a></li>
				          <li><a href="<?php echo base_url().'Payment '?>">Online Payment</a></li>
				          <li><a href="<?php echo base_url().'Contact '?>">Contact</a></li>
				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		</div>
				      <div class="col-md-2">
				      	
				      	<ul class="nav-menu">

				      	<li>
				      		<a style="margin-left: 30px " href="<?php echo base_url().'Crm/client '?>">Welcome Mr <strong><?= $username ?></strong></a>
				      		<ul>
				      			<li><a style="margin-left: 30px " href="<?php echo base_url().'Crm/logout '?>">Logout</a></li>
				      		</ul>


				      	</li>
				      </ul>
				  
						
				      </div>
			    	</div>
			    </div>
			<?php } ?>
			  </header><!-- #header -->