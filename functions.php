<?php function first_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="lead">', $content, 1);
}
add_filter('the_content', 'first_paragraph'); ?>

<?php function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More&hellip;', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' ); ?>