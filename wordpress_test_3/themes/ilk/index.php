<?php get_header(); ?>
<div> <?php wp_nav_menu('main'); ?></div>
<div><h1> ilk test index page </h1>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
    
        <div> <?php the_title(); ?>  </div>
        <div> <?php the_excerpt(); ?>  </div><hr>
<?php
    endwhile;
else : ?>
        <div> Didnt find anything </div> 
<?php
endif;
?>
</div>    
<?php get_footer();?>