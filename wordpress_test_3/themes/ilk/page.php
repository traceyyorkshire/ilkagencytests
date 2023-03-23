<?php get_header(); ?>
<div> <?php wp_nav_menu('main'); ?><hr></div>
<div>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
    
        <div><h1><?php the_title(); ?> </h1> </div>
        <div><p><?php the_excerpt(); ?> </p>  </div><hr>        
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium');
        } ?>
        <h3> ACF FIELDS:</h3>
        <p>
        <?php the_field('text_1'); ?> <br> 
        <?php the_field('text_2'); ?>
        </p>
<?php
    endwhile;
else : ?>
        <div> Didnt find anything </div> 
<?php
endif;
?>
</div>    
<?php get_footer();?>