<?php get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>     
    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_excerpt(); ?></p>
   
<?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
?>

<br>
<p style="text-align: right;"> <?php previous_posts_link(  ); ?> | <?php next_posts_link(  ); ?></p>



<?php get_footer(); ?>