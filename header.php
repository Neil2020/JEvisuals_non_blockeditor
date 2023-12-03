<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name');?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="page-transition">
  <div class="custom-site-logo">
    <div class="s_logo_letters">
      <img class="s_logo s_logo_j s_logo_j_active" src="<?php echo get_template_directory_uri() . '/assets/img/Site_logos/logo_J.webp'?>" alt="">
      <img class="s_logo s_logo_e s_logo_e_active" src="<?php echo get_template_directory_uri() . '/assets/img/Site_logos/logo_E.webp'?>" alt="">
    </div>
    <div class="s_logo_vis_div">
      <img class="s_logo s_logo_vis" src="<?php echo get_template_directory_uri() . '/assets/img/Site_logos/logo_visuals.webp'?>" alt="">
    </div>
  </div>
</div> 


<div class="mx-5" >
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img width="160px" height="100px" src="<?php echo get_template_directory_uri() . '/assets/img/Site_logo.png'?>" alt="Site Logo" >
      </a>


      <ul class="nav nav-pills align-self-center justify-content-center">
      <li class="nav-item"><a href="/Work" class="nav-link text-dark">WORK</a></li>
      <li class="nav-item"><a href="/Cinematography" class="nav-link text-dark">CINEMATOGRAPHY</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-dark">ABOUT</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-dark" aria-current="page">CONTACT</a></li>  
      </ul>
    </header>
</div>
  </div>

