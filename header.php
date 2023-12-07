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

<div class="container">
<div class=" header-container" >

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img width="160px" height="100px" src="<?php echo get_template_directory_uri() . '/assets/img/Site_logo.svg'?>" alt="Site Logo" >
      </a>
      <div class="mobile-menu-button">
      <i class="desktop-menu-icon">
        <svg id="svg" class="inline-svg" enable-background="new 0 0 32 22.5" height="80px" version="1.1" viewBox="0 0 32 22.5" width="80px" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px"><title></title><g class="svg-menu-toggle">
        <path class="bar" d="M20.945,8.75c0,0.69-0.5,1.25-1.117,1.25H3.141c-0.617,0-1.118-0.56-1.118-1.25l0,0c0-0.69,0.5-1.25,1.118-1.25h16.688C20.445,7.5,20.945,8.06,20.945,8.75L20.945,8.75z"></path>
        <path class="bar" d="M20.923,15c0,0.689-0.501,1.25-1.118,1.25H3.118C2.5,16.25,2,15.689,2,15l0,0c0-0.689,0.5-1.25,1.118-1.25 h16.687C20.422,13.75,20.923,14.311,20.923,15L20.923,15z"></path>
        <path class="bar" d="M20.969,21.25c0,0.689-0.5,1.25-1.117,1.25H3.164c-0.617,0-1.118-0.561-1.118-1.25l0,0c0-0.689,0.5-1.25,1.118-1.25h16.688C20.469,20,20.969,20.561,20.969,21.25L20.969,21.25z"></path>
        {C}<rect fill="none" height="80" width="80"></rect></g>
      </svg></i>
      </div>
      <div class="menu-items align-self-center justify-content-center">
        <ul class="nav nav-pills align-self-center justify-content-center">
        <li class="nav-item"><a href="/Work" class="nav-link text-dark">WORK</a></li>
        <li class="nav-item"><a href="/Cinematography" class="nav-link text-dark">CINEMATOGRAPHY</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-dark">ABOUT</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-dark" aria-current="page">CONTACT</a></li>  
        </ul>
      </div>
    </header>
    </div>
</div>
  </div>

