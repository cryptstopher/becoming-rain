<?php get_header(); ?>

<?php $my_query = new WP_Query( 'category_name=featured&posts_per_page=1' );
while ( $my_query->have_posts() ) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<?php endwhile; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
if ( $post->ID == $do_not_duplicate ) continue;?>
<hr>
<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><?php the_excerpt(); ?></p>
<?php endwhile; endif; ?>


<?php get_footer(); ?>