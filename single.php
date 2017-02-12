<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>


   
    <article>
     
    <h1><?php the_title(); ?></h2>
    <p style="padding: 0px 0px 0px 0px;"><?php the_content(); ?></p>
 
    </article>


   
<?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
?>

<?php get_footer(); ?>