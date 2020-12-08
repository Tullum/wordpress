<?php
get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

		

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php

if (have_posts()) :
	while (have_posts()) : the_post();?>

	<h1><?php the_title(); ?></h1>
	
	<?php the_content(); ?>

	<?php endwhile;

else :
	echo '<p>No content</p>';

endif;
?>

<h1>hello!!!</h1>



<?php
get_footer();
?>
<?php