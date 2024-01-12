<?php 
    get_header();

?>
<div class="container" >
    <div class="d-flex m-auto justify-content-center flex-column flex-wrap align-content-center my-5">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
