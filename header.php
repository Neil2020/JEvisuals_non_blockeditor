<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name');?></title>
    <?php wp_head(); ?>
</head>
<body>

<div class="w-100" style="height:15vh" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000">
  <div class="mx-5">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-center">

      <ul class="navbar-collapse nav mh-100 w-100 col-12 col-md-auto justify-content-around align-content-center">
        <li><a href="#" class="h-100 text-dark nav-link px-2 pt-5"><h3 class="border-end border-dark border-2 px-4">CONTACT</h3></a></li>
        <li><a href="#" class="h-100 text-dark nav-link px-2 pt-5"><h3 class="border-end border-dark border-2 px-4">ABOUT</h3></a></li>
        <li><a href="<?php echo get_site_url()?>" class="nav-link px-2">
                <img width="240px" height="150px" src="<?php echo get_template_directory_uri() . '/assets/img/Site_logo.png'?>" alt="Site Logo" >
            </a></li>
        <li><a href="/Work" class="h-100 text-dark nav-link px-2 pt-5"><h3 class="border-start border-dark border-2 px-4">WORK</h3></a></li>
        <li><a href="#" class="h-100 text-dark nav-link px-2 pt-5"><h3 class="border-start border-dark border-2 px-4">CINEMATOGRAPHY</h3></a></li>
      </ul>
    </header>
    </div>
  </div>

