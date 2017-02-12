<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
<title>
<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	?>
</title>
<?php wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap.min.css');
?>
<?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
</head>

<!-- full container --> <div class="container">

<!-- just the header --> 
<header>

<div class="row">
  <div class="col-xs-8 col-md-4">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="thumbnail">
      <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/becoming-rain/assets/images/rad.gif" alt="frakes">
    </a>
  </div>

  <div class="col-xs-8">
<div class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></div>

<aside><?php bloginfo( 'description' ); ?></aside>

<nav>

<?php wp_nav_menu( array( 
'menu_class' => 'breadcrumb' 
) ); ?>

</nav>
    
  </div>

</div>

</header>



