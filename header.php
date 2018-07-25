<?php 
global $post;
if(is_front_page()){
  $page_id = get_option( 'page_on_front' );
}else{
  $page_id = $post->ID;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico">
    <!--Font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/font-icon/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
    <title>Skysite</title>
  </head>
  <body>

    <!-- Header start -->
    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand order-first" href="javascript:void(0);"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse order-lg-first order-last" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PRODUCTS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:void(0);">Projects</a>
                <a class="dropdown-item" href="javascript:void(0);">Facilities</a>
                <a class="dropdown-item" href="javascript:void(0);">Archive</a>
              </div>
            </li>
            <li class="active">
              <a href="javascript:void(0);">BENEFITS</a>
            </li>
            <li>
              <a href="javascript:void(0);">COMPANY</a>
            </li>
            <li>
              <a href="javascript:void(0);"> CONTACT</a>
            </li>
          </ul>
        </div>
        <div class="form-inline my-2 my-lg-0 order-lg-last order-first hdr-auto">
          <div class="telephone"><a href="tel:844"><em class="icon-phone"></em> <span>844-Skysite</span></a></div>
          <div class="mail"><a href="mailto:info@skysite.in">info@skysite.in</a></div>
          <div class="country-hdr">
            <select name="countries" id="countries">
              <option value='ad' data-image="<?php echo get_stylesheet_directory_uri();?>/images/india.png" data-imagecss="flag ad" data-title="Andorra">Skysite India</option>
              <option value='ae' data-image="<?php echo get_stylesheet_directory_uri();?>/images/uk.png" data-imagecss="flag ae" data-title="United Arab Emirates">Planwell UK</option>
              <option value='af' data-image="<?php echo get_stylesheet_directory_uri();?>/images/global.png" data-imagecss="flag af" data-title="Afghanistan">Global</option>
            </select>  
          </div>
        </div>
      </nav>
    </header>
    <!-- Header end -->
  


    <?php if(get_field('dsiplay_banner',$page_id) == 'Yes'){?>
    <?php get_template_part('template-parts/banner');?>
    <?php }?>
    <!-- app store start -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-10 col-lg-6">
            <div class="app-store-hld">
              <a href="javascript:void(0);"><img alt="" src="<?php echo get_stylesheet_directory_uri();?>/images/apple.png"/></a>
              <a href="javascript:void(0);"><img alt="" src="<?php echo get_stylesheet_directory_uri();?>/images/google-play.png"/></a>
              <a href="javascript:void(0);"><img alt="" src="<?php echo get_stylesheet_directory_uri();?>/images/sync-app.png"/></a>
            </div>
          </div>
        </div>
      </div>
    <!-- app store end -->